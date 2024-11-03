<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Kue;
use Cart;
use PDF;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexHome()
    {
        $data = [
            'title' => 'Home',
            'kues' => Kue::all(),
        ];
        return view('pages.home.index', $data);
    }
    public function indexCart()
    {
        $userId = auth()->user()->id;
        $cart = Cart::session($userId);
        $data = [
            'title' => 'Keranjang',
            'kues' => $cart->getContent(),
            'totalHarga' => $cart->getSubTotal(),
            
        ];
        return view('pages.home.cart', $data);
    }
    public function cartAdd(Kue $kue) {
        $userId = auth()->user()->id;
        $cart = Cart::session($userId);
        $item = [
            'id' => $kue->id,
            'name' => $kue->nama,
            'price' => $kue->harga,
            'quantity' => 1,
            'attributes' => [
                'ukuran' => $kue->ukuran,
                'image' => $kue->image,
            ]
        ];
        $cart->add($item);
        return redirect('/home');
    }
    public function cartDelete(Kue $kue) {
        $userId = auth()->user()->id;
        $cart = Cart::session($userId);
        $cart->remove($kue->id);
        return redirect('/keranjang');
    }
    public function incrementQuantity(Kue $kue) {
        $userId = auth()->user()->id;
        $cart = Cart::session($userId);
        $cart->update(
            $kue->id, [
                'quantity' => +1,
            ]
        );
        return redirect('/keranjang');
    }
    public function decrementQuantity(Kue $kue) {
        $userId = auth()->user()->id;
        $cart = Cart::session($userId);
        $quantity = $cart->get($kue->id)->quantity;
        if ($quantity !== 1) {
            $cart->update(
                $kue->id, [
                    'quantity' => -1,
                ]
            );
        }
        return redirect('/keranjang');
    }
    public function invoice(Request $request) {
        $userId = auth()->user()->id;
        $cart = Cart::session($userId);
        $kues = $cart->getContent();
        $totalHarga = $cart->getSubTotal();
        $pembeli = $request->pembeli;
        $data = [
            'title' => 'Struk',
            'pembeli' => $pembeli,
            'kues' => $kues,
            'totalHarga' => $totalHarga,
        ];
        return view('invoice', $data);
    	// $pdf = PDF::loadview('invoice', $data)->setOptions(['defaultFont' => 'sans-serif']);;
	    // return $pdf->stream();
    }
    public function index()
    {
        $data = [
            'title' => 'Kue',
            'kues' => Kue::all(),
        ];
        return view('pages.home.kue', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Buat Menu',
        ];
        return view('pages.home.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'ukuran' => 'required',
            'image' => 'image|file|required|max:20480'
        ]);
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
        
        Kue::create($validatedData);
        return redirect('/kue');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kue = Kue::findOrFail($id);
        if($kue->image) {
            Storage::delete($kue->image);
        }
        Kue::destroy($id);
        echo "<script>alert('Menu terhapus'); window.location.href = '/kue'</script>";
    }
}

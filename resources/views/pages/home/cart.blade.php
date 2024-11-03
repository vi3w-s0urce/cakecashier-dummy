@extends('main')
@include('layouts.main_header')
@section('page')
  <section class="px-32 py-20">
    <h1 class="text-2xl font-bold mb-5">Keranjang Orderan</h1>
    <div class="border-2 rounded-2xl p-3">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th>NO</th>
          <th>Kue</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Hapus</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @php
          $i = 1;    
        @endphp
        @foreach ($kues as $kue)     
        <tr>
          <td>{{ $i++ }}</td>
          <td>
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="h-36 pr-2">
                  <img src="{{ asset('storage/' . $kue->attributes->image) }}" class="rounded-xl" />
                </div>
              </div>
            <div>
              <p class="text-xl font-bold mb-2">{{ $kue->name }}</p>
              <p class="text-base text-slate-500">Ukuran: {{ $kue->attributes->ukuran }}cm</p>
            </div>
            </div>
          </td>
          <td><p class="text-lg">Rp {{ number_format($kue->price, '0', ',', '.') }}</p></td>
          <td>
            <div class="flex items-center gap-x-5">
              <form action="/keranjang/decrementQuantity/{{ $kue->id }}" method="POST" class="m-0">
                @csrf
                <button class="border-2 rounded-lg p-1 hover:border-primary duration-300"><iconify-icon icon="uil:minus" width="15"></iconify-icon></button>
              </form>
              <p class="text-lg" id="quantity">{{ $kue->quantity }}</p>
              <form action="/keranjang/incrementQuantity/{{ $kue->id }}" method="POST" class="m-0">
                @csrf
                <button class="border-2 rounded-lg p-1 hover:border-primary duration-300"><iconify-icon icon="uil:plus" width="15"></iconify-icon></button>
              </form>
            </div>
          </td>
          <th>
            <form action="/keranjang/delete/{{ $kue->id }}" method="POST">
              @csrf
              <button class="border-2 rounded-lg p-1 hover:border-error duration-300"><iconify-icon icon="uil:multiply" width="15"></iconify-icon></button>
            </form>
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
      <form action="/invoice" method="POST" class="mt-5" target="_blank">
        @csrf
        <div class="flex justify-between">
          <div class="flex items-center gap-5 w-4/12">
            <label>Nama: </label>
            <input name="pembeli" type="text" placeholder="Masukkan Nama Pembeli" class="input input-bordered w-full" required />
          </div>
          <div>
            <p class="text-xl">Total Harga: <span class="font-bold">Rp {{ number_format($totalHarga, '0', ',', '.') }}</span></p>
          </div>
        </div>
        <div class="flex justify-between mt-5 gap-5">
          <a href="/home" class="btn btn-outline btn-primary w-6/12">
            <iconify-icon icon="uil:arrow-left" width=25></iconify-icon>
            Pilih Kembali
          </a>
          <button type="submit" class="btn btn-primary text-slate-50 w-6/12">Order</button>
        </div>
      </form>
    </section>
@endsection
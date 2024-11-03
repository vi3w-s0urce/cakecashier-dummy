@extends('main')
@include('layouts.main_header')
@section('page')
    <section class="px-32 py-20">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold mb-3">Edit Menu Kue</h1>
            <p class="text-slate-500 mb-5">Kasir dapat menambahkan dan menghapus menu kue</p>
            <a href="/kue/create" class="btn btn-outline btn-primary">Tambahkan Menu Kue</a>
        </div>
        <div>
            <div class="grid grid-cols-4 gap-x-12 gap-y-12">
                @foreach ($kues as $kue)    
                <div class="card max-h-[28rem] w-96 bg-base-100 shadow-xl">
                    <figure><img src="{{ asset('storage/' . $kue->image) }}" alt="Kue" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $kue->nama }}</h2>
                        <p class="text-slate-500">Ukuran: {{ $kue->ukuran }}cm</p>
                        <div class="card-actions items-center justify-between">
                            <p class="text-xl text-primary font-bold">Rp {{ number_format($kue->harga, '0', ',', '.') }}</p>
                            <form method="POST" action="kue/{{ $kue->id }}" class="mb-0">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline btn-error">Hapus Menu</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="card w-96 bg-base-100 shadow-xl justify-center items-center min-h-[282px]">
                    <a href="/kue/create" class="text-primary text-center">
                        <iconify-icon icon="uil:plus-circle" width="100"></iconify-icon>
                        <p class="text-xl mt-5">Tambahkan Menu Kue</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
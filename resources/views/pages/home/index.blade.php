@extends('main')
@include('layouts.main_header')
@section('page')
    <section class="px-32 py-20">
      <div class="text-center">
        <h1 class="text-3xl font-bold mb-3">Pilih dan Order</h1>
        <p class="text-slate-500 mb-10">Silahkan pilih dan order dari menu kue yang tersedia</p>
      </div>
      <div>
      <div class="grid grid-cols-4">
        @foreach ($kues as $kue)    
        <div class="card max-h-[28rem] w-96 bg-base-100 shadow-xl">
          <figure><img src="{{ asset('storage/' . $kue->image) }}" alt="Kue" /></figure>
          <div class="card-body">
            <h2 class="card-title">{{ $kue->nama }}</h2>
            <p class="text-slate-500">Ukuran: {{ $kue->ukuran }}cm</p>
            <div class="card-actions items-center justify-between">
              <p class="text-xl text-primary font-bold">Rp {{ number_format($kue->harga, '0', ',', '.') }}</p>
              <form action="/keranjang/{{ $kue->id }}" method="POST" class="mb-0" onsubmit="alert('Kue berhasil ditambahkan ke keranjang!')">
                @csrf
                <button type="submit" class="btn btn-primary btn-outline"><iconify-icon icon="uil:shopping-bag" width=25></iconify-icon></button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </section>
@endsection
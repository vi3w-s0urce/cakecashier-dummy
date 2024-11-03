@extends('main')
@include('layouts.main_header')
@section('page')
    <section class="px-32 py-20">
        <div class="flex justify-center items-center">
            <div>
                <h1 class="text-3xl font-bold mb-3">Tambahkan Menu Kue</h1>
                <h1 class="text-base text-slate-500">Silahkan tambahkan menu kue dengan mengisi form dengan lenkap</h1>
                <form action="/kue" method="POST" class="mt-5" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control w-full mb-3">
                        <label class="label">Nama</label>
                        <input type="text" name="nama" placeholder="Masukkan Nama Kue" class="input input-bordered w-full" required/>
                    </div>
                    <div class="form-control w-full mb-3">
                        <label class="label">Harga</label>
                        <label class="input-group">
                            <input type="number" name="harga" placeholder="Masukkan Harga Kue" class="input input-bordered w-full" />
                            <span>Rupiah</span>
                        </label>
                    </div>
                    <div class="form-control w-full mb-3">
                        <label class="label">Ukuran</label>
                        <label class="input-group">
                            <input type="number" name="ukuran" placeholder="Masukkan Ukuran Kue" class="input input-bordered w-full" />
                            <span>cm</span>
                        </label>
                    </div>
                    <div class="form-control w-full mb-3">
                        <label class="label">Gambar</label>
                        <input type="file" name="image" class="file-input file-input-bordered file-input-primary w-full" />
                    </div>
                    <button type="submit" class="w-full btn btn-primary text-slate-50 mt-3">Tambahkan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
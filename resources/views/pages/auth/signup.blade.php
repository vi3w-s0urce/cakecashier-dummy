@extends('main')
@include('layouts.header')
@section('page')
<section class="px-32 py-5">
    <div class="flex justify-center items-center gap-x-12">
        <div class="relative w-4/12">
            <div class="text-slate-800 z-10 absolute m-6">
                <h1 class="text-3xl font-bold text-slate-50">Cake</h1>
                <h1 class="text-3xl font-bold text-slate-50">Cashier</h1>
            </div>
            <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=736&q=80" alt="cake" class="w-full z-0 rounded-l-3xl">
        </div>
        <div class="flex flex-col">
            <div>
            <h1 class="text-3xl font-bold mb-3">Daftar Akun</h1>
            <h1 class="text-base text-slate-500">Silahkan buat dan daftarkan akun sebagai kasir</h1>
            <form action="/signup" method="POST" class="mt-5">
                @csrf
                <div class="form-control w-full mb-3">
                    <label class="label">Nama</label>
                    <input type="text" name="fullname" placeholder="Masukkan Nama Lengkap" class="input input-bordered w-full" required />
                </div>
                <div class="form-control w-full mb-3">
                    <label class="label">Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username" class="input input-bordered w-full" required />
                </div>
                <div class="form-control w-full mb-5">
                    <label class="label">Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" class="input input-bordered w-full" required />
                </div>
                <button type="submit" class="w-full btn btn-primary text-slate-50 mb-3">Daftar</button>
            </form>
            </div>
        </div>
    </div>
</section>
@endsection
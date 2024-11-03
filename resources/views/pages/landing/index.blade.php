@extends('main')
@include('layouts.header')
@section('page')
    {{-- DEMO MODAL --}}
    <div class="h-[100dvh] w-full flex z-[99999] top-0 left-0 justify-center items-center backdrop-blur-[3px] px-4 fixed" id="demo-modal">
        <div class='bg-white border-[#999999] border-2 rounded-[16px] p-6 w-fit max-w-[800px] flex flex-col xl:flex-row gap-6 shadow-2xl'>
            <div class='flex flex-col w-full xl:items-start xl:w-[50%]'>
                <div class='flex items-center gap-3'>
                    <h1 class='text-[46px]'>👋</h1>
                    <div class='flex flex-col'>
                        <h1 class='font-mondwest text-[#333] text-2xl'>CakeCashier</h1>
                        <a href="https://cakecashier.viewsource.work" class='text-[#777] font-mondwest'>
                            https://cakecashier.viewsource.work/
                        </a>
                    </div>
                </div>
                <p class='text-[#333] text-xs font-hack font-bold mt-3 indent-4'>
                    Hello Visitor! Welcome to one of my dummy projects. Dummy project is a project that i made to train my skills or just for my school task. I’ve hosted it to provide a preview for you and to showcase it in my portfolio. Enjoy!
                </p>
                <div class='flex gap-6 mt-6'>
                    <div class='flex flex-col gap-2'>
                        <p class='text-[#333] text-base font-mondwest'>Made With</p>
                        <div class='flex items-center gap-3'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-laravel">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 17l8 5l7 -4v-8l-4 -2.5l4 -2.5l4 2.5v4l-11 6.5l-4 -2.5v-7.5l-4 -2.5z" />
                                <path d="M11 18v4" />
                                <path d="M7 15.5l7 -4" />
                                <path d="M14 7.5v4" />
                                <path d="M14 11.5l4 2.5" />
                                <path d="M11 13v-7.5l-4 -2.5l-4 2.5" />
                                <path d="M7 8l4 -2.5" />
                                <path d="M18 10l4 -2.5" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tailwind">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M11.667 6c-2.49 0 -4.044 1.222 -4.667 3.667c.933 -1.223 2.023 -1.68 3.267 -1.375c.71 .174 1.217 .68 1.778 1.24c.916 .912 2 1.968 4.288 1.968c2.49 0 4.044 -1.222 4.667 -3.667c-.933 1.223 -2.023 1.68 -3.267 1.375c-.71 -.174 -1.217 -.68 -1.778 -1.24c-.916 -.912 -1.975 -1.968 -4.288 -1.968zm-4 6.5c-2.49 0 -4.044 1.222 -4.667 3.667c.933 -1.223 2.023 -1.68 3.267 -1.375c.71 .174 1.217 .68 1.778 1.24c.916 .912 1.975 1.968 4.288 1.968c2.49 0 4.044 -1.222 4.667 -3.667c-.933 1.223 -2.023 1.68 -3.267 1.375c-.71 -.174 -1.217 -.68 -1.778 -1.24c-.916 -.912 -1.975 -1.968 -4.288 -1.968z" />
                            </svg>
                        </div>
                    </div>
                    <div class='flex flex-col gap-2'>
                        <p class='text-[#333] text-base font-mondwest'>By viewsource</p>
                        <div class='flex flex-col gap-3'>
                            <div class='flex items-center gap-2 group cursor-pointer' onclick="window.open('https://github.com/vi3w-s0urce')">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-[#333] text-[24px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z"></path>
                                </svg>
                                <p class='text-[#333] text-[10px] sm:text-xs font-hack group-hover:text-[#0000ff]'>github.com/vi3w-s0urce</p>
                            </div>
                            <div class='flex items-center gap-2 group cursor-pointer' onclick="window.open('https://linkedin.com/in/vi3w-s0urce')">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-[#333] text-[24px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                                </svg>
                                <p class='text-[#333] text-[10px] sm:text-xs font-hack group-hover:text-[#0000ff]'>linkedin.com/in/vi3w-s0urce</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='w-full xl:w-[50%] flex flex-col gap-2'>
                <p class='font-mondwest text-[#333] text-base'>How to use this website:</p>
                <div class='py-3 px-4 flex flex-col gap-2 bg-[#e0e0e0]'>
                    <p class="text-xs font-hack">
                        This is just a simple website that i make for my school task
                        <br>
                        <br>
                        
                        you can login as visitor with this credentials:
                        <br>
                        <br>
                        <span class="font-bold">
                          username: visitor
                          <br>
                          password: visitor
                        </span>
                    </p>
                </div>
                <Button class='min-w-0 w-full h-fit px-6 py-3 text-white font-hack font-bold mt-1 rounded-none bg-[#00FF00] hover:bg-[#00aa00] text-base' onclick="closeDemoModal()">
                    ENJOY!
                </Button>
                <script>
                    const demoModal = document.getElementById("demo-modal");

                    function closeDemoModal() {
                        demoModal.remove()
                    }
                </script>
            </div>
        </div>
    </div>

    <section class="px-32 py-20 flex justify-center items-center">
        <div class="hero max-h-full">
            <div class="flex w-full items-center justify-between">
                <div>
                    <h1 class="text-5xl font-bold">Transaksi Mudah<br>dan Aman!</h1>
                    <p class="py-6 text-slate-500">CakeCashier adalah perangkat lunak yang dirancang khusus untuk membantu <br>manajemen penjualan dan transaksi pada usaha penjualan kue,<br>dengan itu dapat membantu memudahkan kasir<br>untuk menangani transaksi pada toko.</p>
                    <p class="mb-5"></p>
                    <a href="/login" class="btn btn-primary text-slate-50">Masuk</a>
                </div>
                <img src="https://images.unsplash.com/photo-1611293388250-580b08c4a145?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1138&q=80" class=" w-5/12 rounded-3xl shadow-2xl" />
            </div>
        </div>
    </section>
    <section class="px-32 py-20">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-5">Cara Penggunaan</h1>
            <p class="text-base text-slate-500">Langkah langkah penggunaan aplikasi CakeCashier<br>sebagai alat bantu untuk kasir</p>
        </div>
        <div class="flex justify-between items-center gap-x-20">
            <div class="text-center mt-7">
                <iconify-icon icon="uil:user" style="color: #f87171;" width="200"></iconify-icon>
                <h1 class="text-2xl font-bold mb-3">Masuk sebagai Kasir</h1>
                <p class="text-slate-500">Tekan tombol login lalu masukkan<br>akun kasir yang telah terdaftar</p>
            </div>
            <iconify-icon icon="uil:angle-right" style="color: #555;" width="50"></iconify-icon>
            <div class="text-center mt-7">
                <iconify-icon icon="uil:book" style="color: #f87171;" width="200"></iconify-icon>
                <h1 class="text-2xl font-bold mb-3">Order Menu</h1>
                <p class="text-slate-500">Pilih lalu masukkan kue yang<br>terdapat pada menu ke keranjang</p>
            </div>
            <iconify-icon icon="uil:angle-right" style="color: #555;" width="50"></iconify-icon>
            <div class="text-center mt-7">
                <iconify-icon icon="uil:shopping-bag" style="color: #f87171;" width="200"></iconify-icon>
                <h1 class="text-2xl font-bold mb-3">Cetak Struk Transaksi</h1>
                <p class="text-slate-500">Setelah selesai memilih kue yang<br>ingin dibeli pembeli, maka dengan<br>otomatis struk transaksi akan muncul</p>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection

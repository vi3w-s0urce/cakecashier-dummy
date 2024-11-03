<header class="flex justify-between items-center px-32 py-5">
    <div><a href="/home" class="text-xl font-bold text-primary">CakeCashier</a></div>
    <ul class="flex gap-7">
        <li><a href="/home" class="text-base font-bold text-slate-800 hover:text-primary duration-300">Menu</a></li>
        <li><a href="/kue" class="text-base font-bold text-slate-800 hover:text-primary duration-300">Edit Menu</a></li>
        <li><a href="/keranjang" class="text-base font-bold text-slate-800 hover:text-primary duration-300">Keranjang</a></li>
    </ul>
    <div class="flex items-center gap-x-5">
        <p class="text-base">Hi, {{ auth()->user()->fullname }}</p>
        <form action="/logout" method="POST" class="mb-0">
            @csrf
            <button type="submit" class="link link-error text-slate-500 hover:text-error duration-300"><iconify-icon icon="uil:signout" width=30></iconify-icon></button>
        </form>
    </div>
</header>

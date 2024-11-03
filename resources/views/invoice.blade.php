<!DOCTYPE html>
<html lang="en" data-theme="myTheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <section class="px-32 py-20">
        <div>
            <h1 class="text-5xl font-bold">Struk Orderan Kue</h1>
            <p class="text-lg mt-2 text-primary font-bold">CakeCashier</p>
        </div>
        <div class="mt-10">
            <h1 class="text-2xl font-bold mb-2">Daftar Orderan</h1>
            <div class="border-2 rounded-2xl p-3">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Kue</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
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
                        <div>
                          <p class="text-xl font-bold mb-2">{{ $kue->name }}</p>
                          <p class="text-base text-slate-500">Ukuran: {{ $kue->attributes->ukuran }}cm</p>
                        </div>
                      </td>
                      <td><p class="text-lg">Rp {{ number_format($kue->price, '0', ',', '.') }}</p></td>
                      <td>
                        <div class="flex items-center gap-x-5">
                          <p class="text-lg" id="quantity">{{ $kue->quantity }}</p>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
                <div class="mt-5">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-5 w-4/12">
                          <p class="text-xl">Nama Pembeli: <span class="font-bold">{{ $pembeli }}</span></p>
                        </div>
                        <div>
                          <p class="text-xl">Total Harga: <span class="font-bold">Rp {{ number_format($totalHarga, '0', ',', '.') }}</span></p>
                        </div>
                      </div>
                </div>
        </div>
        <div class="mt-5">
            <p class="text-lg">Silahkan bayar ke kasir sesuai<br>harga yang tertera pada struk ini.</p>
        </div>
        <div class="mt-5 text-2xl text-center font-bold">
            <p>Terima Kasih telah <br> berbelanja di toko kue kami, <br>datang kembali.</p>
        </div>
    </section>
</body>
</html>
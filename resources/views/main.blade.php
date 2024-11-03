<!DOCTYPE html>
<html lang="en" data-theme="myTheme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
    <style>
        @font-face {
            font-family: "Mondwest";
            src: url("/assets/fonts/Mondwest.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Hack";
            src: url("/assets/fonts/Hack-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Hack";
            src: url("/assets/fonts/Hack-Bold.woff") format("woff");
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>

<body class="font-mons">
    @yield('page')
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
</body>

</html>

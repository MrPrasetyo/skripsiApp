<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>

<body>
    @include('partials.navbar')

    <section id="header">
        <header class="w-full h-[90vh] bg-cover bg-center"
            style="background-image: url('{{ asset('images/foto1.jpg') }}')">
            <div class="flex w-[90%] items-start justify-end flex flex-col w-full h-full gap-y-2 lg:pl-28 pb-20">
                <h2 class="bg-[#e80e0e] lg:px-2 font-bold lg:text-xl text-white lg:tracking-tight">Selamat Datang di
                    Website Pengajuan Surat Jalan</h2>
                <h1 class="font-bold lg:text-7xl text-yellow-300 lg:tracking-tight">POS LANTAS BINTANG RORO 99</h1>
                <h3 class="bg-black lg:px-2 lg:py-1 lg:font-medium lg:text-xl text-white lg:tracking-tight">Khusus untuk
                    Pengajuan Surat Jalan Kendaraan untuk Rute Batam-Belawan dan Batam-Patimban</h3>
            </div>
        </header>
    </section>
</body>

</html>

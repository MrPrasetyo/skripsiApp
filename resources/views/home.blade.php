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
    <section class="bg-white">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full rounded-xl shadow-lg hover:scale-105 ease-in-out duration-300"
                src="{{asset('images/daftar.jpg')}}"
                alt="Mari Mendaftar">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Belum punya Akun? Mari Daftar disini !</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg ">Dengan Memiliki Akun Kalian bisa mengakses seluruh Fitur yang ada di Website ini, termasuk untuk Mengajukan Kendaraan Kalian agar bisa dibuatkan Surat Keterangan Jalannya...</p>
                <a href="{{route('auth.register')}}"
                    class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-xl hover:scale-105 ease-in-out duration-300">
                    Daftar Akun
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <hr class="w-[90%] mx-auto my-2">
    {{-- Panduan --}}
    <section class="bg-white">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Bingung bagaimana mengisi Formnya? Lihat Panduan !</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg ">Disini disediakan Panduan untuk Mengisi Form serta cara Mengajukan Kendaraan yang kamu miliki, agar bisa dibuatkan Surat Keterangan Jalannya...</p>
                <a href="{{route('panduan')}}"
                    class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-xl hover:scale-105 ease-in-out duration-300">
                    Lihat Panduan
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <img class="w-full rounded-xl shadow-lg hover:scale-105 ease-in-out duration-300"
            src="{{asset('images/bingung.jpg')}}"
            alt="Mari Mendaftar">
        </div>
    </section>
</body>

</html>

    @extends('partials.main')

    @section('title', 'panduan')

    @section('content')
        @include('partials.navbar')
        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article
                    class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                <img class="mr-4 w-16 h-16 rounded-full"
                                    src="images/profile.jpg" alt="Dwi Prasetyo">
                                <div>
                                    <a href="#" rel="author"
                                        class="text-xl font-bold text-gray-900 dark:text-white">Dwi Prasetyo</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400">Petugas Pembuat Surat Jalan</p>
                                    <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                            datetime="2022-02-08" title="February 8th, 2022">Juni. 06 2024</time></p>
                                </div>
                            </div>
                        </address>
                        <h1
                            class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                            Panduan Dalam Memasukkan Data kedalam Form</h1>
                    </header>
                    <p class="lead text-justify">Data yang dimasukkan kedalam Form harus Data yang benar tanpa adanya pemalsuan pada Data tersebut.</p>
                    <p class="text-justify">Dibawah ini merupakan Panduan Dalam pengisian Form Data Kendaraan, perhatikan Nomor-nomor yang ada di dalam Gambar untuk memahami Panduan</p>
                    <!-- component -->
                    <div class="relative flex h-64 w-full cursor-pointer flex-col overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-md transition-opacity hover:opacity-90"
                        data-dialog-target="image-dialog">
                        <img alt="nature" class="h-full w-full object-cover object-center"
                            src="images/ContohSTNK.png" />
                    </div>
                    <div data-dialog-backdrop="image-dialog" data-dialog-backdrop-close="true"
                        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                        <div class="relative m-4 w-3/4 min-w-[75%] max-w-[75%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl"
                            role="dialog" data-dialog="image-dialog">
                            <div
                                class="relative p-0 font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased">
                                <img alt="nature" class="h-[48rem] w-full object-contain object-center"
                                    src="images/ContohSTNK.png" />
                            </div>
                            <div class="flex shrink-0 flex-wrap items-center justify-between p-4 text-blue-gray-500">
                                <button
                                    class="flex select-none items-center gap-3 rounded-lg border border-blue-gray-500 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-500 transition-all hover:opacity-75 focus:ring focus:ring-blue-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    type="button" data-ripple-dark="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-4 w-4">
                                        <path fill-rule="evenodd"
                                            d="M15.75 4.5a3 3 0 11.825 2.066l-8.421 4.679a3.002 3.002 0 010 1.51l8.421 4.679a3 3 0 11-.729 1.31l-8.421-4.678a3 3 0 110-4.132l8.421-4.679a3 3 0 01-.096-.755z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Share
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                        <div class="text-md font-bold text-gray-700 py-1">
                            Contoh STNK
                        </div>
                    </div>

                    <!-- from cdn -->
                    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

                    <ol>
                        <li><strong>Nomor Plat</strong>. Data dari Nomor Plat dimasukkan ke dalam Form dengan Label "Nomor Plat" di atasnya, contoh Data : <strong>"BP 1717 UJ"</strong>
                        </li>
                        <li><strong>Nama Pemilik</strong>. Data dari Nama Pemilik dimasukkan ke dalam Form dengan Label "Nama Pemilik" di atasnya, contoh Data : <strong>"Aditya Rangga"</strong></li>
                        <li><strong>Alamat</strong>. Data dari Alamat dimasukkan ke dalam Form dengan Label "Alamat Pemilik" di atasnya, contoh Data : <strong>"Jl. Selembayung Jingga No. 123, Batu Ampar, Kota Batam"</strong></li>
                        <li><strong>Merek/Type</strong>. Data dari Merek/Type dimasukkan ke dalam Form dengan Label "Merk" dan "Type" di atasnya, contoh Data : <strong>"Hyundai/Stargazer Prime"</strong>
                        </li>
                        <li><strong>Jenis/Model</strong>. Data dari Jenis/Model dimasukkan ke dalam Form dengan Label "Jenis" dan "Model" di atasnya, contoh Data : <strong>"Truck/Tronton"</strong>
                        </li>
                        <li><strong>TH. PembuatanPerakitan</strong>. Data dari TH. PembuatanPerakitan dimasukkan ke dalam Form dengan Label "Tahun" di atasnya, contoh Data : <strong>"2022"</strong>
                        </li>
                        <li><strong>Isi Silinder</strong>. Data dari Isi Silinder dimasukkan ke dalam Form dengan Label "Isi Silinder" di atasnya, contoh Data : <strong>"1497 CC"</strong>
                        </li>
                        <li><strong>Warna</strong>. Data dari Warna dimasukkan ke dalam Form dengan Label "Warna" di atasnya, contoh Data : <strong>"Putih Mutiara"</strong>
                        </li>
                        <li><strong>Nomor Mesin</strong>. Data dari Nomor Mesin dimasukkan ke dalam Form dengan Label "Nomor Mesin" di atasnya, contoh Data : <strong>"G481917318"</strong>
                        </li>
                        <li><strong>Nomor Rangka</strong>. Data dari Nomor Rangka dimasukkan ke dalam Form dengan Label "Nomor Rangka" di atasnya, contoh Data : <strong>"MF38J1JD818"</strong>
                        </li>
                    </ol>
                    <h3>Data di atas tadi, dimasukkan ke Dalam Form Tambahkan Kendaraan yang ada di Halaman <a href="{{url('dashboard')}}" target="_blank">Kendaraan</a> ini</h3>
                    <img class="border-2 border-black" src="images/ModalTambah.png" alt="">
                    <p>Ketika dirasa Data yang dimasukkan sudah sesuai dan lengkap, maka anda tinggal mengklik <span class="p-1 px-2 rounded-lg bg-blue-700 text-white font-medium hover:bg-blue-500">+ Add new Product</span></p>

                    {{-- Panduan Dalam Mengedit Data Kendaraan --}}
                    <h2>Panduan Dalam Mengedit Data Kendaraan</h2>
                    <img class="border-2 border-black mx-auto" src="images/ModalEdit.png" alt="">
                    <p class="text-justify">Jika dirasa ada Kesalahan dalam melakukan penginputan Data pada Kendaraan yang dimiliki, maka bisa melakukan Edit Data di halaman <a href="{{url('dashboard')}}" target="_blank">Kendaraan</a> dengan menekan Tombol <span class="px-3 rounded-lg bg-blue-700 text-white font-medium hover:bg-blue-500">Edit</span> pada Kendaraan yang dirasa salah Datanya, jika sudah tinggal klik <span class="p-1 px-3 rounded-lg bg-blue-700 text-white font-medium hover:bg-blue-500">Update product</span> dan jika dirasa Data tersebut salah sepenuhnya, bisa mengklik tombol <span class=" px-3 rounded-lg bg-white border-2 border-red-700 text-red-700 font-medium hover:bg-red-500 hover:text-white">Delete</span> </p>

                    {{-- Panduan Dalam Mengajukan Data Kendaraan --}}
                    <h2>Panduan Dalam Mengajukan Kendaraan</h2>
                    <img class="border-2 border-black mx-auto" src="images/Kendaraan.png" alt="">
                    <p class="text-justify">Untuk melakukan Pengajuan Kendaraan Agar dapat dibuatkan Surat Jalannya, maka Anda perlu mengajukan Kendaraan yang sudah di Tambahkan pada halaman <a href="{{url('dashboard')}}" target="_blank">Kendaraan</a> dengan menekan tombol <span class="p-1 px-3 rounded-lg bg-blue-700 text-white font-medium hover:bg-blue-500">Ajukan</span></p>
                    <img class="border-2 border-black mx-auto" src="images/ModalAjukan.png" alt="">
                    <p class="text-justify">Kemudian akan muncul Modal Form Pengajuan di layar, Pilih Tujuan serta Tanggal Keberangkatan, kemudian Klik <span class="p-1 px-3 rounded-lg bg-blue-700 text-white font-medium hover:bg-blue-500">Ajukan</span> jika sudah.. setelah itu untuk melihat Status Pengajuanmu, Anda bisa ke halaman <a href="{{route('pengajuan')}}" target="_blank">Lihat Status Pengajuan</a></p>

                    {{-- Panduan Dalam Membatalkan Pengajuan --}}
                    <h2>Panduan Dalam Membatalkan Pengajuan</h2>
                    <img class="border-2 border-black mx-auto" src="images/statusPengajuan.png" alt="">
                    <p class="text-justify">Untuk membatalkan pengajuan tidak susah, cukup masuk ke halaman <a href="{{route('pengajuan')}}" target="_blank">Lihat Status Pengajuan</a> kemudian Klik <span class="p-1 px-3 rounded-lg bg-red-700 text-white font-medium hover:bg-red-500">Batal</span> dan selesai..</p>
                    
                </article>
            </div>
        </main>
    @endsection

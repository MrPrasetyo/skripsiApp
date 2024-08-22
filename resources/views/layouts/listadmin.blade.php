@extends('partials.main')

@section('title', 'List Admin')



@section('content')
    @include('partials.navbar')


    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-5">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2 hidden">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-center">Id Pengajuan</th>
                                <th scope="col" class="px-4 py-3 text-center">Nomor Plat</th>
                                <th scope="col" class="px-4 py-3 text-center">Nama Pemilik</th>
                                <th scope="col" class="px-4 py-3 text-center">Merk</th>
                                <th scope="col" class="px-4 py-3 text-center">Berangkat Tanggal</th>
                                <th scope="col" class="px-4 py-3 text-center">Tujuan</th>
                                <th scope="col" class="px-4 py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr class="border-b dark:border-gray-700 text-center">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->idpengajuan }}</th>
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nomor_plat }}</th>
                                    <td class="px-4 py-3">{{ $item->nama_pemilik }}</td>
                                    <td class="px-4 py-3">{{ $item->merk }}</td>
                                    <td class="px-4 py-3">{{ $item->berangkat_tanggal }}</td>
                                    <td class="px-4 py-3">{{ $item->tujuan }}</td>
                                    <td class="px-3 py-3 flex justify-center items-center">
                                        <button
                                            class="BtnModalAdmin px-4 py-2 bg-primary-700 text-bold text-white rounded-xl hover:bg-primary-800"
                                            data-modal-target="ModalAdmin" data-modal-toggle="ModalAdmin"
                                            data-id="{{ $item->idkendaraan }}">View</button>
                                        <input class="idListPengajuan hidden" type="text" value="{{ $item->idreject }}">
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No data Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                        @include('layouts.modaladmin')
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-sm py-3 px-4">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 text-gray-700 border border-gray-300 bg-white hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>


@endsection

@section('script')

    <script>
        $(document).ready(function() {
            $('#BtnModalAdmin').click();
        });


        $(document).ready(function() {
            $('.BtnModalAdmin').on('click', function() {
                let dataId = $(this).attr('data-id');
                $.ajax({
                    type: "GET",
                    url: "{{ route('detailAdmin') }}",
                    data: {
                        id: dataId
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#idDetail').val(response.idpengajuan);
                        $('#tujuan').val(response.tujuan);
                        $('#berangkat_tanggal').val(response.berangkat_tanggal);
                        $('#userId').val(response.user_id);
                        $('#kendaraanId').val(response.idKendaraan);
                        $('#fotoStnks').val(response.fotostnk);
                        $('#fotoBpkbs').val(response.fotobpkb);
                        $('#fotoKtps').val(response.fotoktp);
                        $('#nomor_plat').text(response.nomor_plat);
                        $('#nama_pemilik').text(response.nama_pemilik);
                        $('#alamat_pemilik').text(response.alamat_pemilik);
                        $('#merk').text(response.merk);
                        $('#type').text(response.type);
                        $('#jenis').text(response.jenis);
                        $('#model').text(response.model);
                        $('#warna').text(response.warna);
                        $('#tahun').text(response.tahun);
                        $('#isi_silinder').text(response.isi_silinder);
                        $('#nomor_mesin').text(response.nomor_mesin);
                        $('#nomor_rangka').text(response.nomor_rangka);
                        $('#updateId').text(response.id); // Set id untuk update
                        $('#deleteId').text(response.id); // Set id untuk delete
                        $('#fotostnk').attr('src', "uploads/" + response.fotostnk);
                        $('#fotobpkb').attr('src', "uploads/" + response.fotobpkb);
                        $('#fotoktp').attr('src', "uploads/" + response.fotoktp);
                    }
                });
            });
        });


        $('#btnReject').on('click', function() {
            let idReject = $('#idDetail').val();
            let userId = $('#userId').val(); // Pastikan Anda memiliki elemen input dengan id userId
            let kendaraanId = $('#kendaraanId').val(); // Pastikan Anda memiliki elemen input dengan id kendaraanId
            let tujuan = $('#tujuan').val(); // Pastikan Anda memiliki elemen input dengan id kendaraanId
            let berangkat_tanggal = $('#berangkat_tanggal').val(); // Pastikan Anda memiliki elemen input dengan id kendaraanId
            let fotostnk = $('#fotoStnks').val();
            let fotobpkb = $('#fotoBpkbs').val();
            let fotoktp = $('#fotoKtps').val();

            $.ajax({
                type: "GET",
                url: "{{ route('rejectAdmin') }}",
                data: {
                    id: idReject,
                    userId: userId,
                    kendaraanId: kendaraanId,
                    tujuan: tujuan,
                    berangkat_tanggal: berangkat_tanggal,
                    fotostnk: fotostnk,
                    fotobpkb: fotobpkb,
                    fotoktp: fotoktp
                },
                dataType: "JSON",
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Pengajuan berhasil ditolak!',
                    }).then(() => {
                        // Redirect to the listadmin route after success message
                        window.location.href = "{{ route('listAdmin') }}";
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Data pengajuan gagal ditolak',
                    }).then(() => {
                        // Redirect to the listadmin route even after error message
                        window.location.href = "{{ route('listAdmin') }}";
                    });
                }
            });
        });

        $('#btnAccept').on('click', function() {
            let idAccept = $('#idDetail').val();
            let userId = $('#userId').val(); // Pastikan Anda memiliki elemen input dengan id userId
            let kendaraanId = $('#kendaraanId').val(); // Pastikan Anda memiliki elemen input dengan id kendaraanId
            let tujuan = $('#tujuan').val(); // Pastikan Anda memiliki elemen input dengan id kendaraanId
            let berangkat_tanggal = $('#berangkat_tanggal').val(); // Pastikan Anda memiliki elemen input dengan id kendaraanId
            let fotostnk = $('#fotoStnks').val();
            let fotobpkb = $('#fotoBpkbs').val();
            let fotoktp = $('#fotoKtps').val();

            $.ajax({
                type: "GET",
                url: "{{ route('AcceptAdmin') }}",
                data: {
                    id: idAccept,
                    userId: userId,
                    kendaraanId: kendaraanId,
                    tujuan: tujuan,
                    berangkat_tanggal: berangkat_tanggal,
                    fotostnk: fotostnk,
                    fotobpkb: fotobpkb,
                    fotoktp: fotoktp
                },
                dataType: "JSON",
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Pengajuan berhasil diterima!',
                    }).then(() => {
                        // Redirect to the listadmin route after success message
                        window.location.href = "{{ route('listAdmin') }}";
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Data pengajuan gagal diterima',
                    }).then(() => {
                        // Redirect to the listadmin route even after error message
                        window.location.href = "{{ route('listAdmin') }}";
                    });
                }
            });
        });
    </script>
@endsection

@extends('partials.main')

@section('title', 'Dashboard')

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    </script>
@endif


@section('content')
    @include('partials.navbar')

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
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
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" id="BtnModalTambah" data-modal-target="ModalTambah"
                            data-modal-toggle="ModalTambah"
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Tambahkan Kendaraan
                        </button>
                    </div>
                </div>
                @include('layouts.modaltambah')
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Nomor Plat</th>
                                <th scope="col" class="px-4 py-3">Nama Pemilik</th>
                                <th scope="col" class="px-4 py-3">Merk</th>
                                <th scope="col" class="px-4 py-3">Type</th>
                                <th scope="col" class="px-4 py-3">Tahun</th>
                                <th scope="col" class="px-6 py-3 ">Actions</th>
                                <th scope="col" class="px-4 py-3 ">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nomor_plat }}</th>
                                    <td class="px-4 py-3">{{ $item->nama_pemilik }}</td>
                                    <td class="px-4 py-3">{{ $item->merk }}</td>
                                    <td class="px-4 py-3">{{ $item->type }}</td>
                                    <td class="px-4 py-3">{{ $item->tahun }}</td>
                                    <td class="px-3 py-3 flex-row justify-center items-center">
                                            <input type="text" class="hidden" name="kendaraan_id" id="kendaraan_id"
                                                value="{{ $item->id }}">
                                                <input class="hidden" type="text" id="fotostnk" name="fotostnk" value="{{$item->fotostnk}}">
                                                <input class="hidden" type="text" id="fotobpkb" name="fotobpkb" value="{{$item->fotobpkb}}">
                                                <input class="hidden" type="text" id="fotoktp" name="fotoktp" value="{{$item->fotoktp}}">
                                            <button type="submit"
                                                class="btnModalTujuan px-4 py-2 bg-primary-700 text-bold text-white rounded-xl hover:bg-primary-800"
                                                data-modal-target="ModalTujuan" data-modal-toggle="ModalTujuan"
                                                data-id="{{ $item->id }}">Ajukan</button>
                                    </td>
                                    <td class="px-3 py-3 flex-row justify-center items-center">
                                        <button
                                            class="BtnModalEdit px-4 py-2 bg-primary-700 text-bold text-white rounded-xl hover:bg-primary-800"
                                            data-modal-target="ModalEdit" data-modal-toggle="ModalEdit"
                                            data-id="{{ $item->id }}">Edit</button>
                                    </td>

                                </tr>

                                @include('layouts.modaledit')
                                @include('layouts.modaltujuan')
                            @empty
                                <tr>
                                    <td>No data Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-sm py-3 px-4 hidden">
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
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
    @section('script')
        <script>
                        $(document).ready(function() {
                            $('.BtnModalEdit').on('click', function() {
                                let dataId = $(this).attr('data-id');
                                $.ajax({
                                    type: "GET",
                                    url: "{{ route('getDataEdit') }}",
                                    data: {
                                        id: dataId
                                    },
                                    dataType: "JSON",
                                    success: function(response) {
                                        $('#idkendaraan').val(response.id);
                                        $('#nomor_plat').val(response.nomor_plat);
                                        $('#nama_pemilik').val(response.nama_pemilik);
                                        $('#alamat_pemilik').val(response.alamat_pemilik);
                                        $('#merk').val(response.merk);
                                        $('#type').val(response.type);
                                        $('#jenis').val(response.jenis);
                                        $('#model').val(response.model);
                                        $('#warna').val(response.warna);
                                        $('#tahun').val(response.tahun);
                                        $('#isi_silinder').val(response.isi_silinder);
                                        $('#nomor_mesin').val(response.nomor_mesin);
                                        $('#nomor_rangka').val(response.nomor_rangka);
                                        $('#updateId').val(response.id); // Set id untuk update
                                        $('#deleteId').val(response.id); // Set id untuk delete
                                    }
                                });
                            });

                            // Submit form update
                            $('#updateForm').on('submit', function() {
                                $(this).submit();
                            });

                            // Submit form delete
                            $('#btnDelete').on('click', function() {
                                $('#deleteForm').submit();
                            });
                        });

                        document.getElementById('btnSendData').addEventListener('click', function() {
                            let kendaraanId = this.getAttribute('data-id');
                            document.getElementById('kendaraan_id').value = kendaraanId;
                            document.getElementById('submitForm').submit();

                        });

                        $(document).ready(function() {
                            $('.btnModalTujuan').on('click', function() {
                                let dataId = $(this).attr('data-id');
                                $.ajax({
                                    type: "GET",
                                    url: "{{route('getDataOnly')}}",
                                    data: {
                                        id: dataId
                                    },
                                    dataType: "JSON",
                                    success: function (response) {
                                        $('#idaja').val(response.id);
                                        $('#fotostnk').val(response.fotostnk);
                                        $('#fotobpkb').val(response.fotobpkb);
                                        $('#fotoktp').val(response.fotoktp);
                                    }
                                });
                            })});
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    @endsection
@endsection

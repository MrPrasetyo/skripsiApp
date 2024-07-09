@extends('partials.main')

@section('title', 'Dashboard')


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
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="text-center">
                                <th scope="col" class="px-4 py-3">Nomor Plat</th>
                                <th scope="col" class="px-4 py-3">Nama Pemilik</th>
                                <th scope="col" class="px-4 py-3">Merk</th>
                                <th scope="col" class="px-4 py-3">Tujuan</th>
                                <th scope="col" class="px-4 py-3">Tanggal Pengajuan</th>
                                <th scope="col" class="px-6 py-3 ">Status</th>
                                <th scope="col" class="px-4 py-3 ">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr class="border-b dark:border-gray-700 text-center">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nomor_plat }}</th>
                                    <td class="px-4 py-3">{{ $item->nama_pemilik }}</td>
                                    <td class="px-4 py-3">{{ $item->merk }}</td>
                                    <td class="px-4 py-3">{{ $item->tujuan }}</td>
                                    <td class="px-4 py-3">{{ \Carbon\Carbon::parse($item->tglPengajuan)->format('d-m-Y') }}
                                    </td>
                                    <td class="px-4 py-3 text-black font-bold @if ($item->status == 'reject') bg-red-500 @elseif($item->status == 'accept') bg-green-500 @endif">{{ $item->status }}</td>
                                    <td class="px-3 py-3 flex-row justify-center items-center">
                                        <input class="hidden" id="ArsipId" type="text" value="{{ $item->idArsip }}">
                                        <button data-id="{{ $item->idArsip }}"
                                            class="downloadPdf hover:scale-125 bg-gray-200 p-1 rounded-lg hover:bg-black">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white hover:text-white"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z"
                                                    clip-rule="evenodd" />
                                                <path fill-rule="evenodd"
                                                    d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </td>

                                </tr>

                            @empty
                                <tr>
                                    <td>No data Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    @section('script')
        <script>
            $(document).ready(function() {
                $(document).on('click', '.downloadPdf', function() {
                    let dataId = $(this).attr('data-id');
                    let previewUrl = "{{ route('generatePdf') }}?id=" + dataId;

                    window.open(previewUrl, '_blank'); // Open the PDF in a new tab for preview
                });
            });
        </script>
    @endsection

@endsection

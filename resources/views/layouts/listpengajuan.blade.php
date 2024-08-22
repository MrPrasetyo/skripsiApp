@extends('partials.main')

@section('title', 'Dashboard')

@section('content')
    @include('partials.navbar');
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
                    <table id="tablestatus" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="text-center">
                                <th scope="col" class="px-4 py-3">Nomor Plat</th>
                                <th scope="col" class="px-4 py-3">Nama Pemilik</th>
                                <th scope="col" class="px-4 py-3">Merk</th>
                                <th scope="col" class="px-4 py-3">Berangkat Tanggal</th>
                                <th scope="col" class="px-4 py-3">Tujuan</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr
                                    class="border-b dark:border-gray-700 text-center items-center justify-center">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nomor_plat }}</th>
                                    <td class="px-4 py-3">{{ $item->name }}</td>
                                    <td class="px-4 py-3">{{ $item->merk }}</td>
                                    <td class="px-4 py-3">{{ $item->berangkat_tanggal }}</td>
                                    <td class="px-4 py-3">{{ $item->tujuan }}</td>
                                    <td class="px-4 py-3 text-black font-medium @if ($item->status == 'reject') bg-red-500 @elseif($item->status == 'accept') bg-green-500 @endif">{{ $item->status }}</td>
                                    <td class="px-4 py-3 flex items-center justify-center w-full">
                                        @if ($item->status == 'pending')
                                            <form action="{{ route('batalkanPengajuan') }}" id="deletePengajuan"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="pengajuanId" value="{{ $item->id }}"
                                                    id="pengajuanId">
                                                <button type="submit"
                                                    class="btnBatalPengajuan px-4 py-2 bg-red-700 text-bold text-white rounded-xl hover:bg-red-800"
                                                    data-id="{{ $item->id }}">Batal</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No data available</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    @section('script')
        <script>
            $(document).ready(function() {
                $('#tablestatus').DataTable();
            });
            $('#btnBatalPengajuan').on('click', function() {
                $('#deletePengajuan').submit();
            });
        </script>
    @endsection

@endsection

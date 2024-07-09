<!-- Modal toggle -->
<!-- Main modal -->
<div id="ModalAdmin" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                    <h3 class="font-semibold ">
                        Detail Kendaraan
                    </h3>
                </div>
                <div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="ModalAdmin">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            </div>
            <input class="hidden" type="text" id="idDetail" value="">
            <input class="hidden" type="text" id="userId" value="">
            <input class="hidden" type="text" id="kendaraanId" value="">
            <input class="hidden" type="text" id="tujuan" value="">
            <input class="hidden" type="text" id="berangkat_tanggal" value="">
            <dl class="grid grid-cols-2">
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nomor Plat</dt>
                    <dd id="nomor_plat" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nama Pemilik</dt>
                    <dd id="nama_pemilik" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <hr class="col-span-2 h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="col-span-2">
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Alamat</dt>
                    <dd id="alamat_pemilik" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <hr class="col-span-2 h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Merk</dt>
                    <dd id="merk" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Type</dt>
                    <dd id="type" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Jenis</dt>
                    <dd id="jenis" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Model</dt>
                    <dd id="model" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Warna</dt>
                    <dd id="warna" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Tahun</dt>
                    <dd id="tahun" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <hr class="col-span-2 h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Isi Silinder</dt>
                    <dd id="isi_silinder" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nomor Mesin</dt>
                    <dd id="nomor_mesin" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
                <div class="col-span-2">
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nomor Rangka</dt>
                    <dd id="nomor_rangka" class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">-</dd>
                </div>
            </dl>
            <div class="flex items-center justify-end gap-3">
                <button type="button" id="btnAccept"
                    class="text-white inline-flex items-center bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Approve
                </button>
                <button type="button" id="btnReject"
                    class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <span class="items-center">
                    <svg class="mr-1 -ml-1 w-5 h-5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                    </svg></span>
                    Reject
                </button>
            </div>
        </div>
    </div>
</div>

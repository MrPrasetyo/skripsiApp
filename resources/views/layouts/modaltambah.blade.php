<!-- Main modal -->
@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
    });
</script>
@endif

<div id="ModalTambah" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full overflow-x-hidden bg-gray-800 bg-opacity-50">
    <div class="relative w-full max-w-2xl h-full md:h-auto bg-white rounded-lg shadow dark:bg-gray-800">
        <!-- Modal content -->
        <div class="p-4 overflow-y-auto h-full max-h-[90vh]">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalTambah">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route('addData')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <x-label-c for="nomor_plat" label="Nomor Plat"/>
                        <x-input-c name="nomor_plat" type="text" placeholder="Masukkan Nomor Plat" />
                    </div>
                    <div>
                        <x-label-c for="nama_pemilik" label="Nama Pemilik"/>
                        <x-input-c name='nama_pemilik' type="text" placeholder="Masukkan Nama Sesuai STNK"/>
                    </div>
                    <div class="col-span-2">
                        <x-label-c for="alamat_pemilik" label="Alamat Pemilik"/>
                        <textarea name="alamat_pemilik" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Alamat Sesuai STNK"></textarea>                    
                    </div>
                    <div>
                        <x-label-c for="merk" label="Merk"/>
                        <x-input-c name='merk' type="text" placeholder="Masukkan Merk Sesuai STNK"/>
                    </div>
                    <div>
                        <x-label-c for="type" label="Type"/>
                        <x-input-c name='type' type="text" placeholder="Masukkan Type Sesuai STNK"/>
                    </div>
                    <div>
                        <x-label-c for="jenis" label="Jenis"/>
                        <x-input-c name='jenis' type="text" placeholder="Masukkan Jenis Sesuai STNK"/>
                    </div>
                    <div>
                        <x-label-c for="model" label="Model"/>
                        <x-input-c name='model' type="text" placeholder="Masukkan Model Sesuai STNK"/>
                    </div>
                    <div>
                        <x-label-c for="warna" label="Warna"/>
                        <x-input-c name='warna' type="text" placeholder="Masukkan Warna Sesuai STNK"/>
                    </div>
                    <div>
                        <x-label-c for="tahun" label="Tahun"/>
                        <x-input-c name='tahun' type="text" placeholder="Masukkan Tahun Sesuai STNK"/>
                    </div>
                    <div>
                        <x-label-c for="isi_silinder" label="Isi Silinder"/>
                        <x-input-c name='isi_silinder' type="text" placeholder="Masukkan Type Sesuai STNK"/>
                    </div>
                    <div>
                        <x-label-c for="nomor_mesin" label="Nomor Mesin"/>
                        <x-input-c name='nomor_mesin' type="text" placeholder="Masukkan Type Sesuai STNK"/>
                    </div>
                    <div class="col-span-2">
                        <x-label-c for="nomor_rangka" label="Nomor Rangka"/>
                        <x-input-c name='nomor_rangka' type="text" placeholder="Masukkan Type Sesuai STNK"/>
                    </div>
                    <div class="col-span-2 flex flex-col gap-y-5">
                        <label for="fotoSTNK">Masukkan Foto STNK</label>
                        <input type="file" id="fotoSTNK" name="fotoSTNK" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="col-span-2 flex flex-col gap-y-5">
                        <label for="fotoBPKB">Masukkan Foto BPKB</label>
                        <input type="file" id="fotoBPKB" name="fotoBPKB" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="col-span-2 flex flex-col gap-y-5">
                        <label for="fotoKTP">Masukkan Foto KTP</label>
                        <input type="file" id="fotoKTP" name="fotoKTP" accept=".png, .jpg, .jpeg">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new product
                </button>
            </form>
        </div>
    </div>
</div>
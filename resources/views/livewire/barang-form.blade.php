<div>
    <form>
        <div class = "bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
                <div class="mb-4">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" autocomplete="nama_barang" wire:model="nama_barang" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="ukuran" class="block text-sm font-medium text-gray-700">Ukuran</label>
                            <input type="text" name="ukuran" id="ukuran" autocomplete="ukuran" wire:model="ukuran" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                            <input type="text" name="jumlah" id="jumlah" autocomplete="jumlah" wire:model="jumlah" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="foto_barang" class="block text-sm font-medium text-gray-700">Foto Barang</label>
                            <input type="file" name="foto_barang" id="foto_barang" autocomplete="foto_barang" wire:model="foto_barang" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button wire:click="closeModal()" type="button"
                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Save
                </button>
            </span>
            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                <button wire:click="closeModal()" type="button"
                    class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Close
                </button>
            </span>
        </div>

    
    </form>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

</div>

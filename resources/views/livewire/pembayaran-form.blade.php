<div>
    <form>
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
                @if (!$updatingStatusOnly)
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Nama
                            Nasabah</label>
                        <input type="hidden" name="user_id" wire:model="user_id">

                        <input type="text" name="user_nama" id="user_nama"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            readonly value="{{ auth()->user()->name }}">
                        @error('user_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">ID
                            Transaksi</label>
                        <input type="text" name="transaksi_id" wire:model="transaksi_id"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            readonly>
                        @error('user_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Rekening
                            Pembayaran</label>
                        @if ($rekening)
                            <select wire:model="rekening_id" wire:change="getRekeningDetails($event.target.value)"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Pilih Rekening">
                                <option value="" selected readonly>-- Pilih Rekening --
                                </option>
                                @foreach ($rekening as $rek)
                                    <option value="{{ $rek->id }}">{{ $rek->nama_bank }}</option>
                                @endforeach
                            </select>
                        @endif
                        @error('rekening_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="nama_pemilik" class="block text-gray-700 text-sm font-bold mb-2">Nama Pemilik
                            Rekening</label>
                        <input type="text" name="nama_pemilik" wire:model="nama_pemilik"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            readonly>
                    </div>

                    <div class="mb-4">
                        <label for="akun_nasabah" class="block text-gray-700 text-sm font-bold mb-2">No.
                            Rekening</label>
                        <input type="text" name="akun_nasabah" wire:model="akun_nasabah"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            readonly>
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput3"
                            class="block text-gray-700 text-sm font-bold mb-2">Foto</label>

                        <input type="file" id="foto" wire:model.live="foto" x-ref="foto" class="w-full"
                            x-on:change="
                            photoName = $refs.foto.files[0].name;
                            const reader = new FileReader();
                            reader.onload = (e) => {
                                photoPreview = e.target.result;
                            };
                            reader.readAsDataURL($refs.foto.files[0]);
                            console.log($refs.foto.files[0]);
                        " />
                        @error('foto')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
                @if ($updatingStatusOnly)
                    <div class="mb-4">
                        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                        <select wire:model.defer="status"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="status">
                            <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
                            <option value="Dikonfirmasi">Dikonfirmasi</option>
                            <option value="Ditolak">Ditolak</option>
                        </select>
                        @error('status')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button wire:click.prevent="store()" type="button"
                    class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Submit
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
</div>

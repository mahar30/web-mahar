<x-guest-layout>
    <div class="flex flex-col min-h-screen">
        @livewire('navbar')
        <div class="flex-grow">

            <div class="text-xl">
                <h1 class="text-center text-4xl font-bold mt-10">Detail Produk</h1>
            </div>

            <div class="flex justify-center my-5 flex-wrap">
                {{-- {{ dump($barang) }} --}}
                <div class="hero h-[50vh] bg-white">
                    <div class="hero-content flex-col lg:flex-row">
                        <img src="{{ asset('storage/' . $barang->gambar) }}" class="max-w-sm rounded-lg shadow-2xl" />
                        <div>
                            <h1 class="text-5xl font-bold">{{ $barang->nama_barang }}</h1>
                            <p class="py-6">{{ $barang->keterangan }}</p>
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-xl">
                <h1 class="text-center text-4xl font-bold mt-10">Ukuran Produk</h1>
            </div>
            <div class="flex justify-center my-5 flex-wrap">

                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Ukuran</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>Cy Ganderton</td>
                                <td>Quality Control Specialist</td>
                                <td>Blue</td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <th>2</th>
                                <td>Hart Hagerty</td>
                                <td>Desktop Support Technician</td>
                                <td>Purple</td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <th>3</th>
                                <td>Brice Swyre</td>
                                <td>Tax Accountant</td>
                                <td>Red</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @livewire('footer')
    </div>
</x-guest-layout>

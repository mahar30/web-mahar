<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">ID Transaksi</td>
                <td class="border px-4 py-2">{{ $row->user->id }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Pembeli</td>
                <td class="border px-4 py-2">{{ $row->name }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Tipe Pembayaran Barang</td>
                <td class="border px-4 py-2">{{ $row->tipe_pembayaran }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Total Harga</td>
                <td class="border px-4 py-2">{{ $row->total_harga }}</td>
            </tr>
            <td class="border px-4 py-2 text-sm font-semibold">Status</td>
            <td class="border px-4 py-2">{{ $row->status }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Detail Transaksi</td>
                <td class="border px-4 py-2">
                    @foreach ($row->detailtransaksi as $detail)
                        <table class="table-auto w-full mb-2">
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2 text-sm font-semibold"> Barang </td>
                                    <td class="border px-4 py-2">{{ $row->detailtransaksi->count() }}</td>
                                </tr>
                                {{-- <tr>
                                    <td class="border px-4 py-2 text-sm font-semibold"> Transaksai </td>
                                    <td class="border px-4 py-2">{{ $row->detailtransaksi ? 'Loaded' : 'Not loaded' }}</td>
                                </tr> --}}
                                <tr>
                                    <td class="border px-4 py-2 text-sm font-semibold">Nama Barang</td>
                                    <td class="border px-4 py-2">{{ $detail->nama_barang }}</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-sm font-semibold">Ukuran</td>
                                    <td class="border px-4 py-2">{{ $detail->ukuran }}</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-sm font-semibold">Jumlah</td>
                                    <td class="border px-4 py-2">{{ $detail->jumlah }}</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-sm font-semibold">Foto Barang</td>
                                    <td class="border px-4 py-2">
                                        <img src="{{ $detail->foto_barang }}" alt="Foto"
                                            class="w-24 h-24 object-cover">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>

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
                <td class="border px-4 py-2 text-sm font-semibold">Total Harga</td>
                <td class="border px-4 py-2">{{ $row->total_harga }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Status Transaksi</td>
                <td class="border px-4 py-2">{{ $row->status }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Status Pembayaran</td>
                <td class="border px-4 py-2">{{ optional($row->pembayaran)->status }}</td>
            </tr>
        </tbody>
    </table>
    <table class="table-auto w-full my-3">
        <thead>
            <tr>
                <th class="border b-2 px-4 py-2 text-sm font-bold text-center" colspan="5">Detail Transaksi</th>
            </tr>
            <tr>
                <th class="border b-2 px-4 py-2 text-sm font-semibold">Nama Barang</th>
                <th class="border b-2 px-4 py-2 text-sm font-semibold">Ukuran</th>
                <th class="border b-2 px-4 py-2 text-sm font-semibold">Keterangan</th>
                <th class="border b-2 px-4 py-2 text-sm font-semibold">Jumlah</th>
                <th class="border b-2 px-4 py-2 text-sm font-semibold">Harga Satuan</th>
            </tr>
        <tbody>
            @foreach ($row->detailtransaksi as $detail)
                <tr>
                    <td class="border px-4 py-2">{{ $detail->nama_barang }}</td>
                    <td class="border px-4 py-2">{{ $detail->ukuran }}</td>
                    <td class="border px-4 py-2">{{ $detail->keterangan }}</td>
                    <td class="border px-4 py-2">{{ $detail->jumlah }}</td>
                    <td class="border px-4 py-2">
                        {{ 'Rp ' . number_format($detail->harga, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

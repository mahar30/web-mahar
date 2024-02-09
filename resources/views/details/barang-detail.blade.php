<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Barang</td>
                <td class="border px-4 py-2">{{ $row->nama_barang }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Keterangan</td>
                <td class="border px-4 py-2">{{ $row->keterangan }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">status</td>
                <td class="border px-4 py-2">{{ $row->status }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Total Terjual</td>
                <td class="border px-4 py-2">{{ $row->total_terjual }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Gambar</td>
                <td class="border px-4 py-2"><img src="{{ $row->gambar }}" alt="Gambar" style="width: 100px; height: 100px;"></td>
            </tr>
        </tbody>
    </table>
</div>

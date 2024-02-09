<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Barang</td>
                <td class="border px-4 py-2">{{ $row->barang }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Pembeli</td>
                <td class="border px-4 py-2">{{ $row->name }}</td>
            </tr>
            <tr>    
                <td class="border px-4 py-2 text-sm font-semibold"> Ukuran Barang</td>
                <td class="border px-4 py-2">{{ $row->ukuran }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Jumlah Barang</td>
                <td class="border px-4 py-2">{{ $row->jumlah }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">status</td>
                <td class="border px-4 py-2">{{ $row->status }}</td>
            <tr>
                <td class = "border px-4 py-2 text-sm font-semibold"> Keterangan </td>
                <td class = "border px-4 py-2">{{ $row->keterangan }}</td>
            </tr>
        </tbody>
    </table>
</div>

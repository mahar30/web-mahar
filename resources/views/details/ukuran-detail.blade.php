<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold"> Id</td>
                <td class="border px-4 py-2">{{ $row->id}}</td>
            </tr>
            <tr>    
                <td class="border px-4 py-2 text-sm font-semibold">Nama Barang</td>
                <td class="border px-4 py-2">{{ $row->nama_barang }}</td>
            <tr>

                <td class="border px-4 py-2 text-sm font-semibold"> Ukuran Barang</td>
                <td class="border px-4 py-2">{{ $row->ukuran }}</td>
            </tr>
            <tr>    
                <td class="border px-4 py-2 text-sm font-semibold">Harga </td>
                <td class="border px-4 py-2">{{ $row->harga }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Stock Barang</td>
                <td class="border px-4 py-2">{{ $row->stock }}</td>
            </tr>
        </tbody>
    </table>
</div>
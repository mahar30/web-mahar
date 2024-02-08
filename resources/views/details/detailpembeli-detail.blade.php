<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Pembeli</td>
                <td class="border px-4 py-2">{{ $row->name }}</td>
            </tr>
            <tr>    
                <td class="border px-4 py-2 text-sm font-semibold">Alamat Pembeli</td>
                <td class="border px-4 py-2">{{ $row->alamat }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">No Wa Pembeli</td>
                <td class="border px-4 py-2">{{ $row->no_wa }}</td>
            </tr>
            <tr>
                <td class = "border px-4 py-2 text-sm font-semibold"> Transaksi Terakhir Dilakukan</td>
                <td class = "border px-4 py-2">{{ $row->tanggaltransaksi_teraakhir }}</td>
            </tr>
        </tbody>
    </table>
</div>

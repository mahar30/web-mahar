<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">ID Transaksi</td>
                <td class="border px-4 py-2">{{ $row->user->id }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Pembeli</td>
                <td class="border px-4 py-2">{{ $row->name_user }}</td>
            </tr>
            {{-- <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Barang</td>
                <td class="border px-4 py-2">{{ $row->nama_barang }}</td>
            </tr> --}}
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Tipe Pembayaran Barang</td>
                <td class="border px-4 py-2">{{ $row->tipe_pembayaran }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">No Wa Pembeli</td>
                <td class="border px-4 py-2">{{ $row->no_wa_pembeli }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Total Harga</td>
                <td class="border px-4 py-2">{{ $row->total_harga }}</td>
            </tr>
                <td class="border px-4 py-2 text-sm font-semibold">Status</td>
                <td class="border px-4 py-2">{{ $row->status }}</td>
        </tbody>
    </table>
</div>
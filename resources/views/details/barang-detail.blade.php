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

            {{-- <tr>
                <td class="w-1/4">Foto</td>
                <td class="w-3/4">
                    <img src="{{ asset('storage/' . $row->foto) }}" alt="{{ $row->nama_barang }}" class="w-1/2">
                </td>
            </tr> --}}

            
        </tbody>
    </table>
</div>

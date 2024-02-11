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
                <td class="border px-4 py-2 text-sm font-semibold">Stock</td>
                <td class="border px-4 py-2">{{ $row->stock }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">status</td>
                <td class="border px-4 py-2">{{ $row->status }}</td>
            </tr>
            @if ($row->gambar)
                <tr>
                    <td class="border px-4 py-2 text-sm font-semibold">Gambar Barang</td>
                    <td class="border px-4 py-2">
                        <img src="{{ asset('storage/' . $row->gambar) }}" alt="Gambar"
                            class="w-32 h-32 object-cover mb-5">
                        <x-button>
                            <a href="{{ asset('storage/' . $row->gambar) }}" download>
                                Download
                            </a>
                        </x-button>
                    </td>

                </tr>
            @endif
        </tbody>
    </table>
</div>

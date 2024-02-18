<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Id Pembayaran</td>
                <td class="border px-4 py-2">{{ $row->id }}</td>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Pembeli</td>
                <td class="border px-4 py-2">{{ $row->user->name }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Foto</td>
                <td class="border px-4 py-2">
                    <img src="{{ asset('storage/' . $row->foto) }}" alt="Gambar" class="w-32 h-32 object-cover mb-5">
                    <x-button>
                        <a href="{{ asset('storage/' . $row->foto) }}" download>
                            Download
                        </a>
                    </x-button>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Bank</td>
                <td class="border px-4 py-2">{{ $row->rekening->nama_bank }}</td>
            <tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Rekening</td>
                <td class="border px-4 py-2">{{ $row->rekening->nama_rekening }}</td>
            <tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">No Rekening</td>
                <td class="border px-4 py-2">{{ $row->rekening->no_rekening }}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Total Harga</td>
                <td class="border px-4 py-2">Rp {{ number_format($row->transaksi->total_harga, 0, ',', '.') }}</td>
            </tr>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Status</td>
                <td class="border px-4 py-2">{{ $row->status }}</td>
            </tr>
        </tbody>
    </table>
</div>

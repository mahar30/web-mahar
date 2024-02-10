<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Id Pembayaran</td>
                <td class="border px-4 py-2">{{ $row->id}}</td>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Pembeli</td>
                <td class="border px-4 py-2">{{ $row->name }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Foto</td>
                <td class="border px-4 py-2"><img src="{{ $row->foto }}" alt="Foto" style="width: 100px; height: 100px;"></td>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Rekening</td>
                <td class="border px-4 py-2">{{ $row->nama_rekening }}</td>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Total Harga</td>
                <td class="border px-4 py-2">{{ $row->total_harga }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Status</td>
                <td class="border px-4 py-2">{{ $row->status }}</td>
            </tr>
        </tbody>
    </table>
</div>
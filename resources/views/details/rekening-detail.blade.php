<div class="p-2 bg-white border border-slate-200">
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">ID Rekening</td>
                <td class="border px-4 py-2">{{ $row->id }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Bank</td>
                <td class="border px-4 py-2">{{ $row->nama_bank }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">Nama Rekening</td>
                <td class="border px-4 py-2">{{ $row->nama_rekening }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 text-sm font-semibold">No Rekening</td>
                <td class="border px-4 py-2">{{ $row->no_rekening }}</td>
            </tr>

        </tbody>
    </table>
</div>
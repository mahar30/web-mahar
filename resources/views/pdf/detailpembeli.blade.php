<div>
    <h2>  Detail Pembeli Table</h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid; padding: 8px;">ID</th>
                <th style="border: 1px solid; padding: 8px;">Nama Pembeli</th>
                <th style="border: 1px solid; padding: 8px;">Alamat</th>
                <th style="border: 1px solid; padding: 8px;">No Telp</th>
                <th style="border: 1px solid; padding: 8px;">Tanggal transaksi </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($datasource as $detailpembeli)
            <tr>
                <td style="border: 1px solid; padding: 8px;">{{ $detailpembeli->id }}</td>
                <td style="border: 1px solid; padding: 8px;">{{ $detailpembeli->name }}</td>
                <td style="border: 1px solid; padding: 8px;">{{ $detailpembeli->alamat }}</td>
                <td style="border: 1px solid; padding: 8px;">{{ $detailpembeli->no_wa }}</td>
                <td style="border: 1px solid; padding: 8px;">{{ $detailpembeli->tanggaltransaksi_teraakhir }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
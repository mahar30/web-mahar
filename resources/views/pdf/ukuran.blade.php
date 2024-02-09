<div>
    <h2> Ukuran Table</h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid; padding: 8px;">Id Barang</th>
                <th style="border: 1px solid; padding: 8px;">Nama Barang</th>
                <th style="border: 1px solid; padding: 8px;">Ukuran Barang</th>
                <th style="border: 1px solid; padding: 8px;">Harga Barang</th>
                <th style="border: 1px solid; padding: 8px;">Stok Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datasource as $ukuran)
                <tr>
                    <td style="border: 1px solid; padding: 8px;">{{ $ukuran->id }}</td>
                    <td style="border: 1px solid; padding: 8px;">{{ $ukuran->nama_barang }}</td>
                    <td style="border: 1px solid; padding: 8px;">{{ $ukuran->ukuran }}</td>
                    <td style="border: 1px solid; padding: 8px;">{{ $ukuran->harga }}</td>
                    <td style="border: 1px solid; padding: 8px;">{{ $ukuran->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
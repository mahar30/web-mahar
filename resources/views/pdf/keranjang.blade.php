<div>
    <h2> Keranjang Table</h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 8px; font-size: 14px; font-weight: 600;">Id</th>
                <th style="border: 1px solid black; padding: 8px; font-size: 14px; font-weight: 600;">Nama Barang</th>
                <th style="border: 1px solid black; padding: 8px; font-size: 14px; font-weight: 600;">Nama Pembeli</th>
                <th style="border: 1px solid black; padding: 8px; font-size: 14px; font-weight: 600;">Ukuran Barang</th>
                <th style="border: 1px solid black; padding: 8px; font-size: 14px; font-weight: 600;">Jumlah Barang</th>
                <th style="border: 1px solid black; padding: 8px; font-size: 14px; font-weight: 600;">Status</th>
                <th style="border: 1px solid black; padding: 8px; font-size: 14px; font-weight: 600;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datasource as $keranjang)
                <tr>
                    <td style="border: 1px solid black; padding: 8px; font-size: 14px;">{{ $keranjang->id }}</td>
                    <td style="border: 1px solid black; padding: 8px; font-size: 14px;">{{ $keranjang->barang }}</td>
                    <td style="border: 1px solid black; padding: 8px; font-size: 14px;">{{ $keranjang->name }}</td>
                    <td style="border: 1px solid black; padding: 8px; font-size: 14px;">{{ $keranjang->ukuran }}</td>
                    <td style="border: 1px solid black; padding: 8px; font-size: 14px;">{{ $keranjang->jumlah }}</td>
                    <td style="border: 1px solid black; padding: 8px; font-size: 14px;">{{ $keranjang->status }}</td>
                    <td style="border: 1px solid black; padding: 8px; font-size: 14px;">{{ $keranjang->keterangan }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
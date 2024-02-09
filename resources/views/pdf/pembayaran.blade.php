<div>
    <h2> Pembayaran Table</h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px;"> Id</th>
                <th style="border: 1px solid #000; padding: 8px;"> Nama Pembeli </th>
                <th style="border: 1px solid #000; padding: 8px;"> Id transaksi </th>
                <th style="border: 1px solid #000; padding: 8px;"> Nama Rekening </th>
                <th style="border: 1px solid #000; padding: 8px;"> Foto </th>
                <th style="border: 1px solid #000; padding: 8px;"> Status </th>
                <th style="border: 1px solid #000; padding: 8px;"> Total Pembayaran </th>
            </tr>
        </thead>
        <tbody>
            @foreach($datasource as $pembayaran)
            <tr>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $pembayaran->id }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $pembayaran->name }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $pembayaran->transaksi_id }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $pembayaran->nama_rekening }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> 
                    <img src="{{ public_path($pembayaran->foto) }}" alt="Foto" style="width: 50px; height: 50px;">    
                </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $pembayaran->status }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $pembayaran->total }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    <h2> Transaksi Table</h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px;"> Id </th>
                <th style="border: 1px solid #000; padding: 8px;"> Nama </th>
                {{-- <th style="border: 1px solid #000; padding: 8px;"> Kode Transaksi </th> --}}
                <th style="border: 1px solid #000; padding: 8px;"> Total Harga </th>
                <th style="border: 1px solid #000; padding: 8px;"> No-Wa Pembeli </th>
                <th style="border: 1px solid #000; padding: 8px;"> Tipe Pembayaran</th>
                <th style="border: 1px solid #000; padding: 8px;"> Total Pembelian </th>
                <th style="border: 1px solid #000; padding: 8px;"> Status </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($datasource as $transaksi)
            <tr>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->id }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->name }} </td>
                {{-- <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->kode_transaksi }} </td> --}}
                <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->total_harga }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->no_wa_pembeli }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->tipe_pembayaran }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->total_pembelian }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $transaksi->status }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
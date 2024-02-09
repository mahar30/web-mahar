<div>
    <h2> Rekening Table</h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px;"> Id</th>
                <th style="border: 1px solid #000; padding: 8px;"> Nama Bank </th>
                <th style="border: 1px solid #000; padding: 8px;"> No Rekening </th>
                <th style="border: 1px solid #000; padding: 8px;"> Nama Rekening </th>
            </tr>
        </thead>
        <tbody>
            @foreach($datasource as $rekening)
            <tr>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $rekening->id }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $rekening->nama_bank }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $rekening->no_rekening }} </td>
                <td style="border: 1px solid #000; padding: 8px;"> {{ $rekening->nama_rekening }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
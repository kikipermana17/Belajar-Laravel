<html>
<head>
    <title>Menampilkan Array</title>
</head>
<body>


    <center>
        <h2>Menampilkan Data</h2>
    </center>

<center>
    <table border=1>
        <tr>
            <th>Id Pesanan</th>
            <th>Nama Pelanggan</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Pesan</th>
        </tr>

        @foreach($pesanan as $data)

        <tr>
            <td>{{ $data['id_pesanan']}}</td>
            <td>{{ $data['nama_pelanggan']}}</td>
            <td>{{ $data['nama_barang']}}</td>
            <td>{{ $data['qty']}}</td>
            <td>{{ $data['tgl_pesan']}}</td>


        </tr>


        @endforeach

    </table>
</center>

</body>
</html>


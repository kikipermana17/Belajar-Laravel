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
        <th>Id Pembelian</th>
        <th>Nama Barang</th>
        <th>Nama Suplier</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
    </tr>

    @foreach($pembelian as $data)

    <tr>
        <td>{{ $data['id_pembelian']}}</td>
        <td>{{ $data['nama_barang']}}</td>
        <td>{{ $data['nama_suplier']}}</td>
        <td>{{ $data['qty']}}</td>
        <td>{{ $data['tgl']}}</td>


    </tr>


    @endforeach

</table>
</center>

</body>
</html>


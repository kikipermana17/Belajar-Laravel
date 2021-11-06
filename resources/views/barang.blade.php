<html>
<head>
    <title>Menampilkan Array</title>
</head>
<body>


    <center>
        <h2>Menampilkan Data</h2>
    </center>
<table border=1>
    <tr>
        <th>Id Barang</th>
        <th>Nama</th>
        <th>Varian</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
    </tr>

        @foreach($barang as $data2)

<tr>
    <td>{{ $data2['id_barang']}}</td>
    <td>{{ $data2['nama']}}</td>
    <td>{{ $data2['varian']}}</td>
    <td>{{ $data2['harga_beli']}}</td>
    <td>{{ $data2['harga_jual']}}</td>

</tr>


        @endforeach

</body>
</html>


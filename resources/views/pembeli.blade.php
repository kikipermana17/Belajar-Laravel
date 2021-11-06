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
            <th>Id Pembeli</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kode Pos</th>
            <th>Kota</th>
            <th>Tanggal Lahir</th>
        </tr>

        @foreach($pembeli as $data)

        <tr>
            <td>{{ $data['id_pembeli']}}</td>
            <td>{{ $data['nama']}}</td>
            <td>{{ $data['jeniskelamin']}}</td>
            <td>{{ $data['kota']}}</td>
            <td>{{ $data['tgl']}}</td>
            <td>{{ $data['tgl_lahir']}}</td>



        </tr>


        @endforeach

    </table>
</center>



</body>
</html>


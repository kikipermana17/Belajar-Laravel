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
            <th>Id Suplier</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
            <th>Kota</th>
        </tr>

        @foreach($suplier as $data)

        <tr>
            <td>{{ $data['id_suplier']}}</td>
            <td>{{ $data['nama']}}</td>
            <td>{{ $data['alamat']}}</td>
            <td>{{ $data['kode_pos']}}</td>
            <td>{{ $data['kota']}}</td>



        </tr>


        @endforeach

    </table>
</center>

</body>
</html>


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
            <th>Nis</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        @foreach($data as $data2)


        <tr>
            <td>{{ $data2['nis']}}</td>
            <td>{{ $data2['nama']}}</td>
            <td>{{ $data2['jenisKelamin']}}</td>
            <td>{{ $data2['Kelas']}}</td>
            <td>{{ $data2['alamat']}}</td>
        </tr>

        @endforeach
    </table>
    </center>
</body>
</html>


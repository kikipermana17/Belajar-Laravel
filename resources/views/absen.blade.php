<html>
<head>
    <title>Menampilkan Array</title>
</head>
<body>


    <center>
        <h2>Menampilkan Data</h2>
    </center>
    <ul>
        @foreach($data as $data2)
        Nis : {{ $data2['nis']}} <br>
        Nama : {{ $data2['nama']}} <br>
        Jenis Kelamin : {{ $data2['jenisKelamin']}} <br>
        Kelas : {{ $data2['Kelas']}} <br>
        Alamat : {{ $data2['alamat']}} <br>


        <hr>

        @endforeach
    </ul>
</body>
</html>


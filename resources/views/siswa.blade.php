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
        Id : {{ $data2['id']}} <br>
        Nama : {{ $data2['nama']}} <br>
        Username : {{ $data2['username']}} <br>
        Email : {{ $data2['email']}} <br>
        Alamat : {{ $data2['alamat']}} <br>
        Mapel :
        @foreach($data2['mapel'] as $pel)
            <ul>
            <li> {{$pel}} </li>
            </ul>
        @endforeach
<hr>





        @endforeach
    </ul>
</body>
</html>


<html>
<head>
<title>Menampilkan Array</title>
</head>
<body>


<center><h2>Menampilkan Data</h2></center>
<ul>
    @foreach($data as $data2)
    Id      : {{ $data2['id']}} <br>
    Title   : {{ $data2['title']}} <br>
    Content : {{ $data2['content']}} <br>
<hr>

@endforeach
</ul>
</body>
</html>

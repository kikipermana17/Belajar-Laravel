<html>

<head>
    <title>Halaman Biodata</title>
</head>
<body>
<center><h2>Tampilkan Data Post</h2></center>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
        </tr>


@foreach($query as $data)

<tr>
    <td>{{$data->id}}</td>
    <td>{{$data->title}}</td>
    <td>{{$data->content}}</td>

</tr>




@endforeach


</body>
</html>

@extends("master")
@section("pagina","...")

@section("content")
<body class="classes">
    <ul>
        @foreach ($classes as $id)
        <li><strong><a style="color: white;" href = "showClass/{{$id->index}}" >{{$id->name}}</a></strong></li>
        @endforeach
    </ul>
</body>
@stop

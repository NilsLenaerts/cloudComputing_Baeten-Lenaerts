@extends("master")
@section("pagina","...")

@section("content")
</body>
    <ul>
        @foreach ($classes as $id)
        <li><strong><a href = "showClass/{{$id->index}}" >{{$id->name}}</a></strong></li>
        @endforeach
    </ul>
<body>
@stop

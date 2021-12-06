@extends("master")
@section("pagina","Races")
@section("content")
<body class="spellList">
    <ul>
        @foreach ($monsters as $id)
        <li><strong><a href = "showMonster/{{$id->index}}" >{{$id->name}}</a></strong></li>
        @endforeach
    </ul>
</body>
@stop

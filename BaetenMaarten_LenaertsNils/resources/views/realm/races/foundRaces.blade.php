@extends("master")
@section("pagina","Races")
@section("content")

<body class="spellList-background-image background">
    <ul>
        @foreach ($races as $id)
        <li><strong><a href = "showRace/{{$id->index}}" >{{$id->name}}</a></strong></li>
        @endforeach
    </ul>
</body>
@stop

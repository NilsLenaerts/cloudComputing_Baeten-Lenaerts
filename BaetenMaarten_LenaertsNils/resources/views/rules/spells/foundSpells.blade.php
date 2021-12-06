@extends("master")
@section("pagina","Spells")
@section("content")

<body class="spellList">
    <ul>
        @foreach ($spells as $id)
        <li><strong><a href = "showSpell/{{$id->index}}" >{{$id->name}}</a></strong></li>
        @endforeach
    </ul>
</body>
@stop

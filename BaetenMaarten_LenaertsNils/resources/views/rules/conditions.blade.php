@extends("master")
@section("pagina","Conditions")
@section("content")

<body class="spellList-background-image background">
    <ul>
        @foreach ($conditions as $id)
        <li><strong><a href = "showCondition/{{$id->index}}" >{{$id->name}}</a></strong></li>
        @endforeach
    </ul>
</body>
@stop

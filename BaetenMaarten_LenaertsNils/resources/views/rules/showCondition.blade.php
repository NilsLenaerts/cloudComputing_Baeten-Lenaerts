@extends("master")
@section("pagina","...")

@section("content")
<body class="spellList-background-image background">
    <h3>{{$condition->name}}</h3>
    @foreach($condition->desc as $description)
    {{$description}}
    @endforeach  
</body>

@stop

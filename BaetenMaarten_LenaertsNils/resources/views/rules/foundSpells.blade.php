@extends("master")
@section("pagina","...")

@section("content")

<ul>
    @foreach ($spells as $id)
    
    <li><strong><a href = "showSpell/{{$id->index}}" >{{$id->name}}</a></strong></li>
    @endforeach
</ul>


@stop

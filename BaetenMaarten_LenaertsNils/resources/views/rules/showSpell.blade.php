@extends("master")
@section("pagina","...")

@section("content")

<ul>
    @foreach ($spells as $id)
    
    <li><strong><a href = "https://www.dnd5eapi.co{{$id->url}}" >{{$id->name}}</a></strong></li>
    @endforeach
</ul>

@stop

@extends("master")
@section("pagina","...")

@section("content")
<ul>
    @foreach ($homebrewSpells as $id)
    
    <li><strong><a href = "showHomebrewSpell/{{$id->name}}" >{{$id->name}}</a></strong></li>
    @endforeach
</ul>

@stop

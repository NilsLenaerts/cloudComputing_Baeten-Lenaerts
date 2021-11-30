@extends("master")
@section("pagina","...")

@section("content")
<p>Want to add homebreww spells press this <a style="text-decoration: underline;" href="homebrewspellcreator">link</a></p>
<ul>
    @foreach ($homebrewSpells as $id)
    
    <li><strong><a href = "showHomebrewSpell/{{$id->name}}" >{{$id->name}}</a></strong></li>
    @endforeach
</ul>

@stop

@extends("master")
@section("pagina","...")

@section("content")
    <h3>{{$homebrewSpell->name}}</h3>

    <h4>Casting Time: {{$homebrewSpell->casting_time}}</h4>
   
    <p>Spell Level: {{$homebrewSpell->level}}</p>
    
@stop

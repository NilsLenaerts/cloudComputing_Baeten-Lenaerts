@extends("master")
@section("pagina","...")

@section("content")

    <h3>{{$homebrewSpell->name}}</h3>

    <h4>Casting Time: {{$homebrewSpell->castingTime}}</h4>
   
    <p>Spell Level: {{$homebrewSpell->level}}</p>
    
@stop

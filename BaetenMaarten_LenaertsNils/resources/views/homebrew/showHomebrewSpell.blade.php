@extends("master")
@section("pagina","...")

@section("content")

    <h3>{{$homebrewSpell[0]->name}}</h3>

    <h4>Casting Time: {{$homebrewSpell[0]->castingTime}}</h4>
   
    <p>Spell Level: {{$homebrewSpell[0]->level}}</p>
    
@stop

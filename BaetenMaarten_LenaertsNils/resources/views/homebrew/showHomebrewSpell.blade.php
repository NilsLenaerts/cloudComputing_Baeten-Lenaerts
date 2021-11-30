@extends("master")
@section("pagina","...")

@section("content")

    <h3>{{$homebrewSpell[0]->name}}</h3>

    <h4>Casting Time: {{$homebrewSpell[0]->casting_time}}</h4>
   
    <p>Spell Level: {{$homebrewSpell[0]->level}}</p>
    
@stop

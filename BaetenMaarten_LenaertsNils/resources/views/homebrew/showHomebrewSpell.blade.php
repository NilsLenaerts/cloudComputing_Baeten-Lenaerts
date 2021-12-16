@extends("master")
@section("pagina","...")

@section("content")
<div>
    <h1 class="font-family-draconis center">{{$homebrewSpell->name}}</h1>
    <form  class="margin-2" id="myCharacters" onchange="updateSpell('{{$homebrewSpell->name}}')">
        <h4>Casting Time: <input type="string" name="name" value="{{$homebrewSpell->castingTime}}" id="castingTime"/></h4>  
        <p>Spell Level: <input type="string" name="name" value="{{$homebrewSpell->level}} " id="level"/></p>
        <p>components: <input type="string" name="name" value="{{$homebrewSpell->components}} " id="components"/></p>
        <p>materials: <input type="string" name="name" value="{{$homebrewSpell->materials}} " id="materials"/></p>
        <p>description: <input type="string" name="name" value="{{$homebrewSpell->description}} " id="description"/></p>
        <p>school: <input type="string" name="name" value="{{$homebrewSpell->school}} " id="school"/></p>
        <p>range: <input type="string" name="name" value="{{$homebrewSpell->range}} " id="range"/></p>
        <p>ritual: <input type="string" name="name" value="{{$homebrewSpell->ritual}} " id="ritual"/></p>
        <p>availability: <input type="string" name="name" value="{{$homebrewSpell->availability}} " id="availability"/></p>
    </form>
</div>
@stop

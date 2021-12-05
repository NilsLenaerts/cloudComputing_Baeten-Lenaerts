@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h3>{{$homebrewSpell->name}}</h3>
    <h4>Casting Time: {{$homebrewSpell->castingTime}}</h4>  
    <p>Spell Level: {{$homebrewSpell->level}}</p>
    <p>components: {{$homebrewSpell->components}}</p>
    <p>materials: {{$homebrewSpell->materials}}</p>
    <p>description: {{$homebrewSpell->description}}</p>
    <p>school: {{$homebrewSpell->school}}</p>
    <p>range: {{$homebrewSpell->range}}</p>
    <p>ritual: {{$homebrewSpell->ritual}}</p>
    <p>availability: {{$homebrewSpell->availability}}</p>
</body>
@stop

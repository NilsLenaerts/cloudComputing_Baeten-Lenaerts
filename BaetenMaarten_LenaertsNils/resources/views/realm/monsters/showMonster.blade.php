@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h4>{{$monster->name}}</h4>
    <p> {{$monster->size}}</p>
    <p> {{$monster->type}}</p>
    <p> {{$monster->alignment}}</p>
    <p> {{$monster->armor_class}}</p>
    <p> {{$monster->hit_points}} : {{$monster->hit_dice}}</p>
    <p>strength: {{$monster->strength}}</p>
    <p>dexterity: {{$monster->dexterity}}</p>
    <p>constitution: {{$monster->constitution}}</p>
    <p>intelligence: {{$monster->intelligence}}</p>
    <p>charisma: {{$monster->charisma}}</p>
</body>

@stop

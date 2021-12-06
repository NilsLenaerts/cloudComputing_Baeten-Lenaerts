@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h3>{{$subrace->name}}</h3>
    
    <p>Description: {{$subrace->desc}}</p>
    
    @if(isset($subrace->ability_bonuses))
        <ul>
        @foreach($subrace->ability_bonuses as $bonuses)
            <li> Ability score: {{$bonuses->ability_score->name}} +{{$bonuses->bonus}}</li>
        @endforeach  
        </ul>
    @endif
    
    @if(isset($subrace->racial_traits))
    <p> You have the following racial traits: </p>
        <ul>
        @foreach($subrace->racial_traits as $trait)
            <li><a href="/showTrait/{{$trait->index}}">{{$trait->name}} </a></li> 
        @endforeach  
        </ul>
    @endif
    
</body>

@stop

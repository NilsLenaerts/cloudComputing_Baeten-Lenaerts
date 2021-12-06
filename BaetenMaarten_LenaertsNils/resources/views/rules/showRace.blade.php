@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h4>{{$race->name}}</h4>
    <h3>Speed :{{$race->speed}}</h3>
    
    @if(isset($race->ability_bonuses))
        <ul>
        @foreach($race->ability_bonuses as $bonuses)
            <li> Ability score: {{$bonuses->ability_score->name}} +{{$bonuses->bonus}}</li>
        @endforeach  
        </ul>
    @endif
    
    <p> Alignment: {{$race->alignment}}</p>
    <p> Age: {{$race->age}}</p>
    <p> Size: {{$race->size}}</p>
    <p> size description: {{$race->size_description}}</p>
    
    @if(isset($race->starting_proficiencies))
    <p> You are proficient in: </p>
        <ul>
        @foreach($race->starting_proficiencies as $profs)
            <li>{{$profs->name}}</li>
        @endforeach  
        </ul>
    @endif
    
    <!-- werkt nog niet 
    @if(isset($race->starting_proficiency_options))
    <ul>
    @foreach($race->starting_proficiency_options as $prof_options)
    <p> Choose: {{$prof_options->choose}} proficiencies</p>
    <p> From: 
        <ul>
            @foreach($prof_options->from as $froms)
                    <li>{{$froms->name}}</li>
            @endforeach
        </ul>
    @endforeach  
    </ul>
    @endif
    -->
    
    @if(isset($race->languages))
     <p> Language description: {{$race->language_desc}}</p>
        <ul>
        @foreach($race->languages as $language)
            <li>{{$language->name}}</li>
        @endforeach  
        </ul>
    @endif
    
    @if(isset($race->traits))
    <p> You have the following traits: </p>
        <ul>
        @foreach($race->traits as $trait)
            <li><a href="/showTrait/{{$trait->index}}">{{$trait->name}} </a></li> 
        @endforeach  
        </ul>
    @endif
    
    @if(isset($race->subraces))
    <p> Subraces: </p>
        <ul>
        @foreach($race->subraces as $subrace)
            <li><a href="/showSubrace/{{$subrace->index}}">{{$subrace->name}} </a></li> 
        @endforeach  
        </ul>
    @endif
</body>

@stop

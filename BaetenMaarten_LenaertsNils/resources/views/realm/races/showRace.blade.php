@extends("master")
@section("pagina","...")

@section("content")

    <h1 class="center margin-0 padding-0 font-family-draconis">{{$race->name}}</h1>
    <h4 class="center margin-0 padding-0 font-family-draconis">{{$race->name}}</h4>
    <h3 class="center margin-0 padding-0 font-family-draconis">Speed :{{$race->speed}}</h3>
    
    <div class="display-flex">
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($race->ability_bonuses))
            <p class="bold">Subclasses:</p>
            <ul>
                @foreach($race->ability_bonuses as $bonuses)
                <li> Ability score: {{$bonuses->ability_score->name}} +{{$bonuses->bonus}}</li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            <p class="bold"> Alignment: {{$race->alignment}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            <p class="bold"> Age: {{$race->age}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            <p class="bold"> Size: {{$race->size}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            <p class="bold"> size description: {{$race->size_description}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($race->starting_proficiencies))
            <p class="bold">You are proficient in:</p>
            <ul>
                @foreach($race->starting_proficiencies as $profs)
                <li>{{$profs->name}}</li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($race->languages))
            <p class="bold">Language description: {{$race->language_desc}}</p>
            <ul>
                @foreach($race->languages as $language)
                <li>{{$language->name}}</li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($race->traits))
            <p class="bold">You have the following traits:</p>
            <ul>
                @foreach($race->traits as $trait)
                <li><a href="/showTrait/{{$trait->index}}">{{$trait->name}} </a></li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($race->subraces))
            <p class="bold">Subraces:</p>
            <ul>
                @foreach($race->subraces as $subrace)
                <li><a href="/showSubrace/{{$subrace->index}}">{{$subrace->name}} </a></li>
                @endforeach  
            </ul>
            @endif
        </div>
    </div>
    
    
    
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


@stop

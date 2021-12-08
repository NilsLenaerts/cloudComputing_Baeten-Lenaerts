@extends("master")
@section("pagina","...")
@section("content")
    <script src="{!! mix('app.js') !!}"></script>
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$race->name}}</h1>
    <h3 class="center margin-0 padding-0 font-family-draconis">Speed: {{$race->speed}}ft</h3>
    
    <div class="display-flex">
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            @if(isset($race->ability_bonuses))
            <p class="bold">Subclasses:</p>
            <ul>
                @foreach($race->ability_bonuses as $bonuses)
                <li> Ability score: {{$bonuses->ability_score->name}} +{{$bonuses->bonus}}</li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold"> Alignment:</p> 
            <p>{{$race->alignment}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold"> Age:</p>
            <p>{{$race->age}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold"> Size:</p>
            <p>{{$race->size}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Size description:</p> 
            <p>{{$race->size_description}}</p>
        </div>
        

        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
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
            <p class="bold">Language description:</p> 
            <p>{{$race->language_desc}}</p>
            <ul>
                @foreach($race->languages as $language)
                <li>{{$language->name}}</li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            <p class="bold">You have the following traits:</p>
            <ul>
            @foreach ($race->traits as $trait)
                <li style="list-style-type:none">
                    <details class="details-example">
                        <summary><strong><a href="/showTrait/{{$trait->index}}">{{$trait->name}} </a></strong></summary>
                        <ul class="no-bullets">       
                            <!-- display dan de desc of time -->
                            <div id="{{$trait->index}}"></div>
                            <script>getTrait("{{$trait->index}}");</script>      
                        </ul>
                    </details>
                </li>
            @endforeach
            </ul>
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
    
    


@stop

@extends("master")
@section("pagina","Monster")
@section("content")
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$monster->name}}</h4>
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        <p class="bold">Info</p>
        <p> Size: {{$monster->size}}</p>
        <p> Type: {{$monster->type}}</p>
        <p> Allignment: {{$monster->alignment}}</p>
        <p> CR: {{$monster->challenge_rating}}</p>
        <p> Xp: {{$monster->xp}}</p>
    </div>
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        <p class="bold">AC: </p>
        <p>{{$monster->armor_class}}</p>
 
        <p class="bold">HP:</p> 
        <p>{{$monster->hit_points}} avg {{$monster->hit_dice}}</p>
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        <p class="bold">Ability scores</p>
        <p>strength: {{$monster->strength}}</p>
        <p>dexterity: {{$monster->dexterity}}</p>
        <p>constitution: {{$monster->constitution}}</p>
        <p>intelligence: {{$monster->intelligence}}</p>
        <p>charisma: {{$monster->charisma}}</p>
    </div>

    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->proficiencies))
        <p class="bold">Skills & Saving throws</p>
        <ul>
            @foreach($monster->proficiencies as $proficiencies)
            <li>{{$proficiencies->proficiency->name}}: +{{$proficiencies->value}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->speed))
        <p class="bold">Movement:<p>
        <ul>
            @if(isset($monster->speed->walk))<li><p> walk: {{$monster->speed->walk}}</p>@endif</li>
            @if(isset($monster->speed->swim))<li><p> swim: {{$monster->speed->swim}}</p>@endif</li>
            @if(isset($monster->speed->fly))<li><p> fly: {{$monster->speed->fly}}</p></li>@endif
            @if(isset($monster->speed->hover))<li><p> hover: {{$monster->speed->hover}}</p>@endif</li>
            @if(isset($monster->speed->burrow))<li><p> burrow: {{$monster->speed->burrow}}</p>@endif</li>
        </ul>
        @endif
    </div>
    
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->damage_vulnerabilities))
        <p class="bold">Vulnerabilities:<p>
        <ul>
            @foreach($monster->damage_vulnerabilities as $vulnerabilities)
                <li><p>{{$vulnerabilities}}</p></li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->damage_resistances))
        <p class="bold">Resistances:<p>
        <ul>
            @foreach($monster->damage_resistances as $resistances)
                <li><p>{{$resistances}}</p></li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->damage_immunities))
        <p class="bold">Damage immunities:<p>
        <ul>
            @foreach($monster->damage_immunities as $immunities)
                <li><p>{{$immunities}}</p></li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->condition_immunities))
        <p class="bold">Condition immunities:<p>
        <ul>
            @foreach($monster->condition_immunities as $cimmunities)
                <li><p>{{$cimmunities}}</p></li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->senses))
        <p class="bold">Senses:<p>
        <ul>
            @if(isset($monster->senses->darkvision))<li><p> Darkvision: {{$monster->senses->darkvision}}</p>@endif</li>
            @if(isset($monster->senses->passive_perception))<li><p> Passive perception: {{$monster->senses->passive_perception}}</p>@endif</li>
            @if(isset($monster->senses->blindsight))<li><p> Blindsight: {{$monster->senses->blindsight}}</p></li>@endif
            @if(isset($monster->senses->tremorsense))<li><p> Tremorsense: {{$monster->senses->tremorsense}}</p></li>@endif
            @if(isset($monster->senses->truesight))<li><p> truesight: {{$monster->senses->truesight}}</p></li>@endif
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->languages))
        <p class="bold">Languages:<p>
        <p>{{$monster->languages}}</p>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->special_abilities))
        <p class="bold">Special Abilities:</p>
        <ul>
            @foreach($monster->special_abilities as $specials)
                <li style="list-style-type:none">
                    <details class="details-example">
                        <summary><strong>{{$specials->name}}</strong></summary>
                        <ul class="no-bullets">
                            <p>{{$specials->desc}}</p>
                        </ul>
                    </details>
                </li> 
            @endforeach
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->actions))
        <p class="bold">Actions:</p>
        <ul>
            @foreach($monster->actions as $actions)
                <li style="list-style-type:none">
                    <details class="details-example">
                        <summary><strong>{{$actions->name}}</strong></summary>
                        <ul class="no-bullets">
                            <p>{{$actions->desc}}</p>
                        </ul>
                    </details>
                </li> 
            @endforeach
        </ul>
        @endif
    </div>
    
    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
        @if(isset($monster->legendary_actions))
        <p class="bold"> Legendairy actions:</p>
        <ul>
            @foreach($monster->legendary_actions as $leg)
                <li style="list-style-type:none">
                    <details class="details-example">
                        <summary><strong>{{$leg->name}}</strong></summary>
                        <ul class="no-bullets">
                            <p>{{$leg->desc}}</p>
                        </ul>
                    </details>
                </li> 
            @endforeach
        </ul>
        @endif
    </div>
@stop

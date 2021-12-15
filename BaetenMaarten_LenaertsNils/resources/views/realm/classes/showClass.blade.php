@extends("master")
@section("pagina","...")
@section("content")
    <script src="{!! mix('app.js') !!}"></script>
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$class->name}}</h1>
   
    <p class="text-right bold">Hit die: d{{$class->hit_die}}</p>
   
    <div class="display-flex">  
        @if(isset($class->proficiency_choices))
        @foreach($class->proficiency_choices as $prof_choice)
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            <p class="bold">Choose: {{$prof_choice->choose}} proficiencies</p>
            <ul>
                @foreach($prof_choice->from as $froms)
                <li class="list-item-class padding-1">{{$froms->name}}</li>
                @endforeach
            </ul>
        </div>
        @endforeach  
        @endif
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($class->proficiencies))
            <p class="bold">Proficiencies:</p>
            <ul>
                @foreach($class->proficiencies as $prof)
                <li class="list-item-class padding-1">{{$prof->name}}</li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($class->saving_throws))
            <p class="bold">Saving throws:</p>
            <ul>
                @foreach($class->saving_throws as $saves)
                <li>{{$saves->name}}</li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($class->subclasses))
            <p class="bold">Subclasses:</p>
            <ul>
                @foreach($class->subclasses as $sub)
                <li><a href="/showSubclass/{{$sub->index}}">{{$sub->name}} </a></li>
                @endforeach  
            </ul>
            @endif
        </div>
        
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            <p class="bold">Your levelling traits</p>
            <ul>
            @foreach ($classlevels as $classlevel)
                <li style="list-style-type:none">
                    <details class="details-example">
                        <summary><strong>{{$classlevel->level}}</strong></summary>
                        <ul class="no-bullets">       
                            @if(isset($classlevel->features))
                                @foreach($classlevel->features as $feature)
                                <details class="details-example">
                                    <summary><strong>{{$feature->name}}</strong></summary>
                                    <ul class="no-bullets"> 
                                        <div id="{{$feature->index}}"></div>
                                        <script>getFeatures("{{$feature->index}}");</script>     
                                    </ul>
                                </details>
                                @endforeach
                            @endif
                        </ul>
                    </details>
                </li>
            @endforeach
            </ul>
        </div>
        
    </div>
@stop
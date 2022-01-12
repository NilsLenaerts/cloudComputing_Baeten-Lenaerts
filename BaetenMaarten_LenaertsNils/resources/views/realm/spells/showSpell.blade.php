@extends("master")
@section("pagina","...")
@section("content")
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$spell->name}}</h1>
    <p class="text-right bold"><i class="fa fa-magic"></i> School of magic: {{$spell->school->name}}</p>
    <div class="display-flex">
    
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Casting time</p>
            <p>{{$spell->casting_time}}</p>
        </div>
        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 vertical-align-top">
            <p class="bold">Range</p>
            <p>{{$spell->range}}</p>
            @if(isset($spell->area_of_effect))
                <p class="bold">Area of effect:</p>
                <p>{{$spell->area_of_effect->size}} foot  {{$spell->area_of_effect->type}}</p>
            @endif
        </div>
    
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 vertical-align-top">
            @if(isset($spell->components))
            <p class="bold">Components</p>
                <p class="spell-components">
                    @foreach($spell->components as $component)
                        <span>{{$component}}</span>
                    @endforeach  
                </p>
            @endif
            @if(isset($spell->material))
                <div>
                    <p class="bold">Material</p>
                    <p>{{$spell->material}}</p>
                </div>
            @endif
        </div>
        
        @if($spell->ritual)
            <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 vertical-align-top bold">
                <p>Ritual</p>
            </div>
        @endif
    
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 vertical-align-top">
            <p class="bold">Duration</p>
            <p>{{$spell->duration}}</p>
        </div>
    
        @if($spell->concentration)
            <p class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 vertical-align-top bold">Concentration</p>
        @endif
    
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 vertical-align-top">
            <p class="bold">Spell Level</p>
            <p>{{$spell->level}}</p>
        </div>
    
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 vertical-align-top">
            <p class="bold">Available to</p>
            <ul>
                @foreach($spell->classes as $class)
                    <li>{{$class->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    
    @if(isset($spell->desc))
    <div class="margin-1 padding-1 light-background-color display-inline-block vertical-align-top">   
        <p class="bold">Description</p>
            @foreach($spell->desc as $description)
                {{$description}}
            @endforeach  
        @endif
        @if(isset($spell->higher_level))
            <p>At higher level: {{$spell->higher_level[0]}}</p>
        @endif    
    </div>
@stop
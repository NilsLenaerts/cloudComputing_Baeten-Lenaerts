@extends("master")
@section("pagina","...")

@section("content")

    <h1 class="center margin-0 padding-0 font-family-draconis">{{$homebrewSpell->name}}</h1>
    <div class="display-flex">
        
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Casting Time:</p> 
            <p>{{$homebrewSpell->castingTime}}</p>  
        </div>
        
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Level:</p> 
            <p>{{$homebrewSpell->level}}</p>  
        </div>
        
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Components:</p> 
            <p>{{$homebrewSpell->components}}</p>  
        </div>
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Materials:</p> 
            <p>{{$homebrewSpell->materials}}</p>  
        </div>
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Description:</p> 
            <p>{{$homebrewSpell->description}}</p>  
        </div>
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">School of magic:</p> 
            <p>{{$homebrewSpell->school}}</p>  
        </div>
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Range and Aoe:</p> 
            <p>{{$homebrewSpell->range}}</p>  
        </div>
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Ritual:</p> 
            <p>{{$homebrewSpell->ritual}}</p>  
        </div>
        <div class="margin-1 padding-1 light-background-color flex-basis-20 vertical-align-top">
            <p class="bold">Availability</p> 
            <p>{{$homebrewSpell->availability}}</p>  
        </div>
       
    </div>
@stop

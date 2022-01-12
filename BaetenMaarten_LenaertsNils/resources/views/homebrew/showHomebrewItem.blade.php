@extends("master")
@section("pagina","Homebrew Item")
@section("content")
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$homebrewItem->name}}</h1>
    <div class="display-flex">
        <div class="margin-1 padding-1 light-background-color flex-basis-45 vertical-align-top">
            <p class="bold">Price:</p> 
            <p>{{$homebrewItem->price}}</p>
        </div>  
        <div class="margin-1 padding-1 light-background-color flex-basis-45 vertical-align-top">
            <p class="bold">decsription: </p>
            <p>{{$homebrewItem->description}}</p>
        </div>  
    </div>
@stop

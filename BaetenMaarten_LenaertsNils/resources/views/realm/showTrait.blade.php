@extends("master")
@section("pagina","...")

@section("content")
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$trait->name}}</h1>
   
    <div class="display-flex">  
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @foreach($trait->desc as $description)
                {{$description}}
            @endforeach  
        </div>
    </div>
@stop

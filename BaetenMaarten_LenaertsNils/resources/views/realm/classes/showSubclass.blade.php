@extends("master")
@section("pagina","...")

@section("content")

    <h1 class="center margin-0 padding-0 font-family-draconis">{{$subclass->name}}</h1>
   
    <div class="display-flex">  
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($subclass->desc ))
                @foreach($subclass->desc as $description)
                    {{$description}}
                @endforeach  
            @endif
        </div>
    </div>

@stop

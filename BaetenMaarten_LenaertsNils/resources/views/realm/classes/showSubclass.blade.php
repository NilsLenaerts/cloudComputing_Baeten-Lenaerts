@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h3>{{$subclass->name}}</h3>
    
    @if(isset($subclass->desc ))
        @foreach($subclass->desc as $description)
            {{$description}}
        @endforeach  
    @endif
 
</body>

@stop

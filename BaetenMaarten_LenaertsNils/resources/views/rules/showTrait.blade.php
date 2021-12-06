@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h3>{{$trait->name}}</h3>
    
    <p>Description:</p>
    @foreach($trait->desc as $description)
    {{$description}}
    @endforeach  

</body>

@stop

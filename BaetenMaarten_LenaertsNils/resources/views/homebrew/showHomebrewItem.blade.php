@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h3>{{$homebrewItem->name}}</h3>
    <h4>Price: {{$homebrewItem->price}}</h4>
    <p>decsription: {{$homebrewItem->description}}</p>
</body>    
@stop

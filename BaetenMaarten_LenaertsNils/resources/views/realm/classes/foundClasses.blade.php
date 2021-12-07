@extends("master")
@section("pagina","...")
@section("content")
    <h2 class="font-family-draconis center">Classes</h2>
    <div class="tiles">
        @foreach ($classes as $id)
            <div class="inner-tile">
                <a href = "showClass/{{$id->index}}">
                    <p class="center">{{$id->name}}</p>
                </a>
            </div>
        @endforeach
    </div>
@stop
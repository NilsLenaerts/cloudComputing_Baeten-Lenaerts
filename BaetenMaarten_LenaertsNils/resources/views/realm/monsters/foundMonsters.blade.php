
@extends("master")
@section("pagina","...")
@section("content")
    <h2 class="font-family-draconis center">Classes</h2>
    <div class="tiles">
        @foreach ($monsters as $id)
            <div class="inner-tile">
                <a href = "showMonster/{{$id->index}}">
                    <p class="center">{{$id->name}}</p>
                </a>
            </div>
        @endforeach
    </div>
@stop
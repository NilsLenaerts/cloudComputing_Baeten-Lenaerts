@extends("master")
@section("pagina","Races")
@section("content")
    <h2 class="font-family-draconis center">Races</h2>
    <div class="tiles">
        @foreach ($races as $id)
            <div class="inner-tile">
                <a href = "showRace/{{$id->index}}">
                    <p class="center">{{$id->name}}</p>
                </a>
            </div>
        @endforeach
    </div>
@stop
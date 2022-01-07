@extends("master")
@section("pagina","Calendar")
@section("content")
    <script src="{!! mix('app.js') !!}"></script>
    <h2 class="font-family-draconis center">Calendar</h2>
    <div class="tiles">
        @foreach ($events as $ev)
            <div class="inner-tile">
                <p class="center">Start time: {{$ev->StartTime}}</p>
                <p class="center">End time: {{$ev->EndTime}}</p>
                <p class="center">Owner: {{$ev->Owner}}</p>
                <p class="center">Description: {{$ev->Name}}</p>
            </div>
        @endforeach
    </div>
@stop
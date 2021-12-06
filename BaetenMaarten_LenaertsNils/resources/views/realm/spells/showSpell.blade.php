@extends("master")
@section("pagina","...")

@section("content")
    <body class="show-background-image background">
        <h3>{{$spell->name}}</h3>
        <h4><i>School of magic: {{$spell->school->name}}</i></h4>
        <h4>Casting Time: {{$spell->casting_time}}</h4>
        <h4>Range: {{$spell->range}}</h4>
        @if(isset($spell->area_of_effect))
            <h4>Area of effect: {{$spell->area_of_effect->size}} foot  {{$spell->area_of_effect->type}} </h4>
        @endif
        @if(isset($spell->components))
        <h4>Components:</h4>
            <ul>
                @foreach($spell->components as $component)
                <li>{{$component}}</li>
                @endforeach  
            </ul>
        @endif
        @if(isset($spell->material))
            <p>Material: {{$spell->material}}</p>
        @endif
        @if($spell->ritual)
        <p>Ritual</p>
        @endif
        <p>Duration: {{$spell->duration}}</p>
        @if($spell->concentration)
        <p>Concentration</p>
        @endif
        <p>Spell Level: {{$spell->level}}</p>
        @if(isset($spell->desc))
        <p>Description:</p>
            @foreach($spell->desc as $description)
            {{$description}}
            @endforeach  
        @endif
        @if(isset($spell->higher_level))
            <p>At higher level: {{$spell->higher_level[0]}}</p>
        @endif

        <p>Available to:</p>
        <ul>
            @foreach($spell->classes as $class)
                <li>{{$class->name}}</li>
            @endforeach
        </ul>
    </body>
@stop
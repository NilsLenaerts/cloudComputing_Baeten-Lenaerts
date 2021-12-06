@extends("master")
@section("pagina","...")

@section("content")
<body class="show">
    <h4>{{$class->name}}</h4>
    <h3>hit die: d{{$class->hit_die}}</h3>


    @if(isset($class->proficiency_choices))
    <ul>
    @foreach($class->proficiency_choices as $prof_choice)
    <p> Choose: {{$prof_choice->choose}} proficiencies</p>
    <p> From: 
        <ul>
            @foreach($prof_choice->from as $froms)
                    <li>{{$froms->name}}</li>
            @endforeach
        </ul>
    @endforeach  
    </ul>
    @endif


    @if(isset($class->proficiencies))
    <p>Proficiencies:</p>
    <ul>
    @foreach($class->proficiencies as $prof)
        <li>{{$prof->name}}</li>
    @endforeach  
    </ul>
    @endif

    @if(isset($class->saving_throws))
    <p>Saving throws:</p>
    <ul>
    @foreach($class->saving_throws as $saves)
        <li>{{$saves->name}}</li>
    @endforeach  
    </ul>
    @endif

    @if(isset($class->subclasses))
    <p> subclasses: </p>
        <ul>
        @foreach($class->subclasses as $subclass)
            <li><a href="/showSubclass/{{$subclass->index}}">{{$subclass->name}} </a></li> 
        @endforeach  
        </ul>
    @endif

</body>

@stop

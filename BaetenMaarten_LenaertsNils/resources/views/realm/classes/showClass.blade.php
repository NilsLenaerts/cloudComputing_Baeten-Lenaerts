@extends("master")
@section("pagina","...")

@section("content")
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$class->name}}</h1>
    <p class="text-left bold">Hit die: d{{$class->hit_die}}</p>
    @if(isset($class->proficiency_choices))
        @foreach($class->proficiency_choices as $prof_choice)
        <div class="margin-1 display-inline-block width-30 vertical-align-top">
            <p class="bold">Choose: {{$prof_choice->choose}} proficiencies</p>
            <ul>
                @foreach($prof_choice->from as $froms)
                    <li class="list-item-class padding-1">{{$froms->name}}</li>
                @endforeach
            </ul>
        </div>
        @endforeach  
    @endif
    
    <div class="margin-1 display-inline-block width-30 vertical-align-top">
        @if(isset($class->proficiencies))
        <p class="bold">Proficiencies:</p>
        <ul>
            @foreach($class->proficiencies as $prof)
                <li class="list-item-class padding-1">{{$prof->name}}</li>
            @endforeach  
        </ul>
        @endif
    </div>

    <div class="margin-1 display-inline-block width-30 vertical-align-top">
        @if(isset($class->saving_throws))
        <p class="bold">Saving throws:</p>
            <ul>
            @foreach($class->saving_throws as $saves)
                <li>{{$saves->name}}</li>
            @endforeach  
            </ul>
        @endif
    </div>

    <div class="margin-1 display-inline-block width-30 vertical-align-top">
        @if(isset($class->subclasses))
        <p class="bold">Subclasses:</p>
        <ul>
            @foreach($class->subclasses as $sub)
                <li>{{$sub->name}}</li>
            @endforeach  
        </ul>
        @endif
    </div>
@stop
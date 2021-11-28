@extends("master")
@section("pagina","...")

@section("content")

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

@if(isset($class->subclasses))
<p>subclasses:</p>
<ul>
@foreach($class->subclasses as $sub)
    <li>{{$sub->name}}</li>
@endforeach  
</ul>
@endif



@stop

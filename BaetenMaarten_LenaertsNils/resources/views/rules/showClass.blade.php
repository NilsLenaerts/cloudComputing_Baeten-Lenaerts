@extends("master")
@section("pagina","...")

@section("content")

<h4>{{$class->name}}</h4>
<h3>hit die: d{{$class->hit_die}}</h3>
@if(isset($class->proficiency_choices))
<p>Choose: </p> <p>$class->proficiency_choices[0]->choose </p>

<ul>
@foreach($class->proficiency_choices[2]->from as $prof_choice)
    <li>{{$prof_choice->name}}</li>
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

@extends('master')
@section('subtitle', 'Rules')
@section('content')
    <body class="rules-background-image background" >
        <div style="text-align: center;">
            <h2 style="color:white">Welcome to D&amp;D&nbsp; 5e Rules</h2>
        </div>

        <ul>
            @foreach ($subSections as $section)
            <li>
                <strong>{{$section->name}}</strong>
                @php $par = $section->index @endphp
                
                @foreach ($ruleSections as $rule)
                    @if($rule->index == $par)
                    <!-- display dan de desc of time -->
                    <a href = "showDescription/{{$rule->index}}" >{{$rule->name}}</a>

                    @endif
                @endforeach
            </li>
            @endforeach
        </ul>
    </body>
@stop

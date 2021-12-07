@extends('master')
@section('subtitle', 'Rules')
@section('content')
<script src="{!! mix('app.js') !!}"></script>
    <h2 class ="font-family-draconis center">Welcome to D&amp;D&nbsp; 5e Rules</h2>
    <h3 class ="font-family-draconis center">{{$sections}} </h3>
    <ul>
        @foreach ($subSections as $section)

        <li style="list-style-type:none">
            <details class="details-example">
                <summary><strong>{{$section->name}}</strong></summary>
                <ul class="no-bullets">
                    
                        <!-- display dan de desc of time -->
                        <div id="{{$section->index}}"></div>
                        <script>getDescription("{{$section->index}}");</script>
                    
                </ul>
            </details>
        </li>
        @endforeach
    </ul>
@stop

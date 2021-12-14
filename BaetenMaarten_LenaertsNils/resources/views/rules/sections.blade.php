@extends('master')
@section('subtitle', 'Rules')
@section('content')
<style type="text/css">
    table, th, td{
        padding: 15px;
            }
</style>
<script src="{!! mix('app.js') !!}"></script>

    <h1 class ="font-family-draconis center">{{$sections}} </h3>
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

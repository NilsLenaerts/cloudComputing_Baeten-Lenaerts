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
                <details class="details-example">
                    <summary><strong>{{$section->name}}</strong></summary>
                    <ul>
                        <li>
                            <!-- display dan de desc of time -->
                            <p id="{{$section->index}}"></p>
                            <script>getDescription("{{$section->index}}");</script>
                        </li>
                    </ul>
                </details>
            </li>
            @endforeach
        </ul>
    </body>
@stop

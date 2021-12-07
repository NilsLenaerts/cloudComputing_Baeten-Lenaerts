@extends('master')
@section('subtitle', 'Rules')
@section('content')
    <h2 class ="font-family-draconis center">Welcome to D&amp;D&nbsp; 5e Rules</h2>
    <ul>
        @foreach ($subSections as $section)

        <li>
            <details class="details-example">
                <summary><strong>{{$section->name}}</strong></summary>
                <ul class="no-bullets">
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

@stop

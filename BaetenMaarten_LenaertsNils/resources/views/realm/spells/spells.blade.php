@extends('master')
@section('subtitle','Spells')
@section('content')
    <body class="spellList-background-image background">
        <div  style="position:fixed; margin-bottom: 50px; margin-left: 500px">
            <h2 style="color: white">Welcome to D&amp;D&nbsp; 5e Rules Spells</h2>
            <p style="color: white">List of spells</p>
            <form action="spells" method="get">
                <p style="color: white">Level:  <input type="int" name="level" value="" id="level"/>
                    <button type="submit"><strong>Filter</strong></button>
                </p>
            </form>
        </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

        <div style="margin-top: 100px; ">
            <ul class="spellList">
                @if(isset($spells))
                    @foreach ($spells as $id)
                        <li><strong><a href = "showSpell/{{$id->index}}" >{{$id->name}}</a></strong></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </body>
@stop
@extends('master')
@section('subtitle', 'Spells')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e Rules Spells</h2>
        <p>List of spells</p>
        <form action="foundSpells" method="post">
            <p>Casting Time: </p> <input type="string" name="casting Time" value="1 action" id="castingTime"/>
            <br>
            <p>Level: </p> <input type="int" name="level" value="" id="level"/>
            <button type="submit"><strong>zoek via submit</strong></button>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

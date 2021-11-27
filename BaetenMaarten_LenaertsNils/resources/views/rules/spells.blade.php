@extends('master')
@section('subtitle', 'Spells')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e Rules Spells</h2>
        <p>List of spells</p>
        <form action="foundSpells" method="post">
            <p>Level:  <input type="int" name="level" value="" id="level"/>
                <button type="submit"><strong>zoek via submit</strong></button>
            </p>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

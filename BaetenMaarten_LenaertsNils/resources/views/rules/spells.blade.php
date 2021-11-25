@extends('master')
@section('subtitle', 'Spells')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e Rules Spells</h2>
        <p>List of spells</p>
        <form action="foundSpells" method="post">
            @geencsrf
            Casting Time; <input type="number" name="ondergrens" value="500" id="minPrijs"/>
            <br/>
            <button type="submit"><strong>zoek via submit</strong></button>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

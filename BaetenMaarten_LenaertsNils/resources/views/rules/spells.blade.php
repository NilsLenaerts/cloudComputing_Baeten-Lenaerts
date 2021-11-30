@extends('master')
@section('subtitle')
@section('content')

    <body class="spell">
        <link rel="stylesheet" type="text/css" href="styles.css" media=”screen” />
        <h2 style="color: white">Welcome to D&amp;D&nbsp; 5e Rules Spells</h2>
        <p style="color: white">List of spells</p>
        <form action="foundSpells" method="post">
            <p style="color: white">Level:  <input type="int" name="level" value="" id="level"/>
                <button type="submit"><strong>zoek via submit</strong></button>
            </p>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

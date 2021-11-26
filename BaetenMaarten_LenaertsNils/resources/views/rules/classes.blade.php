@extends('master')
@section('subtitle', 'Spells')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e Rules Spells</h2>
        <p>List of classes</p>
        <form action="foundClasses" method="post">
            <p>clas: </p> <input type="int" name="level" value="1" id="level"/>
            <br/>
            <button type="submit"><strong>zoek via submit</strong></button>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop
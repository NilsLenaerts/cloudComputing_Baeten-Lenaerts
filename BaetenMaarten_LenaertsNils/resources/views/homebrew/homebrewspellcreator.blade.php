@extends('master')
@section('subtitle', 'Homebrew creator')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
        <form action="http://127.0.0.1:1200/saveSpell" method="post">
            <p>Name:  <input type="string" name="name" value="" id="name"/></p>
            <p>Casting Time:  <input type="string" name="castingTime" value="" id="castingTime"/></p>
            <p>Level:  <input type="int" name="level" value="" id="level"/></p>  
            <button type="submit"><strong>zoek via submit</strong></button> 
            <button type="button" onclick="saveSpell()">
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

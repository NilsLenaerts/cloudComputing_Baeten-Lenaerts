@extends('master')
@section('subtitle', 'Homebrew creator')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
        <p>Name:  <input type="string" name="name" value="" id="name"/></p>
        <p>Casting Time:  <input type="string" name="castingTime" value="" id="castingTime"/></p>
        <p>Level:  <input type="int" name="level" value="" id="level"/></p>  
        <button type="button" onclick="saveSpell()"><strong>Save</strong></button> 
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

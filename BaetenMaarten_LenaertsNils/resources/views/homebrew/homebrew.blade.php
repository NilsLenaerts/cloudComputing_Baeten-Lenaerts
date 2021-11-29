@extends('master')
@section('subtitle', 'Homebrew creator')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
        <p>Want to add homebreww spells press this <a style="text-decoration: underline;" href="homebrewspellcreator">link</a></p>
        <p>Want see all the homebrew spells <p>
        <form action="http://127.0.0.1:1200/searchSpell" method="post>
            <p>Level:  <input type="int" name="level" value="" id="level"/></p>  
            <button type="submit"><strong>zoek via submit</strong></button> 
            <button type="button" onclick="searchSpell()">
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

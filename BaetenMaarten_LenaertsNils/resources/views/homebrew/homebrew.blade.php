@extends('master')
@section('subtitle', 'Homebrew creator')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
        <p>Want to add homebreww spells press this <a style="text-decoration: underline;" href="homebrewspellcreator">link</a></p>
        <p>Want see all the homebrew spells <p>
        <form>
            <p>Level:  <input type="int" name="level" value="" id="level"/></p>  
            <button type="button" onclick="searchSpell()"><strong>Search</strong></button>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

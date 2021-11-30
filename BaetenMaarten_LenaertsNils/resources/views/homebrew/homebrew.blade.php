@extends('master')
@section('subtitle', 'Homebrew creator')
@section('content')
    <body>
        <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
        <p>Want to add homebreww spells press this <a style="text-decoration: underline;" href="homebrewspellcreator">link</a></p>
        <p>Want see all the homebrew spells <p>
        <form action="foundHomebrewSpells" method="get">
            <p>name:  <input type="string" name="name" value="" id="name"/></p>  
            <button type="submit" ><strong>Search submit</strong></button>
            <button type="button" onclick="searchSpell()"><strong>Search</strong></button>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop

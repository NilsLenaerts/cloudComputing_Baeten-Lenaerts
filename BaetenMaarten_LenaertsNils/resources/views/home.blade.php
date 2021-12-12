@extends('master')
@section('subtitle',"Home")
@section('content')

    <div class="border-box padding-2">
        <h1 class="center margin-0 padding-0 font-family-draconis" >Welcome to D&amp;D&nbsp;</h1>
        <p class="center"><img src="https://dnd.wizards.com/sites/all/themes/dx/logo.png" width="382" height="64" /></p>
        <h2 class="center font-family-draconise margin-0"><i class="font-family-draconis">&nbsp;May the die be in your favor<i></h2>
        <h2 class="center font-family-draconise margin-0"><i class="font-family-draconis">{{$name ?? ''}}</i></h2>
    </div>
@stop
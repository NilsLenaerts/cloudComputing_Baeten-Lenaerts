@extends('master')
@section('subtitle','Spells')
@section('content')
    <div>
        <!-- <div  style="position:fixed; margin-bottom: 50px; margin-left: 500px"> -->
        <div class="center">
        <h2 class="text-color-white">Welcome to D&amp;D&nbsp; 5e Rules Spells</h2>
            <p class="text-color-white">List of spells</p>
            <form action="spells" method="get">
                <p class="text-color-white">Level:  <input type="int" name="level" value="" id="level"/>
                    <button type="submit"><strong>Filter</strong></button>
                </p>
            </form>
        </div>

        <div style="margin-top: 100px; ">
            <ul class="spellList">
                @if(isset($spells))
                    @foreach ($spells as $id)
                        <li><strong><a href = "showSpell/{{$id->index}}" >{{$id->name}}</a></strong></li>
                    @endforeach
                @endif
            </ul>
        </div>
</div>
@stop
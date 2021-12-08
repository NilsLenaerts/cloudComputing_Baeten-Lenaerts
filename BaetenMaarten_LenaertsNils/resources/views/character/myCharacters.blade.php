@extends('master')
@section('subtitle','Spells')
@section('content')
    <div>
        <h2 class="font-family-draconis center">My characters</h2>
            <p>Name:  <input type="string" name="name" value="name" id="name"/></p>
            <p>Race:  <input type="string" name="race" value="race" id="race"/></p>
            <p>Class:  <input type="string" name="class" value="class" id="class"/></p> 
            <p><button type="button" onclick="createCharacter()"><strong>Save</strong></button> </p>
        </div>
            <!--<div class="tiles center">-->
                @if(isset($characters))
                @foreach ($characters as $char)
                <div class="inner-tile">
                            <a href="showMyCharacter/{{$char->name}}">
                            <p>{{$id->name}}</p>
                        </a>
                    </div>
                        @endforeach
                    @endif
            </div>
    </div>
@stop


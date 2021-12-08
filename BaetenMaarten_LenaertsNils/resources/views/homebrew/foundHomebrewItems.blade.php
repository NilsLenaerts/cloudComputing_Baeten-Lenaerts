@extends('master')
@section('subtitle','Spells')
@section('content')
    <div>
        <h2 class="font-family-draconis center">Homebrew Items</h2>
            <p>Name:  <input type="string" name="name" value="name" id="name"/></p>
            <p>Price:  <input type="string" name="price" value="price" id="price"/></p>
            <p>Description:  <input type="string" name="description" value="Description" id="description"/></p> 
            <p><button type="button" onclick="saveItem()"><strong>Save</strong></button> </p>
        </div>
            <!--<div class="tiles center">-->
                @if(isset($homebrewItems))
                @foreach ($homebrewItems as $id)
                <div class="inner-tile">
                            <a href="showHomebrewItem/{{$id->name}}">
                            <p>{{$id->name}}</p>
                        </a>
                    </div>
                        @endforeach
                    @endif
            </div>
    </div>
@stop


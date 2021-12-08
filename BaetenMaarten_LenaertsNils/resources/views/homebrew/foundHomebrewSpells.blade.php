@extends('master')
@section('subtitle','Spells')
@section('content')
    <div>
        <h2 class="font-family-draconis center">5e Homebrew Spell creator</h2>
            <div class="column" id="spellform">
                <p>Name:  <input type="string" name="name" value="magic missile" id="name" class="padding-1 margin-0"/></p>
                <p>Casting Time:  <input type="string" name="castingTime" value="1 action" id="castingTime" class="padding-1 margin-0"/></p>
                <p>Level:  <input type="int" name="level" value="1" id="level"/></p>  
            </div>
            <div class="column"  id="spellform">
                <p>Components:  <input type="string" name="components" value="vs" id="components" class="padding-1 margin-0"/></p>
                <p>Materials:  <input type="string" name="materials" value="none" id="materials" class="padding-1 margin-0"/></p>
                <p>Description:  <input type="string" name="description" value="force blasts" id="description" class="padding-1 margin-0"/></p>
            </div>
            <div class="column"  id="spellform">
                <p>School:  <input type="string" name="school" value="divination" id="school" class="padding-1 margin-0"/></p>
                <p>Range:  <input type="string" name="range" value="120ft" id="range" class="padding-1 margin-0"/></p>     
                <p>Ritual:  <input type="boolean" name="ritual" value="nope" id="ritual" class="padding-1 margin-0"/></p> 
            </div>
            <div class="column"  id="spellform">
                <p>Availabilty:  <input type="string" name="availability" value="wizard" id="availability" class="padding-1 margin-0"/></p> 
                <button type="button" class="border-box padding-1 margin-1" onclick="saveSpell()"><strong>Save</strong></button> 
            </div>
        </div>

            <div class="tiles center">
                @if(isset($homebrewSpells))
                @foreach ($homebrewSpells as $id)
                <div class="inner-tile">
                            <a href="showHomebrewSpell/{{$id->name}}">
                            <p>{{$id->name}}</p>
                        </a>
                    </div>
                        @endforeach
                    @endif
            </div>
</div>
@stop


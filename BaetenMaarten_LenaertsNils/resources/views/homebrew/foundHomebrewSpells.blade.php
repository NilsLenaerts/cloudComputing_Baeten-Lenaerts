@extends("master")
@section("pagina","Homebrew spells")

@section("content")
    <body class="spellList">
        <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
        <div class="row">
            <div class="column" >
                <p>Name:  <input type="string" name="name" value="" id="name"/></p>
                <p>Casting Time:  <input type="string" name="castingTime" value="" id="castingTime"/></p>
                <p>Level:  <input type="int" name="level" value="" id="level"/></p>  
            </div>
            <div class="column">
                <p>Components:  <input type="string" name="components" value="" id="components"/></p>
                <p>Materials:  <input type="string" name="materials" value="" id="materials"/></p>
                <p>Description:  <input type="string" name="description" value="" id="description"/></p>
            </div>
            <div class="column">
                <p>School:  <input type="string" name="school" value="" id="school"/></p>
                <p>Range:  <input type="string" name="range" value="" id="range"/></p>     
                <p>Ritual:  <input type="boolean" name="ritual" value="" id="ritual"/></p> 
            </div>
            <div class="column">
                <p>Availabilty:  <input type="string" name="availability" value="" id="availability"/></p> 
                <button type="button" onclick="saveSpell()"><strong>Save</strong></button> 
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div>
            <ul class="spellList">
                @if(isset($homebrewSpells))
                    @foreach ($homebrewSpells as $id)
                        <li><strong><a href = "showHomebrewSpell/{{$id->name}}" >{{$id->name}}</a></strong></li>
                    @endforeach
                @endif
            </ul>
        </div>

    </body>
@stop

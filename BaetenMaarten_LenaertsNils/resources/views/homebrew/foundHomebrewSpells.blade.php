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
        <div class="tiles center" >
            @if(isset($homebrewSpells))
            @foreach ($homebrewSpells as $hspell)
                <div class="inner-tile">
                    <a href="showHomebrewSpell/{{$hspell->name}}">
                        <p>{{$hspell->name}}</p>
                    </a>
                        <button onclick="document.getElementById('{{$hspell->name}}').style.display='block'" class="button1" > Delete</button>

                        <div id="{{$hspell->name}}" class="modal">
                          <span onclick="document.getElementById('{{$hspell->name}}').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <form class="modal-content" action="/action_page.php">
                            <div class="container">
                              <h1>Delete {{$hspell->name}}?</h1>
                              <p>Are you sure you want to delete this homebrew spell </p>

                              <div class="clearfix">
                                    <button type="button" class="cancelbtn" onclick="document.getElementById('{{$hspell->name}}').style.display='none'">Cancel</button>
                                    <button type="button" onclick="deleteSpell('{{$hspell->name}}')" class="deletebtn" data-dismiss="modal">
                                        Delete                         
                                    </button>
                              </div>
                            </div>
                          </form>
                        </div>

                        <script>
                            // Get the modal
                            var modal = document.getElementById('{{$hspell->name}}');
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                              if (event.target == modal) {
                                modal.style.display = "none";
                              }
                            }
                        </script>
                </div>
            @endforeach
            @endif                
        </div>
@stop


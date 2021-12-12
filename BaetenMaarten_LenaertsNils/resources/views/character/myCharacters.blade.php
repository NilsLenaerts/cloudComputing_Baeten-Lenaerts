@extends('master')
@section('subtitle','Spells')
@section('content')
    <div>
        <div>
            <h2 class="font-family-draconis center">My characters</h2>

            <p class="font-family-draconis center">Email: </p>
            <p class="font-family-draconis center" id="email" value="{{ Auth::user()->email }}">{{ Auth::user()->email }}</p>

            <div  class="margin-2" id="spellform">
                <p>E-mail <input type="string" name="email" value="{{Auth::user()->email}}" id="email" disabled="disabled"/></p>
                <p>Name:  <input type="string" name="name" value="Anna" id="name"/></p>
                <p>Race:  <input type="string" name="race" value="Human" id="race"/></p>
                <p>Class:  <input type="string" name="class" value="Cleric" id="classe"/></p> 

                <p>Class level:  <input type="int" name="classlevel" value="8" id="classlevel"/></p>
                <p>Background:  <input type="string" name="background" value="Traveler" id="background"/></p>
                <p>Alignment:  <input type="string" name="alignment" value="LG" id="alignment"/></p> 
                <p>Xp:  <input type="string" name="xp" value="5200" id="xp"/></p> 


                <p>Str Score:  <input type="int" name="strscore" value="15" id="strscore"/></p>
                <p>Dex Score:  <input type="int" name="dexscore" value="9" id="dexscore"/></p>
                <p>Con Score:  <input type="int" name="conscore" value="18" id="conscore"/></p>
                <p>Int Score:  <input type="int" name="intscore" value="13" id="intscore"/></p>
                <p>Wis Score:  <input type="int" name="wisscore" value="20" id="wisscore"/></p> 
                <p>Cha Score:  <input type="int" name="chascore" value="11" id="chascore"/></p> 
            </div>
            <p><button type="button" onclick="createCharacter()" class="border-box padding-1 margin-1" ><strong>Save</strong></button> </p>
        <div>    
        <div class="tiles center">

            @if(isset($characters))
            @foreach ($characters as $char)
                <div class="inner-tile">
                    
                    <a href="showMyCharacter/{{$char->name}}">
                        <p>{{$char->name}}</p>
                    </a>
                    
                    <button onclick="document.getElementById('{{$char->name}}').style.display='block'" class="button1" > 
                        Delete
                    </button>

                    <div id="{{$char->name}}" class="modal">
                      <span onclick="document.getElementById('{{$char->name}}').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <form class="modal-content" action="/action_page.php">
                        <div class="container">
                          <h1>Delete {{$char->name}}?</h1>
                          <p>Are you sure you want to delete your character? </p>

                          <div class="clearfix">
                                <button type="button" class="cancelbtn" onclick="document.getElementById('{{$char->name}}').style.display='none'">Cancel</button>
                                <button type="button" onclick="deleteCharacter('{{$char->name}}')" class="deletebtn" data-dismiss="modal">
                                    Delete                         
                                </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                    <script>
                        // Get the modal
                        var modal = document.getElementById({{$char->name}});

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
    </div>
@stop


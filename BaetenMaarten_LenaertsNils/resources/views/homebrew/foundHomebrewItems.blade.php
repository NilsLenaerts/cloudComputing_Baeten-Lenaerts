@extends('master')
@section('subtitle','Homebrew Items')
@section('content')
    <div>
        <h2 class="font-family-draconis center">Homebrew Items</h2>
        <div id="spellform">
            <p>Name:  <input type="string" name="name" placeholder="name" id="name"/></p>
            <p>Price:  <input type="string" name="price" placeholder="price" id="price"/></p>
            <p>Description:  <input type="string" name="description" placeholder="Description" id="description"/></p> 
            <p><button type="button" onclick="saveItem()"><strong>Save</strong></button> </p>
        </div>
    </div>
    <div class="tiles center">
        @if(isset($homebrewItems))
        @foreach ($homebrewItems as $hitem)
        <div class="inner-tile">
                    <a href="showHomebrewItem/{{$hitem->name}}">
                    <p>{{$hitem->name}}</p>
                </a>
                <button onclick="document.getElementById('{{$hitem->name}}').style.display='block'" class="button1" > Delete</button>
                <div id="{{$hitem->name}}" class="modal">
                  <span onclick="document.getElementById('{{$hitem->name}}').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <form class="modal-content" action="/action_page.php">
                    <div class="container">
                      <h1>Delete {{$hitem->name}}?</h1>
                      <p>Are you sure you want to delete this homebrew item?</p>
                      <div class="clearfix">
                            <button type="button" class="cancelbtn" onclick="document.getElementById('{{$hitem->name}}').style.display='none'">Cancel</button>
                            <button type="button" onclick="deleteItem('{{$hitem->name}}')" class="deletebtn" data-dismiss="modal">
                                Delete                         
                            </button>
                      </div>
                    </div>
                  </form>
                </div>
                <script>
                    // Get the modal
                    var modal = document.getElementById('{{$hitem->name}}');
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


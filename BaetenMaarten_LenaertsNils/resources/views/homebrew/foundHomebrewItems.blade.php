@extends("master")
@section("pagina","Homebrew items")

@section("content")
    <body class="spellList">
        <div style="position:fixed; margin-bottom: 500px; margin-left: 500px">
            <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
            <p>Name:  <input type="string" name="name" value="name" id="name"/></p>
            <p>Price:  <input type="string" name="price" value="price" id="price"/></p>
            <p>Description:  <input type="string" name="description" value="Description" id="description"/></p>  
            <button type="button" onclick="saveItem()"><strong>Save</strong></button> 
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div style="margin-top: 200px; ">
            <ul class="spellList">
                @if(isset($homebrewItems))
                    @foreach ($homebrewItems as $id)
                        <li><strong><a href = "showHomebrewItem/{{$id->name}}" >{{$id->name}}</a></strong></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </body>
@stop

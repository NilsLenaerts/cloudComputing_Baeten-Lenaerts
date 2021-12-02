@extends("master")
@section("pagina","Homebrew items")

@section("content")
    <body class="spellList">
        <div style="position:fixed; margin-bottom: 500px; margin-left: 500px">
            <h2>Welcome to D&amp;D&nbsp; 5e homebrew creator</h2>
            <p>Name:  <input type="string" name="name" value="" id="name"/></p>
            <p>Price:  <input type="string" name="price" value="" id="price"/></p>
            <p>Description:  <input type="int" name="description" value="" id="description"/></p>  
            <button type="button" onclick="saveItem()"><strong>Save</strong></button> 
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div style="margin-top: 200px; ">
            <ul class="spellList">
                @if(isset($homebrewItems))
                    @foreach ($homebrewItems as $id)
                        <li><strong><a href = "shoHomebrewItem/{{$id->name}}" >{{$id->name}}</a></strong></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </body>
@stop

@extends("master")
@section("pagina","Homebrew spell creation")

@section("content")

<form action="homebrewSpell" method="post">
    @geencsrf
    Casting time <input type="String" name="casting time" value="1 action" id="castingTime"/>
   
    <br/>
    <button type="save"><strong>save</strong></button>
    <button type="button" onclick="saveHomebrewSpell()">
        <strong>zoek via fetch</strong>
    </button>
</form>
@stop
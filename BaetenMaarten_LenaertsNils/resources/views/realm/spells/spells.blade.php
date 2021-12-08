@extends('master')
@section('subtitle','Spells')
@section('content')
    <div>
        <h2 class="font-family-draconis center">5e Rules Spells</h2>
            <form action="spells" method="get" class="margin-2" id="spellform">
                <p class="margin-0 padding-1">Spells level</p>
                <input type="number" min="1" max="9" name="level" value="1" id="level" class="padding-1 margin-0"/>
                <button type="submit" class="border-box padding-1 margin-1"><strong>Search</strong></button>
            </form>
        </div>

        <div class="tiles center">
            @if(isset($spells))
            @foreach ($spells as $id)
            <div class="inner-tile">
                        <a href="showSpell/{{$id->index}}">
                        <p>{{$id->name}}</p>
                    </a>
                </div>
                    @endforeach
                @endif
        </div>
</div>
@stop


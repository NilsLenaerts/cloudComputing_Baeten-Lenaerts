@extends('master')
@section('subtitle','Spells')
@section('content')
    <div>
        <h2 class="font-family-draconis center">5e Rules Spells</h2>
            <form action="spells" method="get" class="center">
                <p>Level:  <input type="number" min="1" name="level" value="1" id="level"/>
                    <button type="submit"><strong>Filter</strong></button>
                </p>
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


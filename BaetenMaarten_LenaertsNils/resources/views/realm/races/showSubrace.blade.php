@extends("master")
@section("pagina","...")

@section("content")
<script src="{!! mix('app.js') !!}"></script>
    <h1 class="center margin-0 padding-0 font-family-draconis">{{$subrace->name}}</h1>
    <p>Description: {{$subrace->desc}}</p>
    
    <div class="display-flex">
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($subrace->ability_bonuses))
                <ul>
                @foreach($subrace->ability_bonuses as $bonuses)
                    <li> Ability score: {{$bonuses->ability_score->name}} +{{$bonuses->bonus}}</li>
                @endforeach  
                </ul>
            @endif
        </div>
        

        
        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
            @if(isset($subrace->racial_traits))
            <p class="bold">You have the following traits:</p>
            <ul>
            @foreach ($subrace->racial_traits as $trait)
                <li style="list-style-type:none">
                    <details class="details-example">
                        <summary><strong>{{$trait->name}}</strong></summary>
                        <ul class="no-bullets">       
                            <!-- display dan de desc of time -->
                            <div id="{{$trait->index}}"></div>
                            <script>getTrait("{{$trait->index}}");</script>        
                        </ul>
                    </details>
                </li>
            @endforeach
            </ul>
            @endif
        </div>
    </div>
@stop

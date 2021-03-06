@extends('master')
@section('subtitle','My Character')
@section('content')
<script src="{!! mix('app.js') !!}"></script>
<p style="font-size: 0; "id="secret" value="{{ Auth::user()->userSecret }}">{{ Auth::user()->userSecret }}</p>
    
    <button class="tablink vertical-center" onclick="openTab('cheet', this, 'red')" id="defaultOpen">Character Cheet</button>
    <button class="tablink vertical-center" onclick="openTab('spells', this, 'red')">Spell List</button>
    
    <div id="spells" class="tabcontent">
        <div class="tiles center">
            @if(isset($spells))
                @foreach ($spells as $id)
                    <div class="inner-tile">
                            <a href="/showSpell/{{$id->index}}">
                            <p>{{$id->name}}</p>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
 
    <div id="cheet" class="tabcontent">
        <p><button type="button" onclick="updateCharacter('{{Auth::user()->email}}')"><strong>Update</strong></button></p> 
        <form class="charsheet margin-2" id="cheet" onchange="updateCharacter('{{Auth::user()->email}}')">
            <header >
            <section class="charname border-box " id="">
                <label for="charname">Character Name</label> <input readonly name="charname" placeholder="Thoradin Fireforge" value="{{$character->name}}" id="name" />
            </section>
            <section class="misc" >
                <ul>
                    <li>
                        <label for="classe">Class</label><input readonly name="classe" placeholder="Paladin" value="{{$character->classe}}" id="classe" />
                    </li>
                    <li>
                      <label for="classlevel">Level</label><input name="classlevel" placeholder="2" value="{{$character->classlevel}}" id="classlevel" />
                    </li>
                    <li>
                      <label for="background">Background</label><input name="background" placeholder="Acolyte" value="{{$character->background}}" id="background"/>
                    </li>
                    <li>
                      <label for="race">Race</label><input readonly name="race" placeholder="Half-elf" value="{{$character->race}}" id="race"/>
                    </li>
                    <li>
                      <label for="alignment">Alignment</label><input name="alignment" placeholder="Lawful Good" value="{{$character->alignment}}" id="alignment"/>
                    </li>
                    <li>
                      <label for="experiencepoints">Experience Points</label><input name="experiencepoints" placeholder="3240" value="{{$character->xp}}" id="xp"/>
                    </li>
                    <li>
                      <label for="playername">Player Name</label><input readonly name="playername" placeholder="Player McPlayerface" value="{{Auth::user()->name}}" id="classe"/>
                    </li>
                </ul>
            </section>
            </header>
            <main>
            <section>
                <section class="attributes">
                    <div class="scores">
                        <ul>
                            <li>
                                <div class="score">
                                    <label for="Strengthscore">Strength</label><input name="Strengthscore" placeholder="10" class="stat" value="{{$character->score->strscore}}" id="strscore"/>
                                </div>
                                <div class="modifier">
                                    <input readonly name="Strengthmod" placeholder="+0"  value="{{$character->mod->strmod}}" class="statmod"/>
                                </div>
                            </li>
                            <li>
                                <div class="score">
                                    <label for="Dexterityscore">Dexterity</label><input name="Dexterityscore" placeholder="10" class="stat" value="{{$character->score->dexscore}}" id="dexscore"/>
                                </div>
                                <div class="modifier">
                                    <input readonly name="Dexteritymod" placeholder="+0" value="{{$character->mod->dexmod}}" class=statmod/>
                                </div>
                            </li>
                            <li>
                                <div class="score">
                                    <label for="Constitutionscore">Constitution</label><input name="Constitutionscore" placeholder="10" class="stat" value="{{$character->score->conscore}}" id="conscore"/>
                                </div>
                                <div class="modifier">
                                    <input readonly name="Constitutionmod" placeholder="+0" value="{{$character->mod->conmod}}" class="statmod"/>
                                </div>
                            </li>
                            <li>
                                <div class="score">
                                    <label for="Wisdomscore">Wisdom</label><input name="Wisdomscore" placeholder="10" class="stat" value="{{$character->score->wisscore}}" id="wisscore"/>
                                </div>
                                <div class="modifier">
                                    <input readonly name="Wisdommod" placeholder="+0" value="{{$character->mod->wismod}}" />
                                </div>
                            </li>
                            <li>
                                <div class="score">
                                    <label for="Intelligencescore">Intelligence</label><input name="Intelligencescore" placeholder="10" class="stat" value="{{$character->score->intscore}}" id="intscore"/>
                                </div>
                                <div class="modifier">
                                    <input readonly name="Intelligencemod" placeholder="+0" value="{{$character->mod->intmod}}" class="statmod"/>
                                </div>
                            </li>
                            <li>
                                <div class="score">
                                    <label for="Charismascore">Charisma</label><input name="Charismascore" placeholder="10" class="stat" value="{{$character->score->chascore}}" id="chascore"/>
                                </div>
                                <div class="modifier">
                                    <input readonly name="Charismamod" placeholder="+0" value="{{$character->mod->chamod}}" class="statmod"/>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="attr-applications">
                        <div class="proficiencybonus box">
                            <div class="label-container">
                                <label for="proficiencybonus">Proficiency Bonus</label>
                            </div>
                            <input name="proficiencybonus" placeholder="+2" value="{{$character->profbonus}}"/>
                        </div>
                        <div class="saves list-section box">
                            <ul>
                                <li>
                                    <label for="Strength-save">Strength</label><input name="Strength-save" id= "strsave" placeholder="{{$character->mod->strmod}}" type="text" value="{{$character->save->strsavebonus}}"/>
                                </li>
                                <li>
                                    <label for="Dexterity-save">Dexterity</label><input name="Dexterity-save"  id= "dexsave" placeholder="{{$character->mod->dexmod}}" type="text" value="{{$character->save->dexsavebonus}}"/>
                                </li>
                                <li>
                                    <label for="Constitution-save">Constitution</label><input name="Constitution-save"  id= "consave" placeholder="{{$character->mod->conmod}}" type="text" value="{{$character->save->consavebonus}}" />
                                </li>
                                <li>
                                    <label for="Wisdom-save">Wisdom</label><input name="Wisdom-save"  id= "wissave" placeholder="{{$character->mod->wismod}}" type="text" value="{{$character->save->wissavebonus}}"/>
                                </li>
                                <li>
                                    <label for="Intelligence-save">Intelligence</label><input name="Intelligence-save"   id= "intsave" placeholder="{{$character->mod->intmod}}" type="text"  value="{{$character->save->intsavebonus}}"/>
                                </li>
                                <li>
                                    <label for="Charisma-save">Charisma</label><input name="Charisma-save"  id= "chasave" placeholder="{{$character->mod->chamod}}" type="text" value="{{$character->save->chasavebonus}}"/>

                                </li>
                            </ul>
                            <div class="label">
                              Saving Throws
                            </div>
                        </div>
                        <div class="skills list-section box">
                            <ul>
                                <li>
                                    <label for="Acrobatics">Acrobatics <span class="skill"></span></label>
                                    <input name="Acrobatics"  type="text" id="acrobatics"  placeholder="{{$character->mod->dexmod}}" value="{{$character->skill->acrobatics}}"/>
                                </li>
                                <li>
                                    <label for="Animal Handling">Animal Handling <span class="skill"></span></label>
                                    <input name="Animal Handling"  type="text" id="animal"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->animal}}"/>
                                </li>
                                <li>
                                    <label for="Arcana">Arcana <span class="skill"></span></label>
                                    <input name="Arcana"  type="text" id="arcana"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->arcana}}"/>
                                </li>
                                <li>
                                    <label for="Athletics">Athletics <span class="skill"></span></label>
                                    <input name="Athletics"  type="text" id="athletics"  placeholder="{{$character->mod->strmod}}" value="{{$character->skill->athletics}}"/>
                                </li>
                                <li>
                                    <label for="Deception">Deception <span class="skill"></span></label>
                                    <input name="Deception"  type="text" id="deception"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->deception}}"/>
                                </li>
                                <li>
                                    <label for="History">History <span class="skill"></span></label>
                                    <input name="History" type="text" id="history"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->history}}"/>
                                </li>
                                <li>
                                    <label for="Insight">Insight <span class="skill"></span></label>
                                    <input name="Insight"  type="text" id="insight"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->insight}}"/>
                                </li>
                                <li>
                                    <label for="Intimidation">Intimidation <span class="skill"></span></label>
                                    <input name="Intimidation"  type="text" id="intimidation"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->intimidation}}"/>
                                </li>
                                <li>
                                    <label for="Investigation">Investigation <span class="skill"></span></label>
                                    <input name="Investigation"  type="text" id="investigation"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->investigation}}"/>
                                </li>
                                <li>
                                    <label for="Medicine">Medicine <span class="skill"></span></label>
                                    <input name="Medicine"  type="text" id="medicine"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->medicine}}"/>
                                </li>
                                <li>
                                    <label for="Nature">Nature <span class="skill"></span></label>
                                    <input name="Nature"  type="text" id="nature"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->nature}}"/>
                                </li>
                                <li>
                                    <label for="Perception">Perception <span class="skill"></span></label>
                                    <input name="Perception" type="text" id="perception"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->perception}}"/>
                                </li>
                                <li>
                                    <label for="Performance">Performance <span class="skill"></span></label>
                                    <input name="Performance"  type="text" id="performance"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->performance}}"/>
                                </li>
                                <li>
                                    <label for="Persuasion">Persuasion <span class="skill"></span></label>
                                    <input name="Persuasion"  type="text" id="persuasion"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->persuasion}}"/>
                                <li>
                                    <label for="Religion">Religion <span class="skill"></span></label>
                                    <input name="Religion"  type="text" id="religion"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->religion}}"/>
                                </li>
                                <li>
                                    <label for="Sleight of Hand">Sleight of Hand <span class="skill"></span></label>
                                    <input name="Sleight of Hand"  type="text" id="sleight"  placeholder="{{$character->mod->dexmod}}" value="{{$character->skill->sleight}}"/>
                                </li>
                                <li>
                                    <label for="Stealth">Stealth <span class="skill"></span></label>
                                    <input name="Stealth" type="text" id="stealth"  placeholder="{{$character->mod->dexmod}}" value="{{$character->skill->stealth}}"/>
                                </li>
                                <li>
                                    <label for="Survival">Survival <span class="skill"></span></label>
                                    <input name="Survival"  type="text" id="survival"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->survival}}"/>
                                </li>
                            </ul>
                            <div class="label">
                              Skills
                            </div>
                        </div>
                    </div>
                </section>
                <div class="passive-perception box">
                    <div class="label-container">
                        <label for="passiveperception">Passive Wisdom (Perception)</label>
                    </div>
                    <input name="passiveperception" placeholder="10" id="pap" value="{{$character->pap}}" />
                </div>
                <div class="otherprofs box textblock">
                    <label for="otherprofs">Other Proficiencies and Languages</label>
                    <textarea name="otherprofs" id="otherprofs">
                        {{$character->otherprofs}}
                    </textarea>
                </div>
            </section>
            <section>
                <section class="combat">
                    <div class="armorclass">
                        <div>
                          <label for="ac">Armor Class</label><input name="ac" placeholder="10" id="ac" value="{{$character->ac}}" type="text" />
                        </div>
                    </div>
                    <div class="initiative">
                        <div>
                          <label for="initiative">Initiative</label><input name="initiative" placeholder="+0" value="{{$character->mod->dexmod}}"type="text" />
                        </div>
                    </div>
                    <div class="speed">
                        <div>
                          <label for="speed">Speed</label><input name="speed" placeholder="30" id="speed" value="{{$character->speed}}" type="text" />
                        </div>
                    </div>
                    <div class="hp">
                        <div class="regular">
                            <div class="max">
                                <label for="maxhp">Hit Point Maximum</label><input name="maxhp" placeholder="10" id="maxhp" value="{{$character->hp->maxhp}}" type="text" />
                            </div>
                            <div class="current">
                                <label for="currenthp">Current Hit Points</label><input name="currenthp" id="currenthp" value="{{$character->hp->currenthp}}" type="text" />
                            </div>
                        </div>
                        <div class="temporary">
                            <label for="temphp">Temporary Hit Points</label><input name="temphp" id="temphp" value="{{$character->hp->temphp}}" type="text" />
                        </div>
                    </div>
                    <div class="hitdice">
                        <div>
                            <div class="total">
                                <label onclick="totalhd_clicked()" for="totalhd">Total</label>
                                <input name="totalhd" placeholder="2d10" type="text" value="{{$character->classlevel}}d{{$classe->hit_die}}"/>
                            </div>
                            <div class="remaining">
                                <label for="remaininghd">Hit Dice</label>
                                <input name="remaininghd" id="remaininghd" type="text" placeholder="{{$character->classlevel}}d{{$classe->hit_die}}" value="{{$character->hp->remaininghd}}"/>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="attacksandspellcasting">
                    <div>
                        <label>Attacks & Spellcasting</label>
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Atk Bonus
                                    </th>
                                    <th>
                                      Damage/Type
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input name="atkname1" type="text" id="atkname1" value="{{$character->combat->atkname1}}"/>
                                    </td>
                                    <td>
                                        <input name="atkbonus1" type="text" id="atkbonus1" value="{{$character->combat->atkname1}}"/>
                                    </td>
                                    <td>
                                        <input name="atkdamage1" type="text" id="atkdamage1" value="{{$character->combat->atkname1}}"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="atkname2" type="text" id="atkname2" value="{{$character->combat->atkname2}}"/>
                                    </td>
                                    <td>
                                        <input name="atkbonus2" type="text" id="atkbonus2" value="{{$character->combat->atkname2}}"/>
                                    </td>
                                    <td>
                                        <input name="atkdamage2" type="text" id="atkdamage2" value="{{$character->combat->atkname2}}"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="atkname3" type="text" id="atkname3" value="{{$character->combat->atkname3}}"/>
                                    </td>
                                    <td>
                                        <input name="atkbonus3" type="text" id="atkbonus3" value="{{$character->combat->atkname3}}"/>
                                    </td>
                                    <td>
                                        <input name="atkdamage3" type="text" id="atkdamage3" value="{{$character->combat->atkname3}}"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <textarea id="textareacombat">{{$character->combat->textareacombat}} </textarea>
                    </div>
                </section>
                <section class="equipment">
                    <div>
                        <label>Equipment</label>
                        <div class="money">
                            <ul>
                                <li>
                                    <label for="cp">cp</label><input name="cp" id="cp" value="{{$character->money->cp}}"/>
                                </li>
                                <li>
                                    <label for="sp">sp</label><input name="sp" id="sp" value="{{$character->money->sp}}"/>
                                </li>
                                <li>
                                    <label for="ep">ep</label><input name="ep" id="ep" value="{{$character->money->ep}}"/>
                                </li>
                                <li>
                                    <label for="gp">gp</label><input name="gp" id="gp" value="{{$character->money->gp}}"/>
                                </li>
                                <li>
                                    <label for="pp">pp</label><input name="pp" id="pp" value="{{$character->money->pp}}"/>
                                </li>
                            </ul>
                        </div>
                        <textarea placeholder="Equipment list here" id="equipment">{{$character->equipment}}</textarea>
                    </div>
                </section>
            </section>
            <section>
                <section class="flavor">
                    <div class="personality">
                        <label for="personality">Personality</label><textarea name="personality" id="personality">{{$character->flavor->personality}}</textarea>
                    </div>
                    <div class="ideals">
                        <label for="ideals">Ideals</label><textarea name="ideals" id="ideals">{{$character->flavor->ideals}}</textarea>
                    </div>
                    <div class="bonds">
                          <label for="bonds">Bonds</label><textarea name="bonds" id="bonds">{{$character->flavor->bonds}}</textarea>
                    </div>
                    <div class="flaws">
                          <label for="flaws">Flaws</label><textarea name="flaws" id="flaws">{{$character->flavor->flaws}}</textarea>
                    </div>
                </section>
                <section class="features">
                    <div>
                        <label for="features">Features & Traits</label>
                        <textarea name="features" id="features">{{$character->features}}</textarea>
                        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top text-left font-size-90">
                            <ul class="font-size-90">
                            @foreach ($race->traits as $trait)
                                <li style="list-style-type:none" class="font-size-90">
                                    <details class="details-example font-size-90">
                                        <summary class="font-size-90">{{$trait->name}}</summary>
                                        <ul class="no-bullets font-size-90">       
                                            <div class="font-size-90" id="{{$trait->index}}"></div>
                                            <script class="font-size-90" >getTrait("{{$trait->index}}");</script>      
                                        </ul>
                                    </details>
                                </li>
                            @endforeach
                            </ul>
                        </div>

                        <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-20 text-left font-size-90">
                            <ul  class="font-size-90">
                            @foreach($classlevelfeatures as $classlevel)
                                @if($classlevel->level <= $character->classlevel)
                                <li style="list-style-type:none"  class="font-size-90">
                                    <details class="details-example font-size-90">
                                        <summary  class="font-size-90"><strong>{{$classlevel->level}}</strong></summary>
                                        <ul class="no-bullets font-size-90">       
                                            @if(isset($classlevel->features))
                                                @foreach($classlevel->features as $feature)
                                                <details class="details-example font-size-90">
                                                    <summary  class="font-size-90"><strong>{{$feature->name}}</strong></summary>
                                                    <ul class="no-bullets font-size-90"> 
                                                        <div id="{{$feature->index}}"></div>
                                                        <script>getFeatures("{{$feature->index}}");</script>     
                                                    </ul>
                                                </details>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </details>
                                </li>
                                @endif
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
          </main>
        </form>
    </div>
@stop


@extends('master')
@section('subtitle','')
@section('content')
    <div>
        <p><button type="button" onclick="updateCharacter('{{Auth::user()->email}}')"><strong>Update</strong></button></p> 
        <form class="charsheet margin-2" >
            <header >
            <section class="charname border-box " id="">
              <label for="charname">Character Name</label> <input readonly name="charname" placeholder="Thoradin Fireforge" value="{{$character->name}}" id="name" />
            </section>
            <section class="misc" >
              <ul>
                <li>
                  <label for="classlevel">Class & Level</label><input name="classlevel" placeholder="Paladin 2" value="{{$character->classe}}: {{$character->classlevel}}" id="classlevel" />
                </li>
                <li>
                  <label for="background">Background</label><input name="background" placeholder="Acolyte" value="{{$character->background}}" id="background"/>
                </li>
                <li>
                  <label for="playername">Player Name</label><input name="playername" placeholder="Player McPlayerface" value="{{Auth::user()->name}}" id="classe"/>
                </li>
                <li>
                  <label for="race">Race</label><input name="race" placeholder="Half-elf" value="{{$character->race}}" id="race"/>
                </li>
                <li>
                  <label for="alignment">Alignment</label><input name="alignment" placeholder="Lawful Good" value="{{$character->alignment}}" id="alignment"/>
                </li>
                <li>
                  <label for="experiencepoints">Experience Points</label><input name="experiencepoints" placeholder="3240" value="{{$character->xp}}" id="xp"/>
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
                        <input name="Strengthmod" placeholder="+0"  value="{{$character->mod->strmod}}" class="statmod"/>
                      </div>
                    </li>
                    <li>
                      <div class="score">
                        <label for="Dexterityscore">Dexterity</label><input name="Dexterityscore" placeholder="10" class="stat" value="{{$character->score->dexscore}}" id="dexscore"/>
                      </div>
                      <div class="modifier">
                        <input name="Dexteritymod" placeholder="+0" value="{{$character->mod->dexmod}}" class=statmod/>
                      </div>
                    </li>
                    <li>
                      <div class="score">
                        <label for="Constitutionscore">Constitution</label><input name="Constitutionscore" placeholder="10" class="stat" value="{{$character->score->conscore}}" id="conscore"/>
                      </div>
                      <div class="modifier">
                        <input name="Constitutionmod" placeholder="+0" value="{{$character->mod->conmod}}" class="statmod"/>
                      </div>
                    </li>
                    <li>
                      <div class="score">
                        <label for="Wisdomscore">Wisdom</label><input name="Wisdomscore" placeholder="10" class="stat" value="{{$character->score->wisscore}}" id="wisscore"/>
                      </div>
                      <div class="modifier">
                        <input name="Wisdommod" placeholder="+0" value="{{$character->mod->wismod}}" />
                      </div>
                    </li>
                    <li>
                      <div class="score">
                        <label for="Intelligencescore">Intelligence</label><input name="Intelligencescore" placeholder="10" class="stat" value="{{$character->score->intscore}}" id="intscore"/>
                      </div>
                      <div class="modifier">
                        <input name="Intelligencemod" placeholder="+0" value="{{$character->mod->intmod}}" class="statmod"/>
                      </div>
                    </li>
                    <li>
                      <div class="score">
                        <label for="Charismascore">Charisma</label><input name="Charismascore" placeholder="10" class="stat" value="{{$character->score->chascore}}" id="chascore"/>
                      </div>
                      <div class="modifier">
                        <input name="Charismamod" placeholder="+0" value="{{$character->mod->chamod}}" class="statmod"/>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="attr-applications">
                  <div class="inspiration box">
                    <div class="label-container">
                      <label for="inspiration">Inspiration</label>
                    </div>
                    <input name="inspiration" type="checkbox" />
                  </div>
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
                            <input name="Strength-save-prof"  type="checkbox"  id="strengthsaveprof" checked="{{$character->saveproficient->strsaveprofcient}}"/>
                      </li>
                      <li>
                        <label for="Dexterity-save">Dexterity</label><input name="Dexterity-save"  id= "dexsave" placeholder="{{$character->mod->dexmod}}" type="text" value="{{$character->save->dexsavebonus}}"/>
                            <input name="Dexterity-save-prof" type="checkbox" id="dexteritysaveprof" checked="{{$character->saveproficient->dexsaveprofcient}}"/>
                      </li>
                      <li>
                        <label for="Constitution-save">Constitution</label><input name="Constitution-save"  id= "consave" placeholder="{{$character->mod->conmod}}" type="text" value="{{$character->save->consavebonus}}" />
                            <input name="Constitution-save-prof" type="checkbox" id="constitutionsaveprof" checked="{{$character->saveproficient->consaveprofcient}}"/>
                      </li>
                      <li>
                        <label for="Wisdom-save">Wisdom</label><input name="Wisdom-save"  id= "wissave" placeholder="{{$character->mod->wismod}}" type="text" value="{{$character->save->wissavebonus}}"/>
                            <input name="Wisdom-save-prof" type="checkbox" id="wisdomsaveprof" checked="{{$character->saveproficient->wissaveprofcient}}"/>
                      </li>
                      <li>
                        <label for="Intelligence-save">Intelligence</label><input name="Intelligence-save"   id= "intsave" placeholder="{{$character->mod->intmod}}" type="text"  value="{{$character->save->intsavebonus}}"/>
                            <input name="Intelligence-save-prof" type="checkbox" id="intelligencesaveprof" checked="{{$character->saveproficient->intsaveprofcient}}"/>
                      </li>
                      <li>
                        <label for="Charisma-save">Charisma</label><input name="Charisma-save"  id= "chasave" placeholder="{{$character->mod->chamod}}" type="text" value="{{$character->save->chasavebonus}}"/>
                            <input name="Charisma-save-prof" type="checkbox" id="charismasaveprof" checked="{{$character->saveproficient->chasaveprofcient}}"/>
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
                        <input name="Acrobatics"  type="text" id="acrobatics"  placeholder="{{$character->mod->dexmod}}" value="{{$character->skill->acrobatics}}"/><input name="Acrobatics-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Animal Handling">Animal Handling <span class="skill"></span></label>
                        <input name="Animal Handling"  type="text" id="animal"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->animal}}"/><input name="Animal Handling-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Arcana">Arcana <span class="skill"></span></label>
                        <input name="Arcana"  type="text" id="arcana"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->arcana}}"/><input name="Arcana-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Athletics">Athletics <span class="skill"></span></label>
                        <input name="Athletics"  type="text" id="athletics"  placeholder="{{$character->mod->strmod}}" value="{{$character->skill->athletics}}"/><input name="Athletics-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Deception">Deception <span class="skill"></span></label>
                        <input name="Deception"  type="text" id="deception"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->deception}}"/><input name="Deception-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="History">History <span class="skill"></span></label>
                        <input name="History" type="text" id="history"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->history}}"/><input name="History-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Insight">Insight <span class="skill"></span></label>
                        <input name="Insight"  type="text" id="insight"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->insight}}"/><input name="Insight-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Intimidation">Intimidation <span class="skill"></span></label>
                        <input name="Intimidation"  type="text" id="intimidation"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->intimidation}}"/><input name="Intimidation-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Investigation">Investigation <span class="skill"></span></label>
                        <input name="Investigation"  type="text" id="investigation"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->investigation}}"/><input name="Investigation-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Medicine">Medicine <span class="skill"></span></label>
                        <input name="Medicine"  type="text" id="medicine"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->medicine}}"/><input name="Medicine-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Nature">Nature <span class="skill"></span></label>
                        <input name="Nature"  type="text" id="nature"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->nature}}"/><input name="Nature-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Perception">Perception <span class="skill"></span></label>
                        <input name="Perception" type="text" id="perception"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->perception}}"/><input name="Perception-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Performance">Performance <span class="skill"></span></label>
                        <input name="Performance"  type="text" id="performance"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->performance}}"/><input name="Performance-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Persuasion">Persuasion <span class="skill"></span></label>
                        <input name="Persuasion"  type="text" id="persuasion"  placeholder="{{$character->mod->chamod}}" value="{{$character->skill->persuasion}}"/><input name="Persuasion-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Religion">Religion <span class="skill"></span></label>
                        <input name="Religion"  type="text" id="religion"  placeholder="{{$character->mod->intmod}}" value="{{$character->skill->religion}}"/><input name="Religion-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Sleight of Hand">Sleight of Hand <span class="skill"></span></label>
                        <input name="Sleight of Hand"  type="text" id="sleight"  placeholder="{{$character->mod->dexmod}}" value="{{$character->skill->sleight}}"/><input name="Sleight of Hand-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Stealth">Stealth <span class="skill"></span></label>
                        <input name="Stealth" type="text" id="stealth"  placeholder="{{$character->mod->dexmod}}" value="{{$character->skill->stealth}}"/><input name="Stealth-prof" type="checkbox" />
                      </li>
                      <li>
                        <label for="Survival">Survival <span class="skill"></span></label>
                        <input name="Survival"  type="text" id="survival"  placeholder="{{$character->mod->wismod}}" value="{{$character->skill->survival}}"/><input name="Survival-prof" type="checkbox" />
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
                <input name="passiveperception" placeholder="10" id="pp" value="{{$character->pp}}" />
              </div>
              <div class="otherprofs box textblock">
                <label for="otherprofs">Other Proficiencies and Languages</label>
                <textarea name="otherprofs" id="otherprof" value="{{$character->otherprof}}">
                    @if(isset($race->languages))
                            @foreach($race->languages as $language)
                                Language: {{$language->name}}
                            @endforeach  
                    @endif

                    @if(isset($race->starting_proficiencies))
                        @foreach($race->starting_proficiencies as $profs)
                            Weapons: {{$profs->name}}
                        @endforeach  
                    @endif
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
                      <label onclick="totalhd_clicked()" for="totalhd">Total</label><input name="totalhd" placeholder="2d10" type="text" />
                    </div>
                    <div class="remaining">
                      <label for="remaininghd">Hit Dice</label><input name="remaininghd" type="text" />
                    </div>
                  </div>
                </div>
                <div class="deathsaves">
                  <div>
                    <div class="label">
                      <label>Death Saves</label>
                    </div>
                    <div class="marks">
                      <div class="deathsuccesses">
                        <label>Successes</label>
                        <div class="bubbles">
                          <input name="deathsuccess1" type="checkbox" />
                          <input name="deathsuccess2" type="checkbox" />
                          <input name="deathsuccess3" type="checkbox" />
                        </div>
                      </div>
                      <div class="deathfails">
                        <label>Failures</label>
                        <div class="bubbles">
                          <input name="deathfail1" type="checkbox" />
                          <input name="deathfail2" type="checkbox" />
                          <input name="deathfail3" type="checkbox" />
                        </div>
                      </div>
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
                          <input name="atkname1" type="text" />
                        </td>
                        <td>
                          <input name="atkbonus1" type="text" />
                        </td>
                        <td>
                          <input name="atkdamage1" type="text" />
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input name="atkname2" type="text" />
                        </td>
                        <td>
                          <input name="atkbonus2" type="text" />
                        </td>
                        <td>
                          <input name="atkdamage2" type="text" />
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input name="atkname3" type="text" />
                        </td>
                        <td>
                          <input name="atkbonus3" type="text" />
                        </td>
                        <td>
                          <input name="atkdamage3" type="text" />
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <textarea></textarea>
                </div>
              </section>
              <section class="equipment">
                <div>
                  <label>Equipment</label>
                  <div class="money">
                    <ul>
                      <li>
                        <label for="cp">cp</label><input name="cp" />
                      </li>
                      <li>
                        <label for="sp">sp</label><input name="sp" />
                      </li>
                      <li>
                        <label for="ep">ep</label><input name="ep" />
                      </li>
                      <li>
                        <label for="gp">gp</label><input name="gp" />
                      </li>
                      <li>
                        <label for="pp">pp</label><input name="pp" />
                      </li>
                    </ul>
                  </div>
                  <textarea placeholder="Equipment list here"></textarea>
                </div>
              </section>
            </section>
            <section>
              <section class="flavor">
                <div class="personality">
                  <label for="personality">Personality</label><textarea name="personality"></textarea>
                </div>
                <div class="ideals">
                  <label for="ideals">Ideals</label><textarea name="ideals"></textarea>
                </div>
                <div class="bonds">
                  <label for="bonds">Bonds</label><textarea name="bonds"></textarea>
                </div>
                <div class="flaws">
                  <label for="flaws">Flaws</label><textarea name="flaws"></textarea>
                </div>
              </section>
              <section class="features">
                <div>
                  <label for="features">Features & Traits</label>
                  <textarea name="features"></textarea>
                    <div class="margin-1 padding-1 light-background-color display-inline-block flex-basis-45 vertical-align-top">
                      <ul>
                      @foreach ($race->traits as $trait)
                          <li style="list-style-type:none">
                              <details class="details-example">
                                  <summary>{{$trait->name}}</summary>
                                  <ul class="no-bullets">       
                                      <div id="{{$trait->index}}"></div>
                                      <script>getTrait("{{$trait->index}}");</script>      
                                  </ul>
                              </details>
                          </li>
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


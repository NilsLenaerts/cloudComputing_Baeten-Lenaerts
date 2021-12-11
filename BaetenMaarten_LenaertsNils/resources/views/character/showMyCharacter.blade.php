@extends('master')
@section('subtitle','')
@section('content')

    <h1 class="font-family-draconis center">{{$character->name}}</h1>
    <h2 class="font-family-draconis center">{{$character->race}}  {{$character->classe}}</h2>

    <form class="charsheet">
        <header>
        <section class="charname">
          <label for="charname">Character Name</label> <input name="charname" placeholder="Thoradin Fireforge" value="{{$character->name}}" id="name" />
        </section>
        <section class="misc">
          <ul>
            <li>
              <label for="classlevel">Class & Level</label><input name="classlevel" placeholder="Paladin 2" value="{{$character->classlevel}}" id="classlevel" />
            </li>
            <li>
              <label for="background">Background</label><input name="background" placeholder="Acolyte" value="{{$character->background}}" id="background"/>
            </li>
            <li>
              <label for="playername">Player Name</label><input name="playername" placeholder="Player McPlayerface" value="{{$character->classe}}" id="classe"/>
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
                <p><button type="button" onclick="updateCharacter()"><strong>Update</strong></button> </p>
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
                    <input name="Strengthmod" placeholder="+0" class="statmod"/>
                  </div>
                </li>
                <li>
                  <div class="score">
                    <label for="Dexterityscore">Dexterity</label><input name="Dexterityscore" placeholder="10" class="stat" value="{{$character->score->dexscore}}" id="dexscore"/>
                  </div>
                  <div class="modifier">
                    <input name="Dexteritymod" placeholder="+0" class=statmod/>
                  </div>
                </li>
                <li>
                  <div class="score">
                    <label for="Constitutionscore">Constitution</label><input name="Constitutionscore" placeholder="10" class="stat" value="{{$character->score->conscore}}" id="conscore"/>
                  </div>
                  <div class="modifier">
                    <input name="Constitutionmod" placeholder="+0" class="statmod"/>
                  </div>
                </li>
                <li>
                  <div class="score">
                    <label for="Wisdomscore">Wisdom</label><input name="Wisdomscore" placeholder="10" class="stat" value="{{$character->score->wisscore}}" id="wisscore"/>
                  </div>
                  <div class="modifier">
                    <input name="Wisdommod" placeholder="+0" />
                  </div>
                </li>
                <li>
                  <div class="score">
                    <label for="Intelligencescore">Intelligence</label><input name="Intelligencescore" placeholder="10" class="stat" value="{{$character->score->intscore}}" id="intscore"/>
                  </div>
                  <div class="modifier">
                    <input name="Intelligencemod" placeholder="+0" class="statmod"/>
                  </div>
                </li>
                <li>
                  <div class="score">
                    <label for="Charismascore">Charisma</label><input name="Charismascore" placeholder="10" class="stat" value="{{$character->score->chascore}}" id="chascore"/>
                  </div>
                  <div class="modifier">
                    <input name="Charismamod" placeholder="+0" class="statmod"/>
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
                <input name="proficiencybonus" placeholder="+2" />
              </div>
              <div class="saves list-section box">
                <ul>
                  <li>
                    <label for="Strength-save">Strength</label><input name="Strength-save" placeholder="+0" type="text" /><input name="Strength-save-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Dexterity-save">Dexterity</label><input name="Dexterity-save" placeholder="+0" type="text" /><input name="Dexterity-save-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Constitution-save">Constitution</label><input name="Constitution-save" placeholder="+0" type="text" /><input name="Constitution-save-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Wisdom-save">Wisdom</label><input name="Wisdom-save" placeholder="+0" type="text" /><input name="Wisdom-save-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Intelligence-save">Intelligence</label><input name="Intelligence-save" placeholder="+0" type="text" /><input name="Intelligence-save-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Charisma-save">Charisma</label><input name="Charisma-save" placeholder="+0" type="text" /><input name="Charisma-save-prof" type="checkbox" />
                  </li>
                </ul>
                <div class="label">
                  Saving Throws
                </div>
              </div>
              <div class="skills list-section box">
                <ul>
                  <li>
                    <label for="Acrobatics">Acrobatics <span class="skill">(Dex)</span></label><input name="Acrobatics" placeholder="+0" type="text" /><input name="Acrobatics-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Animal Handling">Animal Handling <span class="skill">(Wis)</span></label><input name="Animal Handling" placeholder="+0" type="text" /><input name="Animal Handling-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Arcana">Arcana <span class="skill">(Int)</span></label><input name="Arcana" placeholder="+0" type="text" /><input name="Arcana-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Athletics">Athletics <span class="skill">(Str)</span></label><input name="Athletics" placeholder="+0" type="text" /><input name="Athletics-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Deception">Deception <span class="skill">(Cha)</span></label><input name="Deception" placeholder="+0" type="text" /><input name="Deception-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="History">History <span class="skill">(Int)</span></label><input name="History" placeholder="+0" type="text" /><input name="History-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Insight">Insight <span class="skill">(Wis)</span></label><input name="Insight" placeholder="+0" type="text" /><input name="Insight-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Intimidation">Intimidation <span class="skill">(Cha)</span></label><input name="Intimidation" placeholder="+0" type="text" /><input name="Intimidation-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Investigation">Investigation <span class="skill">(Int)</span></label><input name="Investigation" placeholder="+0" type="text" /><input name="Investigation-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Medicine">Medicine <span class="skill">(Wis)</span></label><input name="Medicine" placeholder="+0" type="text" /><input name="Medicine-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Nature">Nature <span class="skill">(Int)</span></label><input name="Nature" placeholder="+0" type="text" /><input name="Nature-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Perception">Perception <span class="skill">(Wis)</span></label><input name="Perception" placeholder="+0" type="text" /><input name="Perception-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Performance">Performance <span class="skill">(Cha)</span></label><input name="Performance" placeholder="+0" type="text" /><input name="Performance-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Persuasion">Persuasion <span class="skill">(Cha)</span></label><input name="Persuasion" placeholder="+0" type="text" /><input name="Persuasion-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Religion">Religion <span class="skill">(Int)</span></label><input name="Religion" placeholder="+0" type="text" /><input name="Religion-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Sleight of Hand">Sleight of Hand <span class="skill">(Dex)</span></label><input name="Sleight of Hand" placeholder="+0" type="text" /><input name="Sleight of Hand-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Stealth">Stealth <span class="skill">(Dex)</span></label><input name="Stealth" placeholder="+0" type="text" /><input name="Stealth-prof" type="checkbox" />
                  </li>
                  <li>
                    <label for="Survival">Survival <span class="skill">(Wis)</span></label><input name="Survival" placeholder="+0" type="text" /><input name="Survival-prof" type="checkbox" />
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
            <input name="passiveperception" placeholder="10" />
          </div>
          <div class="otherprofs box textblock">
            <label for="otherprofs">Other Proficiencies and Languages</label><textarea name="otherprofs"></textarea>
          </div>
        </section>
        <section>
          <section class="combat">
            <div class="armorclass">
              <div>
                <label for="ac">Armor Class</label><input name="ac" placeholder="10" type="text" />
              </div>
            </div>
            <div class="initiative">
              <div>
                <label for="initiative">Initiative</label><input name="initiative" placeholder="+0" type="text" />
              </div>
            </div>
            <div class="speed">
              <div>
                <label for="speed">Speed</label><input name="speed" placeholder="30" type="text" />
              </div>
            </div>
            <div class="hp">
              <div class="regular">
                <div class="max">
                  <label for="maxhp">Hit Point Maximum</label><input name="maxhp" placeholder="10" type="text" />
                </div>
                <div class="current">
                  <label for="currenthp">Current Hit Points</label><input name="currenthp" type="text" />
                </div>
              </div>
              <div class="temporary">
                <label for="temphp">Temporary Hit Points</label><input name="temphp" type="text" />
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
              <label for="features">Features & Traits</label><textarea name="features"></textarea>
            </div>
          </section>
        </section>
      </main>
    </form>

@stop


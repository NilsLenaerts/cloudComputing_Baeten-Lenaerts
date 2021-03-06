/* global Auth */


/*
 * Creates a character, saves it on the character's api (firebase) database
 */
function createCharacter(){
    var email = document.getElementById("email").innerHTML;
    var secret = document.getElementById("secret").innerHTML;
    //console.log(email);
    var name = document.getElementById("name").value;
    if (name == ""){
        alert("Choosa a Unique name, ")
        name = "Kaelor";
    }

    //var name20 = decodeURI(name);
    var race = document.getElementById("race").value;
    var classe = document.getElementById("classe").value;
    
    var classlevel = document.getElementById("classlevel").value;
    if(classlevel == ""){
        alert("Choosa a level ")
        classlevel = 1;
    }
    var background = document.getElementById("background").value;
    var alignment = document.getElementById("alignment").value;
    var xp = document.getElementById("xp").value;
    
    var strscore = document.getElementById("strscore").value;
    var dexscore = document.getElementById("dexscore").value;
    var conscore = document.getElementById("conscore").value;
    var intscore = document.getElementById("intscore").value;
    var wisscore = document.getElementById("wisscore").value;
    var chascore = document.getElementById("chascore").value;

    var strmod = scoreToMod(strscore);
    var dexmod = scoreToMod(dexscore);
    var conmod = scoreToMod(conscore);
    var intmod = scoreToMod(intscore);
    var wismod = scoreToMod(wisscore);
    var chamod = scoreToMod(chascore);
    
    var profbonus = levelToProf(classlevel);
        
    let content = {
        "email":email,
        "secret":secret,
        "name": name, 
        "race": race, 
        "classe": classe,
        "classlevel":classlevel,
        "background":background,
        "alignment":alignment,
        "xp":xp,

        'strscore':strscore,
        'dexscore':dexscore,
        'conscore':conscore,
        'intscore':intscore,
        'wisscore':wisscore,
        'chascore':chascore,
        
        'strmod':strmod,
        'dexmod':dexmod,
        'intmod':intmod,
        'conmod':conmod,
        'wismod':wismod,
        'chamod':chamod,
        
        'profbonus':profbonus,


    };
    console.log(content);
    url = "http://127.0.0.1:5000/api/createCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(alert("Noice"))
            .then(location.reload());
            /*.catch(err => alert(err))*/;
}

/*
 * 
 * @param {string} name
 */
function deleteCharacter(name){
    //console.log(name)
    var email = document.getElementById("email").innerHTML;
    var secret = document.getElementById("secret").innerHTML;

    let content = {
        "email": email,
        "name": name, 
        "secret":secret
    }
    url = "http://127.0.0.1:5000/api/deleteCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(location.reload());
}


/*
 * 
 * @param {string} email
 */
function updateCharacter(email){
    var name = document.getElementById("name").value;
    var race = document.getElementById("race").value;
    var classe = document.getElementById("classe").value;
    
    var classlevel = document.getElementById("classlevel").value;
    var background = document.getElementById("background").value;
    var alignment = document.getElementById("alignment").value;
    var xp = document.getElementById("xp").value;
    
    var strscore = document.getElementById("strscore").value;
    var dexscore = document.getElementById("dexscore").value;
    var conscore = document.getElementById("conscore").value;
    var intscore = document.getElementById("intscore").value;
    var wisscore = document.getElementById("wisscore").value;
    var chascore = document.getElementById("chascore").value;
    
    var strmod = scoreToMod(strscore);
    var dexmod = scoreToMod(dexscore);
    var conmod = scoreToMod(conscore);
    var intmod = scoreToMod(intscore);
    var wismod = scoreToMod(wisscore);
    var chamod = scoreToMod(chascore);

    var strsavebonus = document.getElementById("strsave").value;
    var dexsavebonus = document.getElementById("dexsave").value;
    var consavebonus = document.getElementById("consave").value;
    var wissavebonus = document.getElementById("wissave").value;
    var intsavebonus = document.getElementById("intsave").value;
    var chasavebonus = document.getElementById("chasave").value;
       
    var acrobatics = document.getElementById("acrobatics").value;
    var animal = document.getElementById("animal").value;
    var arcana = document.getElementById("arcana").value;
    var athletics= document.getElementById("athletics").value;
    var deception= document.getElementById("deception").value;
    var history= document.getElementById("history").value;
    var insight= document.getElementById("strsave").value;
    var intimidation= document.getElementById("intimidation").value;
    var investigation= document.getElementById("investigation").value;
    var medicine= document.getElementById("medicine").value;
    var nature= document.getElementById("nature").value;
    var perception= document.getElementById("perception").value;
    var performance= document.getElementById("performance").value;
    var persuasion= document.getElementById("persuasion").value;
    var religion= document.getElementById("religion").value;
    var sleight= document.getElementById("sleight").value;
    var stealth= document.getElementById("stealth").value;
    var survival= document.getElementById("survival").value;
    
    var ac=document.getElementById("ac").value;
    var pap=document.getElementById("pap").value;
    var speed=document.getElementById("speed").value;
    
    var maxhp=document.getElementById("maxhp").value;
    var currenthp=document.getElementById("currenthp").value;
    var temphp=document.getElementById("temphp").value;
    var remaininghd = document.getElementById("remaininghd").value;
    
    var otherprofs = document.getElementById("otherprofs").value;
    console.log(otherprofs);
    
    var atkname1 = document.getElementById("atkname1").value;
    var atkbonus1 = document.getElementById("atkbonus1").value;
    var atkdamage1 = document.getElementById("atkdamage1").value;
    
    var atkname2 = document.getElementById("atkname2").value;
    var atkbonus2 = document.getElementById("atkbonus2").value;
    var atkdamage2 = document.getElementById("atkdamage2").value;
    
    var atkname3 = document.getElementById("atkname3").value;
    var atkbonus3 = document.getElementById("atkbonus3").value;
    var atkdamage3 = document.getElementById("atkdamage3").value;
    
    var textareacombat=document.getElementById("textareacombat").value;

    var cp=document.getElementById("cp").value;
    var sp=document.getElementById("sp").value;
    var ep=document.getElementById("ep").value;  
    var gp=document.getElementById("gp").value;
    var pp=document.getElementById("pp").value;
    
    var equipment=document.getElementById("equipment").value;
    
    var personality=document.getElementById("personality").value;
    var ideals=document.getElementById("ideals").value;
    var bonds =document.getElementById("bonds").value;
    var flaws =document.getElementById("flaws").value;
    
    var features=document.getElementById("features").value;

    var secret = document.getElementById("secret").innerHTML;

    
    let content = {
        "email":email,
        "secret":secret,
        "name": name, 
        "race": race, 
        "classe": classe,
        "classlevel":classlevel,
        "background":background,
        "alignment":alignment,
        "xp":xp,
        
        'strscore':strscore,
        'dexscore':dexscore,
        'conscore':conscore,
        'intscore':intscore,
        'wisscore':wisscore,
        'chascore':chascore,
        
        'strmod':strmod,
        'dexmod':dexmod,
        'intmod':intmod,
        'conmod':conmod,
        'wismod':wismod,
        'chamod':chamod,
        
        'strsavebonus':strsavebonus,
        'dexsavebonus':dexsavebonus,
        'consavebonus':consavebonus,
        'wissavebonus':wissavebonus,
        'intsavebonus':intsavebonus,
        'chasavebonus':chasavebonus,
        
        'acrobatics':acrobatics,
        'animal':animal,
        'arcana':arcana,
        'athletics':athletics,
        'deception':deception,
        'history':history,
        'insight':insight,
        'intimidation':intimidation,
        'investigation':investigation,
        'medicine':medicine,
        'nature':nature,
        'perception':perception,
        'performance':performance,
        'persuasion':persuasion,
        'religion':religion,
        'sleight':sleight,
        'stealth':stealth,
        'survival':survival,
        
        'otherprofs':otherprofs,
        
        'ac':ac,
        'pap':pap,
        'speed':speed,
        
        'maxhp':maxhp,
        'currenthp':currenthp,
        'temphp':temphp,
        'remaininghd':remaininghd,
        
        'atkname1':atkname1,
        'atkbonus1':atkbonus1,
        'atkdamage1':atkdamage1,
        'atkname2':atkname2,
        'atkbonus2':atkbonus2,
        'atkdamage2':atkdamage2,
        'atkname3':atkname3,
        'atkbonus3':atkbonus3,
        'atkdamage3':atkdamage3,
        'textareacombat':textareacombat,
        
        'cp':cp,
        'sp':sp,
        'ep':ep,
        'gp':gp,
        'pp':pp,
        
        'equipment':equipment,
        
        'personality':personality,
        'ideals':ideals,
        'bonds':bonds,
        'flaws':flaws,
        
        'features':features,
        
    };
    url = "http://127.0.0.1:5000/api/updateCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(location.reload())
            .then(/*alert("Saved")*/)
            .catch(err => alert(err));

}

/*
 * Determines the modifier according to the ability score
 * @param {int} score
 * @return {int} mod
 */
function scoreToMod(score){
    if(score==1) {
        return -5;
    }if(score==2 || score ==3){
        return -4;
    }if(score==4 || score ==5){
        return -3;
    }if(score==6 || score ==7){
        return -2;
    }if(score==8 || score ==9){
        return -1;
    }if(score==10 || score ==11){
        return 0;
    }if(score==12 || score ==13){
        return 1;
    }if(score==14 || score ==15){
        return 2;
    }if(score==16 || score ==17){
        return 3;
    }if(score==18 || score ==19){
        return 4;
    }if(score==20 || score ==21){
        return 5;
    }
    
}

/*
 * Determines the proficiency bonus according to the level of the character
 * @param {int} level
 * @return {int} proficiency bonus
 */
function levelToProf(level){
    if(level >= 1 && level <= 4){
        return 2;
    }
    if(level >= 5 && level <= 8){
        return 3;
    }
    if(level >= 9 && level <= 12){
        return 4;
    }
    if(level >= 13 && level <= 16){
        return 5;
    }
    if(level >= 17 && level <= 20){
        return 6;
    }
}

/*
function checkProficiency(id,mod,level){
    if (document.getElementById(id).checked == 1) {
        return mod + levelToProf(level);
    }else{
        return mod;
    }
}
*/
/*
function check(id) {
    document.getElementById(id).checked = true;
}

function uncheck(id) {
    document.getElementById(id).checked = false;
}*/
/*
function setCorrect(id,val){
    if(val == 1 || val ==true || val =='1'){
    document.getElementById(id).checked = true;
    document.getElementById(id).checked;
    }if(val == 0 || val == false || val=='0'){
    document.getElementById(id).checked = false;
    }
}
*/

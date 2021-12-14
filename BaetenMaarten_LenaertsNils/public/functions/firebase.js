/* global Auth */

function createCharacter(){
    var email = document.getElementById("email").innerHTML;
    console.log(email);
    var name = document.getElementById("name").value;
    //var name20 = decodeURI(name);
    var race = document.getElementById("race").value;
    var classe = document.getElementById("classe").value;
    
    var classlevel = document.getElementById("classlevel").value;
    var background = document.getElementById("background").value;
    var alignment = document.getElementById("alignment").value;
    var xp = document.getElementById("xp").value;
    /*
    var classChosen = getClass(classe);
    for (classChosen['saving_throws'] : savin){
        
    }
    */
    /*
    var strsavebonus = profBonus(strsaveprofcient,strmod,classlevel);
    var dexsavebonus = profBonus(dexsaveprofcient,dexmod,classlevel);
    var consavebonus = profBonus(consaveprofcient,conmod,classlevel);
    var wissavebonus = profBonus(wissaveprofcient,wismod,classlevel);
    var intsavebonus = profBonus(intsaveprofcient,intmod,classlevel);
    var chasavebonus = profBonus(chasaveprofcient,chamod,classlevel);*/
    
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
        "name": name, 
        "race": race, 
        "classe": classe,
        "classlevel":classlevel,
        "background":background,
        "alignment":alignment,
        "xp":xp,
        /*
        'strsavebonus':strsavebonus,
        'dexsavebonus':dexsavebonus,
        'consavebonus':consavebonus,
        'wissavebonus':wissavebonus,
        'intsavebonus':intsavebonus,
        'chasavebonus':chasavebonus,*/
        
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

function deleteCharacter(name){
    console.log(name)
    var email = document.getElementById("email").innerHTML;
    let content = {
        "email": email,
        "name": name, 
    }
    url = "http://127.0.0.1:5000/api/deleteCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(location.reload())
            /*.then(alert("Deleted"))*/
            //.catch(err => alert(err));
}



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
/*
    
    var strmod = scoreToMod(strscore);
    var dexmod = scoreToMod(dexscore);
    var conmod = scoreToMod(conscore);
    var intmod = scoreToMod(intscore);
    var wismod = scoreToMod(wisscore);
    var chamod = scoreToMod(chascore);*/
 /*
    var strsavebonus = checkProficiency("strengthsaveprof",strmod,classlevel);
    var dexsavebonus = checkProficiency("dexteritysaveprof",dexmod,classlevel);
    var consavebonus = checkProficiency("constitutionsaveprof",conmod,classlevel);
    var wissavebonus = checkProficiency("wisdomsaveprof",wismod,classlevel);
    var intsavebonus = checkProficiency("intelligencesaveprof",intmod,classlevel);
    var chasavebonus = checkProficiency("charismasaveprof",chamod,classlevel);
    */
   
    var strsavebonus = document.getElementById("strsave").value;
    var dexsavebonus = document.getElementById("dexsave").value;
    var consavebonus = document.getElementById("consave").value;
    var wissavebonus = document.getElementById("wissave").value;
    var intsavebonus = document.getElementById("intsave").value;
    var chasavebonus = document.getElementById("chasave").value;
    
    var strsaveprofcient = document.getElementById("strengthsaveprof").checked;
    var dexsaveprofcient = document.getElementById("dexteritysaveprof").checked;
    var consaveprofcient = document.getElementById("constitutionsaveprof").checked;
    var wissaveprofcient = document.getElementById("wisdomsaveprof").checked;
    var intsaveprofcient = document.getElementById("intelligencesaveprof").checked;
    var chasaveprofcient = document.getElementById("charismasaveprof").checked;
    
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
    
    var otherprof = document.getElementById("otherprof").innerHTML;
    var ac=document.getElementById("ac").value;
    var pp=document.getElementById("pp").value;
    var speed=document.getElementById("speed").value;
    
    var maxhp=document.getElementById("maxhp").value;
    var currenthp=document.getElementById("currenthp").value;
    var temphp=document.getElementById("temphp").value;
    
    let content = {
        "email":email,
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
        
        'strsavebonus':strsavebonus,
        'dexsavebonus':dexsavebonus,
        'consavebonus':consavebonus,
        'wissavebonus':wissavebonus,
        'intsavebonus':intsavebonus,
        'chasavebonus':chasavebonus,
        
        'strsaveprofcient':strsaveprofcient,
        'dexsaveprofcient':dexsaveprofcient,
        'consaveprofcient':consaveprofcient,
        'wissaveprofcient':wissaveprofcient,
        'intsaveprofcient':intsaveprofcient,
        'chasaveprofcient':chasaveprofcient,
        
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
        
        'otherprof':otherprof,/*werkt nog niet*/
        
        'ac':ac,
        'pp':pp,
        'speed':speed,
        
        'maxhp':maxhp,
        'currenthp':currenthp,
        'temphp':temphp,   
        
        
    };
    url = "http://127.0.0.1:5000/api/updateCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(location.reload())
            .then(alert("Saved"))
            .catch(err => alert(err));
}


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


function checkProficiency(id,mod,level){
    if (document.getElementById(id).checked == true) {
        document.getElementById(id).checked = true;
        return mod + levelToProf(level);
    }else{
        return mod;
    }
}

function profBonus(prof,mod,level){
    if (prof == true) {
        return mod + levelToProf(level);
    }else{
        return mod;
    }
}
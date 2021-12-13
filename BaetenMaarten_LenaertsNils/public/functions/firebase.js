/* global Auth */

function createCharacter(){
    var email = document.getElementById("email").innerHTML;
    console.log(email);
    var name = document.getElementById("name").value;
    var name20 = decodeURI(name);
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
    
    var profbonus = levelToProf(classlevel);
        
    
    let content = {
        "email":email,
        "name": name20, 
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
            .then(alert("Deleted"))
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

    
    var strmod = scoreToMod(strscore);
    var dexmod = scoreToMod(dexscore);
    var conmod = scoreToMod(conscore);
    var intmod = scoreToMod(intscore);
    var wismod = scoreToMod(wisscore);
    var chamod = scoreToMod(chascore);
    
    var strsavebonus = checkProficiency("strengthsaveprof",strmod,classlevel);

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
        return -3;
    }if(score==8 || score ==9){
        return -3;
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
        return totmod = mod + levelToProf(level);
    }else{
        return totmod = mod;
    }
}


/* global Auth */

function createCharacter(){
    var email = document.getElementById("email").value;
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
        'chascore':chascore
    };
    url = "http://127.0.0.1:5000/api/createCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(response => response.json())
            .then(location.reload())
            .then(alert("Noice"));
            /*.catch(err => alert(err))*/;
}

function deleteCharacter(name){
    var name20 = decodeURI(name);
    console.log(name)
    let content = {
        "name": name20, 
    }
    url = "http://127.0.0.1:5000/api/deleteCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(response => response.json())
            .then(location.reload())
            .then(alert("Deleted"))
            //.catch(err => alert(err));
}






function updateCharacter(){
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


    let content = {
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
        'chascore':chascore
    };
    url = "http://127.0.0.1:5000/api/updateCharacter";
    fetch(url, {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(content)  
    })
            .then(response => response.json())
            .then(location.reload())
            .then(alert("Saved"))
            .catch(err => alert(err));
}




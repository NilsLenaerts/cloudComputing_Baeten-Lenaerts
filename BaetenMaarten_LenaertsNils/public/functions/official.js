/*
 * Promise
 * Searches and filters the spells on the official dnd 5th api on level
 * @param level
 */
function searchSpell(){
    var level = document.getElementById("level").value;
    fetch("http://127.0.0.1:1200/searchspell/" + level)
        .then(response => {if (response.ok) return response.json();
                            else alert("kleine pie");})
        .then(showData).catch(err => alert(err));
}

/*
 * Promise
 * Searches the description of rule sections on the official dnd 5th api
 * @param name 
 */
function getDescription(name){
    var p = document.getElementById(name);
    fetch("https://www.dnd5eapi.co/api/rule-sections/" + name)
        .then(response => {if (response.ok) return response.json();
                            else alert("error");})
        .then(function(json){p.innerHTML += markdown.toHTML(json.desc);console.log(json);}).catch(err => console.log(err));
}

/*
 * Promise
 * Searches the traits on the official dnd 5th api
 * @param name
 */
function getTrait(name){
    var p = document.getElementById(name);
    fetch("https://www.dnd5eapi.co/api/traits/" + name)
        .then(response => {if (response.ok) return response.json();
                            else alert("error");})
        .then(function(json){p.innerHTML += markdown.toHTML(json.desc[0]);console.log(json.desc);}).catch(err => console.log(err));
}

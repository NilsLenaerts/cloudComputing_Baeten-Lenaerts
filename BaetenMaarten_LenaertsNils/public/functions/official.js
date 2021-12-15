
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
        .then(function(json){p.innerHTML += markdown.render(json.desc);console.log(json);}).catch(err => console.log(err));
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
        .then(function(json){p.innerHTML += markdown.render(json.desc[0]);console.log(json.desc);}).catch(err => console.log(err));
}


function getFeatures(name){
    var p = document.getElementById(name);
    fetch("https://www.dnd5eapi.co/api/features/" + name)
        .then(response => {if (response.ok) return response.json();
                            else alert("error");})
        .then(function(json){p.innerHTML += markdown.render(json.desc[0]);console.log(json.desc);}).catch(err => console.log(err));
}


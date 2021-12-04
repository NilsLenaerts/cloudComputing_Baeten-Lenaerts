/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * saving homebrew spell
 * 
 */
function saveSpell(){
    var name = document.getElementById("name").value;
    var castingTime = document.getElementById("castingTime").value;
    var level = document.getElementById("level").value;
    var url ="http://127.0.0.1:1200/api/savespell/";
    var params = "name=" + name + "&castingTime=" + castingTime +"&level=" + level;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    //Send the proper header information along with the request
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    location.reload();
}

/*
 * for searching official spells on level
 */
function searchSpell(){
    var level = document.getElementById("level").value;
    fetch("http://127.0.0.1:1200/searchspell/" + level)
        .then(response => {if (response.ok) return response.json();
                            else alert("kleine pie");})
        .then(showData).catch(err => alert(err));
}


function showData(json){
    console.log(json);
}

//------------------------------------------------------------------------------
/*
 * saving homebrew item
 */
function saveItem(){
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var description = document.getElementById("description").value;
    var url ="http://127.0.0.1:1200/api/saveitem/";
    var params = "name=" + name + "&price=" + price +"&description=" + description;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    //Send the proper header information along with the request
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    location.reload();
}

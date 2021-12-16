/*
 * Request
 * Saves a homebrew spell in the homebrew api
 * @param name, casting Time, Level, Components, Materials, Description, School, Range, Ritual, Availability
 */
function saveSpell(){
    var name = document.getElementById("name").value;
    //var name20 = name.replace(/%20/g, " ");
    var name20 = decodeURI(name);
    var castingTime = document.getElementById("castingTime").value;
    var level = document.getElementById("level").value;
    var components = document.getElementById("components").value;
    var materials = document.getElementById("materials").value;
    var description = document.getElementById("description").value;
    var school = document.getElementById("school").value;
    var range = document.getElementById("range").value;
    var ritual = document.getElementById("ritual").value;
    var availability = document.getElementById("availability").value;
    
    var com20=decodeURI(components);
    var mat20 = decodeURI(material);
    var range20=decodeURI(range);
    var av20= decodeURI(availability);
    var desc20 = decodeURI(description);
    var url ="http://127.0.0.1:1200/api/savespell/";
    var params = "name=" + name20 + "&castingTime=" + castingTime +"&level=" + level +"&components=" + com20 +
                    "&materials=" + mat20 +"&description=" + desc20 + "&school=" + school + "&range=" + range20 +
                    "&ritual=" + ritual +"&availability=" + av20;
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
 * Deletes a homebrew spell according to the name given
 * @param {string} name
 */
function deleteSpell(name){
    name20=decodeURI(name);
    var url="http://127.0.0.1:1200/api/deletespell/";
    var params = "name=" + name20;
    console.log(name20)
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    location.reload();
}
/*
function updateSpell(name){
    var name20 = decodeURI(name);
    var castingTime = document.getElementById("castingTime").value;
    var level = document.getElementById("level").value;
    var components = document.getElementById("components").value;
    var materials = document.getElementById("materials").value;
    var description = document.getElementById("description").value;
    var school = document.getElementById("school").value;
    var range = document.getElementById("range").value;
    var ritual = document.getElementById("ritual").value;
    var availability = document.getElementById("availability").value;
    
    var url="http://127.0.0.1:1200/api/updatespell/";
    var params = "name=" + name20 + "&castingTime=" + castingTime +"&level=" + level +"&components=" + components +
                    "&materials=" + materials +"&description=" + description + "&school=" + school + "&range=" + range +
                    "&ritual=" + ritual +"&availability=" + availability;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    //location.reload();
}
*/



/*
 * Request
 * Saves a homebrew item in the homebrew api
 * @param name, price, description
 */
function saveItem(){
    var name = document.getElementById("name").value;
    var name20 = decodeURI(name);
    var price = document.getElementById("price").value;
    var description = document.getElementById("description").value;
    var des20 = decodeURI(description);
    var url ="http://127.0.0.1:1200/api/saveitem/";
    var params = "name=" + name20 + "&price=" + price +"&description=" + des20;
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
 * Deletes a homebrew item according to the name given
 * @param {string} name
 */
function deleteItem(name){
    name20=decodeURI(name);
    var url="http://127.0.0.1:1200/api/deleteitem/";
    var params = "name=" + name20;
    console.log(name20)
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    location.reload();
}
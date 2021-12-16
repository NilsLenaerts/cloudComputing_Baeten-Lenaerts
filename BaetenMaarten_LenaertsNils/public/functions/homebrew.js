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

    var url ="http://127.0.0.1:1200/api/savespell/";
    var params = "name=" + name20 + "&castingTime=" + castingTime +"&level=" + level +"&components=" + components +
                    "&materials=" + materials +"&description=" + description + "&school=" + school + "&range=" + range +
                    "&ritual=" + ritual +"&availability=" + availability;
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

function deleteSpell(name){
    var url="http://127.0.0.1:1200/api/deletespell/";
    var params = "name=" +name;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    //location.reload();
}

function updateSpell(name){
    var url="http://127.0.0.1:1200/api/updatespell/";
    var params = "name=" +name;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    xhr.onload = () => {
        alert("Succes");
    }
    //location.reload();
}





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
    var url ="http://127.0.0.1:1200/api/saveitem/";
    var params = "name=" + name20 + "&price=" + price +"&description=" + description;
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


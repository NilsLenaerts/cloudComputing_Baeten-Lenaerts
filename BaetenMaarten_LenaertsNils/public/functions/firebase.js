function createCharacter(){
    var name = document.getElementById("name").value;
    var name20 = decodeURI(name);
    var race = document.getElementById("race").value;
    var classe = document.getElementById("class").value;
    let content = {"name": name20, "race": race, "classe": classe};
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





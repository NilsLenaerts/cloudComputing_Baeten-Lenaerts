/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function searchSpell(){
    //var castingTime = document.getElementById("castingTime").value;
    var url ="https://www.dnd5eapi.co/api/spells";
    fetch(url)
            .then(response => {
                if (response.ok){ 
                    return response.json();
                }else{ 
                    return Promise.reject("faiiillllllllllll");
                }
            })
            .then(json => showData(json))
            .catch(err => alert(err));
};

function showData(json){
    console.log(json);
    document.getElementById("status").innerHTML = msg;
}


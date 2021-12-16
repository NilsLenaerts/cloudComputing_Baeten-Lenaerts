/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Promise
 * Searches the traits on the official dnd 5th api
 * @param name
 */
function roll(dice){
    url = "http://roll.diceapi.com/json/" + dice;
    fetch(url)
    .then(function (response) {
        return response.text();
    })
    .then(function (body) {
        console.log(body);
        var popup = document.getElementById("myPopup");
        popup.innerHTML = (body.dice[0].value);
        popup.classList.toggle("show");
        
    });
}

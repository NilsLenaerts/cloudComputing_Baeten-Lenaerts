/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Promise request to the diceroller api
 * Rolls a specific die
 * @param name
 * @return {json} object with the generated value and dice that was rolled
 */
function roll(dice){
    url = "http://roll.diceapi.com/json/" + dice;
    fetch(url)
    .then(function (response) {
        return response.text();
    })
    .then(function (body) {
        console.log(body);
        var popup = document.getElementById(dice);
        var myObj = JSON.parse(body);
        popup.innerHTML = (myObj.dice[0].value);
        popup.classList.toggle("show");
        
    });
}

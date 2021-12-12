/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function scoreToMod(score){
    if(score<0){
    }if(score==1) {
        return -5;
    }if(score==2 || score ==3){
        return -4;
    }if(score==4 || score ==5){
        return -3;
    }if(score==6 || score ==7){
        return -3;
    }if(score==8 || score ==9){
        return -3;
    }if(score==10 || score ==11){
        return 0;
    }if(score==12 || score ==13){
        return 1;
    }if(score==14 || score ==15){
        return 2;
    }if(score==16 || score ==17){
        return 3;
    }if(score==18 || score ==19){
        return 4;
    }if(score==20 || score ==21){
        return 5;
    }
    
}

function setMod(inputId, val){
    document.getElementById(inputId).setAttribute('value', val);
}
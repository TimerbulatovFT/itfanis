function block1(){
    if(breath.value==false | breath.value==0){
    document.getElementById('block_body1').style.display = "none";
    }else{document.getElementById('block_body1').style.webkitTransition=`max-height ${breath.value}s`;
    document.getElementById('block_body1').classList.toggle('block_hide1');}}
function block2(){
    if(breath_holding_on.value==false | breath_holding_on.value==0){
    document.getElementById('block_body2').style.display = "none";
    }else{document.getElementById('block_body2').style.webkitTransition=`max-height ${breath_holding_on.value}s`;
    document.getElementById('block_body2').classList.toggle('block_hide2')}}
function block3(){
    if(exhalation.value==false | exhalation.value==0){
    document.getElementById('block_body3').style.display = "none";
    }else{document.getElementById('block_body3').style.webkitTransition=`max-height ${exhalation.value}s`;
    document.getElementById('block_body3').classList.toggle('block_hide3')}}
function block4(){
    if(breath_holding_off.value==false | breath_holding_off.value==0){
    document.getElementById('block_body4').style.display = "none";
    }else{document.getElementById('block_body4').style.webkitTransition=`max-height ${breath_holding_off.value}s`;
    document.getElementById('block_body4').classList.toggle('block_hide4');}}

function delay(timeout) {
return new Promise((r)=>{
setTimeout(r, timeout);
});}

function Click(){
let i = parseInt(document.querySelector('input[name="chooseRadio"]:checked').value);
switch (i){
case 10:
Round10();
break;
case 20:
Round20();
break;
case 30:
Round30();
break;
}
}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GAME 01</title>
    </head>
    <body>
<script>
let i = 1;
let x = 1;
</script>        
<div id="container">
<?php

$color = array("#ADFF2F", "#7FFF00", "#7CFC00", "#00FF00", "#32CD32", "#98FB98", "#90EE90", "#00FA9A", "#00FF7F", "#3CB371", "#2E8B57", "#228B22", "#008000", "#006400", "#9ACD32", "#6B8E23", "#808000", "#556B2F", "#66CDAA", "#8FBC8F", "#20B2AA", "#008B8B", "#008080", "#00FFFF", "#00FFFF", "#7FFFD4", "#40E0D0", "#48D1CC", "#00CED1", "#5F9EA0", "#4682B4", "#B0C4DE", "#B0E0E6", "#ADD8E6", "#87CEEB", "#87CEFA", "#00BFFF", "#1E90FF", "#6495ED", "#7B68EE", "#4169E1", "#0000FF", "#0000CD", "#00008B", "#000080", "#191970");

for ($i=1; $i<46; $i++){
    echo "<div class='divclass' id='id-".$i."'></div>";
    if ($i>10){
        echo "<style>#id-".$i."{display:none;background-color:".$color[$i-1].";}</style>";
    } else {
        echo "<style>#id-".$i."{background-color:".$color[$i-1].";}</style>";
    }
}
?>
<style>
        body {
        width:100%;
        height:100%;
        background-color: darkgrey;
    }
        #container {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
        overflow: auto;
        z-index:-100;
    }
        .divclass {
        width:10%;
        height:50%;

    }
    .table{
        width: 100%;
        position: fixed;
        top: 20px;
        left: 0;
    }


        </style>


<table width=100% class="table">
<tr>
    <td style="text-align:center;" colspan="2">
    <input type="submit" value="ВВЕРХ" id="topBtn"></input>
    </td>
</tr>
<tr>
    <td  style="text-align:right;width:50%">
    <input type="submit" value="ВЛЕВО" id="leftBtn"></input>        
    </td>
    <td style="text-align:left;width:50%">
    <input type="submit" value="ВПРАВО" id="rightBtn"></input>
    </td>
</tr>
<tr>
    <td style="text-align:center;"  colspan="2">
    <input type="submit" value="ВНИЗ" id="downBtn"></input>        
    </td>
</tr>
</table>
</div>

<script>
let topBtn = document.getElementById("topBtn");
let leftBtn = document.getElementById("leftBtn");
let rightBtn = document.getElementById("rightBtn");
let downBtn = document.getElementById("downBtn");
let nL = "id-" + i;
let nR = "id-" + (i+10);

function topFn () {

}
function leftFn () {
    
    document.getElementById(nL).style.display = "block";
    document.getElementById(nR).style.display = "none";
    i--;
    nL = "id-" + i;
    nR = "id-" + (i+10);
     
}
function rightFn () {
    
    document.getElementById(nL).style.display = "none";
    document.getElementById(nR).style.display = "block";
    i++;
    if (i>35 && i<47) {    
        nR = "id-" + x;
        x++;
        nL = "id-" + i;        
    } else if (i>46) {
        i = 1;
        nR = "id-" + (i+10);
        nL = "id-" + i;
        x = 1;
    } else {
        nR = "id-" + (i+10);
        nL = "id-" + i;
    }
    
            
}
function downFn () {
    
}
rightBtn.addEventListener('click', rightFn);
leftBtn.addEventListener('click', leftFn);
</script>



</body>
</html>
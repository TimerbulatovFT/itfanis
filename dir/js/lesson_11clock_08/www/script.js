/* Операторы */
let parentEl = document.getElementById("content")

for(var i=2; i<10; i++){
    img = document.createElement("IMG")
    img.src = "http://localhost:81/itfanis/img/js_screen_0"+i+".webp"
    parentEl.appendChild(img)
}
for(var i=10; i<15; i++){
    img = document.createElement("IMG")
    img.src = "http://localhost:81/itfanis/img/js_screen_"+i+".webp"
    parentEl.appendChild(img)
}
var elems = document.getElementsByTagName("IMG");
for(var i=0; i<elems.length; i++) elems[i].style.width='100%';

document.write("<br>")

/* Проверка типа переменной */
document.write("typeof a = ",typeof a, "<br>")
document.write("typeof 10 = ", typeof 10, "<br>")
document.write("typeof 'Fanis' = ", typeof 'Fanis', "<br>")
document.write("typeof undefined = ", typeof undefined, "<br>")
document.write("typeof false = ", typeof false, "<br>")
document.write("typeof true = ", typeof true, "<br>")
b = {}
document.write("typeof b = ", typeof b, "<br>")
function myFn(){}
document.write("typeof myFn = ", typeof myFn, "<br>")

/* Проверка типа переменной с помощью оператора сравнения === */
let isUndefined
document.write("typeof isUndefined === 'undefined' = ", typeof isUndefined === 'undefined', "<br>")

/* Проверка типа переменной с помощью оператора сравнения || */
document.write('"Fanis"||"Default value" = ', "Fanis"||"Default value", "<br>")
document.write('""||"Default value" = ', ""||"Default value", "<br>")

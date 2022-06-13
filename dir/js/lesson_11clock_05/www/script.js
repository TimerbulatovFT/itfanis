/* Колбэк функция */
function printMyName (){
    document.write('Fanis')
}
/*Вызов колбэк функции через функцию setTimeout, имя будет напечатано на странице браузера через 5 сек */
document.write('start')
setTimeout(printMyName,5000)
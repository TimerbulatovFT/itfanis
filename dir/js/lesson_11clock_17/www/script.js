/* Массивы */

const array1 = [1,2,3,4,5,6]
const array2 = new Array (1,2,3,4,5,6)
if (array1==array2){
    document.write('Массивы array1 и array2 равны',"<br>")
} else {
    document.write('Массивы array1 и array2 не равны',"<br>")
}

const array3 = array1
if (array1==array3){
    document.write('Массивы array1 и array3 равны',"<br>")
} else {
    document.write('Массивы array1 и array3 не равны',"<br>")
}

document.write('Длина массива array2 = ', array2.length,"<br>")
document.write('Значение нулевого элемента массива array3 = ', array3[0],"<br>")

array1[4] = 'abc'
document.write('Значение четвертого элемента массива array1 = ', array1[4],"<br>")

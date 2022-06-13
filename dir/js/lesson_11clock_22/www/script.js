/* Расширение класса за счет другого */
class NumbersArray extends Array {
    sum(){
        /* Reduce - это способ перебора массива похожий на foreach и for, но отличается одной особенностью. А именно - он проходит по массиву, и сохраняет полученный результат, как значение своей переменной. */
        return this.reduce((el, acc) => acc += el, 0)
}
}
const myArray = new NumbersArray (1,2,3,4,5,6,7,8,9);
document.write(myArray.sum(), '<br>');

function sumDigitInNumber(x){
    /* x.split("") разбивает число на цифры, занося их в массив */
    /* reduce((r, a) => +a + r, 0) перебирает каждое число массива и выполняет действие, а именно +a + r, где +a это приведение значения в числовой формат, а + r функция сложения */
    return 'result is = ' + x.split("").reduce((r, a) => +a + r, 0);
}
document.write(sumDigitInNumber('123456789'), '<br>');
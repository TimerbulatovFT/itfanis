/* Инструкция или выражение */
/* Выражение (expression) — это код, который после выполнения возвращает какое-либо значение. Например, 5 + 3 вернёт 8, а Math.random() — случайное число.
Инструкция (statement) — это отдельная команда в коде, которая выполняет определённое действие. Например, if позволяет создать ветвление в программе, for позволяет повторять одно и то же действие. */
/* Выражение не имеет кавычек */
/* Инструкция имеет кавычки, но их можно опускать */

function myFn(a){
console.log(a);
}

const b = true;
let c = 10;

myFn(2+3)
myFn(b)
myFn(c = c + 1)
/*myFn(c = c + 1;) Здесь ошибка
myFn(let d) Здесь ошибка
myFn(const s = c + 1) Здесь ошибка */ 
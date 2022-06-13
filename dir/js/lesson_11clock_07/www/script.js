/* Если режим не строгий, то переменная "a" будет создана автоматически*/
/*function myFn() {
    a = true
    document.write(a, '<br>')
}
myFn()*/
/* При строгом режиме использование не объявленных переменных запрещено */
'use strict'

function myFn2() {
    a2 = true
    document.write(a2)
}

myFn2()
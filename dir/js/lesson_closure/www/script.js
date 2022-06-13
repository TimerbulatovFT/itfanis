"use strict";
 
var myClosure = (function outerFunction() {
 
  var hidden = 1;
 
  return {
    inc: function innerFunction() {
      return hidden++;
    }
  };
 
}());
 
console.log(myClosure.inc());  // возвращает 1
console.log(myClosure.inc());  // возвращает 2
console.log(myClosure.inc());  // возвращает 3
 
// Ага, круто. А как это реализовано?
// И что происходит под капотом?


/* Вложенные функции

С момента, когда функция возвращает значение, больше никто не обращается к его scope-объекту, поэтому его собирает сборщик мусора. Но что если определить вложенную функцию и вернуть ее (или сохранить где-то вне текущего scope-объекта) Вы уже знаете ответ: функция-объект всегда ссылается на scope-объект, в котором она была создана. Так что когда мы задаем вложенную функцию, она получает ссылку к текущей области видимости внешней функции. И если мы сохраним вложенную функцию в другом месте, то scope-объект не будет обработан сборщиком мусора даже когда внешняя функция вернет значение: ведь на этот scope-объект все еще есть ссылка! */
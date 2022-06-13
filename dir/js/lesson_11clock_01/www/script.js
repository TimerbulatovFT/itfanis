const objMan = {
    name: "Fanis",
    age: 41,
    height: 179,
    weight: 115,
    action: function (act){
        console.log(act)
    }
}
console.log(objMan)
const bdName = Array['Peter','Djon']
objMan.name = 'Peter'
console.log(objMan)
objMan.action('Sleep')
document.write('Имя: ', objMan.name, '<br>', 'Возраст: ',
 objMan.age, '<br>', 'Действие: ', objMan.action, '<br>')

 /* Сокращенная форма записи вложенной функции: */

 const objMan2 = {
    name: "Fanis",
    age: 41,
    height: 179,
    weight: 115,
    action (act){
        console.log(act)
    }
}
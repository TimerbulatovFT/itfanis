const objMan = {
    name: "Fanis",
    age: 41,
    height: 179,
    weight: 115,
    action: function (act){
        console.log(act)
    }
}
/* Преобразование объекта в формат JSON*/
const toJson = JSON.stringify(objMan)
console.log(toJson)
document.write(toJson)
/* Преобразование объекта в формат JSON*/
const toObj = JSON.parse(toJson)
console.log(toObj)
document.write(toObj)
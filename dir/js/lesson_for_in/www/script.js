/* Перебор свойств объекта с помощью For in */

const klassObj = {
fontSize: '20px',
backgroundColor: '#E86D6D',
color: '#0C684C',
width: '200px',
height: '300px',
border: '2px solid #cccccc',
fontWeight: 'bold'
}

document.getElementById('content').innerHTML = "<div id='objDiv'>БЛОК</div><style>#objDiv{width: 150px;height: 150px;background:#8e2b2b;text-align: right;font-size: 10px;color:black;font-weight: normal;}</style>";
const objDiv = document.getElementById("objDiv");
for (var key in klassObj){
    console.log(key, " = ", klassObj[key]);
}

/* Метод Object.keys() возвращает массив из собственных перечисляемых свойств переданного объекта, в том же порядке, в котором они бы обходились циклом for...in (разница между циклом и методом в том, что цикл перечисляет свойства и из цепочки прототипов). */
Object.keys(klassObj).forEach(function (key) {

    setTimeout(() => {
    objDiv.style.color=this[key];
    objDiv.style.backgroundColor=this[key];
    objDiv.style.width=this[key];
    objDiv.style.height=this[key];
    objDiv.style.border=this[key];
    objDiv.style.fontSize=this[key];
    objDiv.style.fontWeight=this[key];
}, 1000);
}, klassObj);
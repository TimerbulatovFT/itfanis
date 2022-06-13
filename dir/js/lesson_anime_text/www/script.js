/* Перебор элементов методом For of */
const textOne = "Это динамический текст!!!";
let i=1;
for (const letter of textOne){
  setTimeout(()=>{console.log(letter);
    setTimeout(()=>{i++}, 2000)}, 1000);
}


/* Трюк с оператором сравнения */
let b = 10
b && document.write("Ready!!!")
let c
c && document.write("Ready!!!")
/* Второй раз текст не выведен так как JS опеределило, 
что переменная "с" возвращает ЛОЖЬ и поэтому дальнейший код не стала выполнять */
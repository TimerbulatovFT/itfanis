const person = {
    name: "Fanis",
    age: 41,
}
/* Создаем копию объекта:*/
/* МЕТОД 1 */
const person2 = Object.assign({}, person)
/* Меняем значение свойства Name: */
person2.name='Peter'
/* Удаляем свойство Age: */
delete person.age
/* Выводим на странице сайта значение свойства Name у объекта Person */
document.write(person.name, '<br>')
/* Выводим на странице сайта значение свойства Name у объекта Person2 */
document.write(person2.name, '<br>')
/* НО: Если у копируемого объекта есть вложенные объекты, то ссылки на них сохраняются */
/* МЕТОД 2 */
const person3 = {... person}
person3.name = 'Djon'
/* Выводим на странице сайта значение свойства Name у объекта Person3 */
document.write(person3.name, '<br>')
/* НО: В данном методе также если у копируемого объекта есть вложенные объекты, то ссылки на них сохраняются */
/* МЕТОД 3 */
const person4 = JSON.parse(JSON.stringify(person))
person4.name = 'Semen'
/* Выводим на странице сайта значение свойства Name у объекта Person4 */
document.write(person4.name, '<br>')
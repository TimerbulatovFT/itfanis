/* Использование функции созданной в файле utils.js */
import getData from './utils.js'

getData('https://jsonplaceholder.typicode.com/todos/1')
  .then(data => console.log(data))
  .catch(error => console.log(error.message))

  
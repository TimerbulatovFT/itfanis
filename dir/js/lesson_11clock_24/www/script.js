/* Использование функции созданной в файле utils.js */
import getData from './utils.js'

getData('https://jsonplaceholder.typicode.com/todos/')
  .then(data => console.log(data))
  .catch(error => console.log(error.message))

  
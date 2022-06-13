/* Промисы */
fetch('https://jsonplaceholder.typicode.com/todos/1')
  .then(response => response.json())
  .then(json => {
    const printAnswer = Object.assign({},json);
    var myArray = Object.values(printAnswer);
    var myString = JSON.stringify(printAnswer);
    document.getElementById('content').innerHTML = `${myArray}<br>${myString}`;
})
  .catch(error => console.error(error))

  
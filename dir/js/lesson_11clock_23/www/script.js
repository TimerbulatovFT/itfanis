/* Промисы */
const url = document.currentScript.src;
fetch('https://jsonplaceholder.typicode.com/todos/1')
  .then(response => response.json())
  .then(json => {
    const printAnswer = Object.assign({},json);
    var myArray = Object.values(printAnswer);
    var myString = JSON.stringify(printAnswer);    
    document.getElementById('content').innerHTML = `<h1>Промисы</h1><br>${myArray}<br>${myString}<br><p style='font-weight: 400;font-size: 20px;'>Код скрипта:</p><iframe src=${url} scrolling="no" onload="resizeIframe(this)"></iframe>`;

})
  .catch(error => console.error(error))

  
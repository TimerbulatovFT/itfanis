/* Асинхронные функции */
const insideContent = document.getElementById('content')

const timerPromise = () =>
new Promise((resolve, reject) =>
setTimeout(() => resolve(), 3000))

const asyncFn = async () => {
document.getElementById('content').innerHTML = insideContent.outerHTML + '<br>' + 'Timer starts'
const startTime = performance.now()
await timerPromise()
const endTime = performance.now()
document.getElementById('content').innerHTML = insideContent.outerHTML + '<br>' + 'Timer starts' + '<br>' + 'Timer ended - ' + (Math.floor(endTime-startTime))
}

asyncFn()
  
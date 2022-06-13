/* Функция перехвата ошибки */


const fnWithError = () => {
    throw new Error('Some error')
}
fnWithError() /* В консоли будет сообщение НЕПОЙМАННАЯ ОШИБКА. 
Дальнейший код не будет выполняться */
console.log('continue...')
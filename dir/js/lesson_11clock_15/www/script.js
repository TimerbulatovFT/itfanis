/* Функция перехвата ошибки */

const fnWithError = () => {
    throw new Error('Some error') /* Инструкция для вызова ошибки */
}
try {
    fnWithError()
} catch (error){ /* Переменной error присваивается значение 
ошибки вызванной в блоке try */ 
    console.error(error) /* Вывод в консоль полностью описание ошибки */ 
    console.log(error.message) /* Вывод в консоль только текста ошибки (сообщение) */ 
}

console.log('continue...') /* Код будет выполнен  */

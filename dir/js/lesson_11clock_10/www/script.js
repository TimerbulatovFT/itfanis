/* Оператор ... */
const a = {
    width: 400,
    color: 'Red'
}
const b = {
    ...a,
    color: 'Blue'
}
console.table(b)
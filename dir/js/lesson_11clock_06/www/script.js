const a = 5
function myFn (){
    function innerMyFn (){
        document.write(a)
    }
    innerMyFn()
}
myFn()
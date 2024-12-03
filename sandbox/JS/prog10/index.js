// function createCalcFunction(n){
//     return function (){
//         console.log(1000 * n)
//     }
// }
//
// const calc = createCalcFunction(4)
// calc()

function createIncrimentor(n){
    return function (num){
        return n+num
    }
}

const addOne = createIncrimentor(1)
const addTen = createIncrimentor(10)
console.log(addOne(10))
console.log(addOne(15))

console.log(addTen(10))
console.log(addTen(15))

function urlGenerator(domain){
    return function (url){
        return `https://${url}.${domain}`
    }
}

const comUrl = urlGenerator('com')

console.log(comUrl('petr'))
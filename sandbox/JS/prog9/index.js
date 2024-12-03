function hello(){
    console.log('Hello',this)
}

const person = {
    name: 'Vlad',
    age: 25,
    sayHello: hello,
    sayHelloWindow: hello.bind(window),
    logInfo: function (job, phone){
        console.group(`${this.name} info:`)
        console.log(`Name is ${this.name}`)
        console.log(`Age is ${this.age}`)
        console.log(`Job is ${job}`)
        console.log(`Phone is ${phone}`)
        console.groupEnd()
    }
}

const Lena = {
    name: 'Elena',
    age: 22,
}


person.logInfo.bind(Lena)()
const fnLenaInfoLog = person.logInfo.bind(Lena)
fnLenaInfoLog('eeeeeeee','8911-333-4444')
person.logInfo.call(Lena,'dsdfsdfgsd','32423423')
person.logInfo.apply(Lena,['dsdfsdfgsd','32423423'])

//===========================
const array = [1,2,3,4,5,6]

// function multBy(arr, n){
//     return arr.map(function (i){
//         return i*n
//     })
// }
// console.log(multBy(array,2))

Array.prototype.multBy = function (n){
    return this.map(function (i){
         return i*n
    })
}

console.log(array.multBy(3))

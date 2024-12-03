const  peron = new Object({
    name: 'Петя',
    age: 28,
    greet: function () {
        console.log('Greet!')
    }
})

Object.prototype.sayHello = function (){
    console.log('Hello')
}

const lena = Object.create(peron)
lena.name = 'Elena'

const str = new String('I am string')
const person = Object.create({
    calculateAge() {
        console.log('Age: ',new Date().getFullYear() - this.birthYear)
    }
},{
    name:{
        value:'Viktor',
        enumerable:true,
        writable: true,
        configurable: true
    },
    birthYear:{
        value: 1993,
        enumerable: false,
        writable: false,
        configurable: false
    },
    age:{
        get(){
            return new Date().getFullYear() - this.birthYear
        },
        set(value){
            document.body.style.background = 'red'
            console.log('Set age', value)
        }
    }


})

// const person2 ={
//     name:'Viktor',
//     birthYear:1993
// }

console.log(person)
// console.log(person2)

person.name = 'Petr'

for (let key in person){
    if (person.hasOwnProperty(key)){
        console.log('key: ', key, person[key])
    }

}

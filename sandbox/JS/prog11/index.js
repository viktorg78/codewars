// console.log('start')
// console.log('start 2')
//
// function st(){
//     console.log('st 5000')
// }
//
// setTimeout(st, 5000)
//
// setTimeout(function () {
//     console.log('setTimeout 2000')
// }, 2000)
//
// console.log('end')

console.log('Request data...')
//
// setTimeout(() => {
//     console.log('Preparing data...')
//
//     const backendData = {
//         server: 'aws',
//         port: 2000,
//         status: 'working'
//     }
//     setTimeout(()=>{
//         backendData.modifed = true
//         console.log('Data received', backendData)
//     }, 2000)
// }, 2000)

// https://www.youtube.com/watch?v=1idOY3C1gYU&list=PLqKQF2ojwm3l4oPjsB9chrJmlhZ-zOzWT&index=5  урок
// const p = new Promise(function (resolve, reject) {
//     setTimeout(() => {
//         console.log('Preparing data...')
//         const backendData = {
//             server: 'aws',
//             port: 2000,
//             status: 'working'
//         }
//         resolve(backendData)
//     }, 2000)
// })
//
// p.then(data => {
//     const p2 = new Promise((resolve, reject) => {
//         setTimeout(() => {
//             data.modifed = true
//             resolve(data)
//         }, 2000)
//     })
//     p2.then(clientData => {
//         console.log('Data received', clientData)
//     })
// })

// const p = new Promise((resolve, reject) => {
//     setTimeout(() => {
//         console.log('Preparing data...')
//         const backendData = {
//             server: 'aws',
//             port: 2000,
//             status: 'working'
//         }
//         resolve(backendData)
//     }, 2000)
// })

// p.then(data => {
//     return new Promise((resolve, reject) => {
//         setTimeout(() => {
//             data.modifed = true
//             resolve(data)
//             // reject(data)
//         }, 2000)
//     })
// }).then(clientData => {
//     console.log('Data received', clientData)
//     clientData.fromPromis = true
//     return clientData
// }).then(data => {
//     console.log('Modifaid', data)
// }).finally(() => {
//     console.log('finally')
// }).catch(err => {
//     console.error('Error: ', err)
// })

const sleep = ms => {
   return new Promise(resolve => {
       setTimeout(()=> resolve(), ms)
   })
}

function sleep2 (ms){
    return new Promise(function (resolve){
        setTimeout(function (){
            resolve()
        },ms)
    })
}

sleep(5000).then(() => console.log('After 5 sec'))
sleep(2000).then(() => console.log('After 2 sec'))

sleep2(5000).then(() => console.log('After 5 sec 2'))
sleep2(2000).then(() => console.log('After 2 sec 2'))

Promise.all([sleep2(5000), sleep(2000)])
.then(() => {
    console.log('Все промисы')
})






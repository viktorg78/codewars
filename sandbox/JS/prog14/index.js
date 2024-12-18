const delay = ms => {
    return new Promise(r => setTimeout(() => r(), ms))
}

const url = 'https://jsonplaceholder.typicode.com/todos'

// function fetchTodos() {
//     console.log('Fetch todo start...')
//     return delay(2000)
//         .then(() => {
//             return fetch(url)
//         }).then(response => response.json())
// }
//
// fetchTodos()
//     .then(data => {
//         console.log('Data:', data)
//     })
//     .catch(e => console.error(e))

async function fetchAsyncTodos(){
    try {
        console.log('Fetch todo start...')
        await delay(2000)
        const response = await fetch(url)
        const data = await response.json()
        console.log('Data:', data)
    }catch (e){
        console.log(e)
    }
}

fetchAsyncTodos()
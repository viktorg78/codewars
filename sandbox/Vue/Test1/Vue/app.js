const App = {
    data(){
        return {
            posts: [
                {id: 1, title: 'осто JavaSckript 1', body: 'описания поста о JavaSckript 1'},
                {id: 2, title: 'осто JavaSckript 2', body: 'описания поста о JavaSckript 2'},
                {id: 3, title: 'осто JavaSckript 3', body: 'описания поста о JavaSckript 3'},
            ]

        }
    },
    methods:{

    },

    template:
        `<div class="post" v-for="post in posts">
            <div><strong>Название</strong> {{post.title}}</div>
            <div><strong>Описание</strong> {{post.body}}</div>
        </div>
        
    `


}

Vue.createApp(App).mount('#app')



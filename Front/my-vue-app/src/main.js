import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'
import router from './components/router.js'

createApp(App).use(router).mount('#app')

new Vue({
    el: '#app',
    data () {
        return {
            info: null
        }
    },
    mounted () {
        axios
            .get('http://localhost:8889/')
            .then(response => (this.info = response))
    }
})



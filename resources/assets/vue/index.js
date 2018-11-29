
import Vue from 'vue'
//import VueRouter from 'vue-router'
//import App from './App'
//import Testme from './Testme'
//
//Vue.use(VueRouter)
//
Vue.prototype.$bus = new Vue()

new Vue({

    render: h => h(Testme)

}).$mount('#app')

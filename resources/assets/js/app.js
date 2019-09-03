
require('./bootstrap');
require('./font-awesome');

import Vue from 'vue'
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

window.Vue = require('vue');

Vue.component('escola', require('./components/Escola.vue'));
Vue.component('criar', require('./components/Criar.vue'));
Vue.component('alunos', require('./components/Alunos.vue'));

const app = new Vue({
    el: '#app'
});

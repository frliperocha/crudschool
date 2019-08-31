
require('./bootstrap');

window.Vue = require('vue');

Vue.component('escola', require('./components/Escola.vue'));
Vue.component('criar', require('./components/Criar.vue'));
Vue.component('alunos', require('./components/Alunos.vue'));

const app = new Vue({
    el: '#app'
});

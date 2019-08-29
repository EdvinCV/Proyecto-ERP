
require('./bootstrap');

window.Vue = require('vue');
import Vuetify from 'vuetify';
Vue.use(Vuetify);

import swal from 'sweetalert2';
window.swal = swal;


Vue.component('categoria', require('./components/Categoria.vue').default);
Vue.component('Roles', require('./components/Roles.vue').default);
Vue.component('Permisos', require('./components/Permisos.vue').default);



const app = new Vue({
    el: '#app',
    data:{
        menu:0,
        ruta:''
    }
});

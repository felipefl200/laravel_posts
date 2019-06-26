
require('./bootstrap');

import store from './vuex/store.js'

window.Vue = require('vue');


import Swal from 'sweetalert2'

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.Toast = Toast

window.Fire =  new Vue()

Vue.component('notifications', require('./components/notifications/Notifications.vue').default);

const app = new Vue({
    store,
    el: '#app',
});


require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'

Vue.use(VueRouter);
   
import {routers} from './route/routes'

const router = new VueRouter({
  routes 
});

const app = new Vue({

  router

}).$mount('#app');
require('./bootstrap');



import Alpine from 'alpinejs';

import { createApp } from "vue";
import router from './router'
import BoxesIndex from './components/box/BoxesIndex'

createApp(
    {
        components:{
            BoxesIndex
        }
    }
).use(router).mount('#app')


window.Alpine = Alpine;

Alpine.start();

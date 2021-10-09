require('./bootstrap');



import Alpine from 'alpinejs';

import { createApp } from "vue";

createApp(
    {
        components:{}
    }
)

window.Alpine = Alpine;

Alpine.start();

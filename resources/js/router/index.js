import { createRouter, createWebHistory} from "vue-router";

import BoxesIndex from '../components/box/BoxesIndex'

const routes = [
    {
        path: '/',
        name: 'boxes.index',
        component: BoxesIndex
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})

import {createRouter} from "vue-router";
import ( createWebHistory, createRouter())

const routes = [
    {
        path: '/',
        alias:'/acceuil',
        name: 'acceuil',
        components: () => import("./components/Acceuil.vue")
    },
    {
    path: '/crm',
        alias: '/crm',
    name: '/crm',
    components: () => import ("./components/CRM.vue")
    }
];
const router =createRouter({
    history: createWebHistory(),
    routes
});

export default router;
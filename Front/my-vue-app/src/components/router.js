import {createRouter, createWebHistory} from "vue-router";
const routes = [
    {
        path: '/acceuil',
        alias:'/acceuil',
        name: 'Acceuil',
        component: () => import('./Acceuil.vue')
    },
    {
        path: '/crm',
        alias: '/crm',
        name: 'crm',
        component: () => import ("./Crm.vue")
    }
];
const router =createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
import {createRouter, createWebHistory} from 'vue-router'
import Article from "@/pages/Article.vue";

const routes = [
    {
        path: '/',
        name: 'Default',
        component: () => import(/* webpackChunkName: "home" */ '@/pages/Default.vue'),
    },
    {
        path: '/articles',
        name: 'Articles',
        component: () => import(/* webpackChunkName: "articles" */ '@/pages/Articles.vue'),
    },
    {
        path: '/articles/:id',
        name: 'Article',
        component: Article,
        props: true,
    },
]

const router = createRouter({
    mode: "hash",
    history: createWebHistory(),
    routes,
})

export default router

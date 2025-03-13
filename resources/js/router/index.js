import { createRouter, createWebHistory } from 'vue-router';

// Import your Vue pages
import Home from '../pages/Home.vue';
import About from '../pages/About.vue';
import NotFound from '../pages/NotFound.vue';

const routes = [
    { path: '/', component: Home, name: 'home' },
    { path: '/about', component: About, name: 'about' },
    { path: '/:pathMatch(.*)*', component: NotFound, name: 'notfound' },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;

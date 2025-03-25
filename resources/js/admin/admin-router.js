import { createRouter, createWebHistory } from "vue-router";

const adminRoute = createRouter({
    history: createWebHistory('/admin'),
    routes
});

export default adminRoute;

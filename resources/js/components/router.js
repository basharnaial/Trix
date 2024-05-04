import { createRouter, createWebHistory } from 'vue-router';
import Home from './Home.vue'; // Adjust according to your component files
import Login from './Login.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/login', component: Login }

];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;

// استيراد الدوال اللازمة من vue-router
import { createRouter, createWebHistory } from 'vue-router';

// استيراد المكونات التي ستستخدم في التوجيه
import Home from './Home.vue';
import Login from './Login.vue';

// تعريف الطرق
const routes = [
    { path: '/', component: Home },
    { path: '/login', component: Login }
];

// إنشاء مثيل الراوتر باستخدام createWebHistory
const router = createRouter({
    history: createWebHistory(), // لا تمرر أي معاملات هنا إذا كنت تعمل في الجذر
    routes // الطرق المعرفة أعلاه
});

export default router;

import { createApp } from 'vue';
import App from './components/App.vue'; // Adjust path if necessary
import router from './components/router';

const app = createApp(App);
app.use(router);
app.mount('#app');

import { createApp } from 'vue';
import router from './router';
import DefaultLayout from './layouts/DefaultLayout.vue';


const app = createApp({});
app.component('default',DefaultLayout);
app.use(router);
app.mount('#app');

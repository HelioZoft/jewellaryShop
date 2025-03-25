import { createApp } from 'vue';

//import admin
import AdminApp from './admin/AdminApp.vue';
import adminRoute from './admin/admin-router';

//import user
import UserApp from './user/UserApp.vue';
import userRoute from './user/user-router';

if(window.location.pathname.startsWith('/admin')){
    createApp(AdminApp).use(adminRoute).mount('#admin-app');
} else {
    createApp(UserApp).use(userRoute).mount('#user-app');
}

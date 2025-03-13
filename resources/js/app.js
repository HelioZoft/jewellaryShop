// import './bootstrap';
// import { createApp } from 'vue';

// console.log("Vue is loading...");

// const app = createApp({
//     mounted() {
//         console.log("Vue app is mounted!");
//     }
// });

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

// app.mount('#app');
// console.log("Vue app should be mounted now.");

import { createApp } from 'vue';
import router from './router';
import DefaultLayout from './layouts/DefaultLayout.vue';

const app = createApp(DefaultLayout);
app.use(router);
app.mount('#app');


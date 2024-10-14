import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import '@fortawesome/fontawesome-free/css/all.css';
import './scroll-animation.js';


createApp(App)
  .use(router)
  .mount('#app');

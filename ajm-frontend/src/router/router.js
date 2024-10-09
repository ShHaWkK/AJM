
// path ajm-frontend/src/router/router.js
import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';
import QuoteForm from './views/QuoteForm.vue';
import Dashboard from './views/Dashboard.vue';
import Tickets from './views/Tickets.vue';
import Blog from './views/Blog.vue';
import Contact from './views/Contact.vue';

Vue.use(Router);

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/quote', name: 'QuoteForm', component: QuoteForm },
  { path: '/dashboard', name: 'Dashboard', component: Dashboard },
  { path: '/tickets', name: 'Tickets', component: Tickets },
  { path: '/blog', name: 'Blog', component: Blog },
  { path: '/contact', name: 'Contact', component: Contact },
];

export default new Router({
  mode: 'history',
  routes,
});

// router/index.js
import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '../views/HomePage.vue';
import QuoteFormPage from '../views/QuoteFormPage.vue';
import DashboardPage from '../views/DashboardPage.vue';
import SupportTicketsPage from '../views/SupportTicketsPage.vue';
import BlogPage from '../views/BlogPage.vue';
import ContactPage from '../views/ContactPage.vue';
import ServicesSectionPage from '../views/services/ServiceSectionPage.vue';
import LoginInscriptionPage from '../views/Login_inscriPage.vue';

const routes = [
  { path: '/', name: 'Home', component: HomePage },
  { path: '/quote', name: 'QuoteForm', component: QuoteFormPage },
  { path: '/dashboard', name: 'Dashboard', component: DashboardPage },
  { path: '/tickets', name: 'SupportTickets', component: SupportTicketsPage },
  { path: '/blog', name: 'Blog', component: BlogPage },
  { path: '/contact', name: 'Contact', component: ContactPage },
  { path: '/services', name: 'Services', component: ServicesSectionPage },
  { path: '/login', name: 'Login', component: LoginInscriptionPage },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

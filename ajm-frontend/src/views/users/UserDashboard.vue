<template>
    <section class="dashboard">
      <h2 class="section-title">Bienvenue, {{ userEmail }}</h2>
      <div class="dashboard-content">
        <div class="card" @click="goToPage('projects')">Suivi des Projets</div>
        <div class="card" @click="goToPage('tickets')">Système de Ticketing</div>
        <div class="card" @click="goToPage('settings')">Paramètres du Compte</div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: 'UserDashboard',
    data() {
      return {
        userEmail: 'exemple@ajm-services.com'
      };
    },
    methods: {
      goToPage(page) {
        this.$router.push(`/${page}`);
      }
    }
  };
  </script>
  
  <style scoped>
  .dashboard {
    padding: 4rem 1rem;
    background-color: #0f172a;
    text-align: center;
    color: #e2e8f0;
  }
  .section-title {
    font-size: 2.5rem;
    color: #00ffc8;
    margin-bottom: 2rem;
  }
  .dashboard-content {
    display: flex;
    justify-content: center;
    gap: 2rem;
  }
  .card {
    background: rgba(255, 255, 255, 0.1);
    padding: 2rem;
    border-radius: 10px;
    width: 200px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.3s ease;
  }
  .card:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.05);
  }
  </style>
  
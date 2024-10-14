<template>
    <footer class="footer">
      <div class="footer-content">
        <p>&copy; 2024 AJM Services. Tous droits réservés.</p>
        <nav>
          <a href="#" @click.prevent="$router.push('/')">Accueil</a>
          <a href="#" @click.prevent="$router.push('/services')">Services</a>
          <a href="#" @click.prevent="$router.push('/contact')">Contact</a>
        </nav>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'FooterPage'
  };
  </script>
  
  <style scoped>
  .footer {
    background-color: #1f1f1f;
    color: #fff;
    padding: 2rem;
    text-align: center;
  }
  
  .footer-content nav a {
    color: #00ffc8;
    margin: 0 1rem;
    text-decoration: none;
  }
  
  .footer-content nav a:hover {
    text-decoration: underline;
  }
  </style>
  
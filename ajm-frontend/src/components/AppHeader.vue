<template>
  <header>
    <nav class="navbar">
      <div class="navbar-brand">
        <a href="#" @click.prevent="$router.push('/')">AJM Tech</a>
      </div>
      <ul class="navbar-links">
        <li><a @click.prevent="$router.push('/')">Accueil</a></li>
        <li><a @click.prevent="$router.push('/quote')">Demande de Devis</a></li>
        <li><a @click.prevent="$router.push('/contact')">Contact</a></li>
        <li><a @click.prevent="$router.push('/login')">Connexion/Inscription</a></li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'AppHeader'
};
</script>

<style scoped>
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background-color: #1f1f1f;
  color: #fff;
}

.navbar-brand a {
  color: #fff;
  font-size: 1.5rem;
  font-weight: bold;
  text-decoration: none;
}

.navbar-links {
  list-style: none;
  display: flex;
  gap: 1.5rem;
}

.navbar-links a {
  color: #fff;
  text-decoration: none;
}

.navbar-links a:hover {
  color: #4CAF50;
}
</style>

<template>
  <div id="app">
    <AppHeader />
    <router-view />
  </div>
</template>

<script>
import AppHeader from '../src/components/AppHeader.vue';

export default {
  components: {
    AppHeader
  }
};
</script>

<style>
html, body {
  width: 100%;
  height: 100%;
  overflow-y: auto; /* Permet le défilement vertical */
  margin: 0;
  padding: 0;
}

#app {
  width: 100%;
  height: 100%;
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

/* Les autres styles pour les sections */
.page-container {
  width: 100%;
  overflow-x: hidden;
}

.hero, .services, .founders {
  min-height: 100vh;
  padding: 2rem;
}
</style>


<template>
    <div>
      <h1>Demande de Devis</h1>
      <form @submit.prevent="submitQuote">
        <input v-model="projectDescription" placeholder="Description du projet" required>
        <input v-model="budget" placeholder="Budget" type="number" required>
        <input v-model="duration" placeholder="Durée estimée (jours)" type="number" required>
        <button type="submit">Envoyer</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        projectDescription: '',
        budget: '',
        duration: '',
      };
    },
    methods: {
      submitQuote() {
        // Envoyer les données au backend
      }
    }
  };
  </script>
  
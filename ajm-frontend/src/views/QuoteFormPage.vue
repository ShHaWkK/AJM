<template>
  <div class="quote-form">
    <h1>Demande de Devis</h1>
    <form @submit.prevent="submitQuote">
      <input v-model="projectDescription" placeholder="Description du projet" required />
      <input v-model="budget" placeholder="Budget" type="number" required />
      <input v-model="duration" placeholder="Durée estimée (jours)" type="number" required />
      <button type="submit">Envoyer</button>
    </form>
  </div>
</template>

<script>
export default {
  name: 'QuoteFormPage',
  data() {
    return {
      projectDescription: '',
      budget: '',
      duration: ''
    };
  },
  methods: {
    submitQuote() {
      // Fonction de soumission de devis
    }
  }
};
</script>

<style scoped>
.quote-form {
  padding: 2rem;
}
</style>

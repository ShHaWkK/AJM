<template>
  <section class="quote-form">
    <h2 class="section-title">Demande de Devis</h2>
    <form @submit.prevent="handleSubmit">
      <label for="description">Description du Projet</label>
      <textarea id="description" v-model="form.description" required></textarea>

      <label for="budget">Budget Prévu</label>
      <input type="number" id="budget" v-model="form.budget" required placeholder="€" />

      <label for="duration">Durée Estimée du Projet</label>
      <input type="text" id="duration" v-model="form.duration" required placeholder="Ex : 3 mois" />

      <button type="submit" class="submit-button">Envoyer la Demande</button>
    </form>
  </section>
</template>

<script>
export default {
  name: 'QuoteFormPage',
  data() {
    return {
      form: {
        description: '',
        budget: '',
        duration: ''
      }
    };
  },
  methods: {
    handleSubmit() {
      alert('Votre demande a été envoyée. Vous recevrez une confirmation par email.');
    }
  }
};
</script>

<style scoped>
.quote-form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  padding: 2rem;
  background: linear-gradient(135deg, #0f172a, #1e293b);
  color: #e2e8f0;
}

.section-title {
  font-size: 3rem;
  text-align: center;
  margin-bottom: 3rem;
  color: #00ffc8;
  text-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  max-width: 500px;
}

label {
  align-self: flex-start;
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
  color: #a3bffa;
}

textarea, input {
  width: 100%;
  padding: 1rem;
  margin-bottom: 1.5rem;
  border: none;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.1);
  color: #e2e8f0;
  font-size: 1.1rem;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
}

textarea:focus, input:focus {
  box-shadow: 0 4px 20px rgba(0, 255, 200, 0.4);
  outline: none;
}

.submit-button {
  width: 100%;
  padding: 1rem;
  background-color: #00ffc8;
  border: none;
  border-radius: 8px;
  font-size: 1.3rem;
  color: #111b24;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s ease, transform 0.3s ease;
}

.submit-button:hover {
  background-color: #32ff7e;
  transform: scale(1.05);
}
</style>

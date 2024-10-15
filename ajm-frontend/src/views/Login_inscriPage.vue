<template>
    <div class="auth-container">
      <div class="auth-form">
        <h2 class="section-title">{{ isLogin ? 'Connexion' : 'Inscription' }}</h2>
        
        <form @submit.prevent="handleSubmit">
          <div v-if="!isLogin">
            <!-- Champs supplémentaires pour l'inscription -->
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" v-model="form.username" required placeholder="Nom d'utilisateur" />
          </div>
  
          <label for="email">Email</label>
          <input type="email" id="email" v-model="form.email" required placeholder="Email" />
  
          <label for="password">Mot de passe</label>
          <input type="password" id="password" v-model="form.password" required placeholder="Mot de passe" />
  
          <button type="submit" class="submit-button">{{ isLogin ? 'Se Connecter' : "S'inscrire" }}</button>
        </form>
  
        <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
  
        <p class="switch-text">
          {{ isLogin ? "Vous n'avez pas de compte ?" : "Vous avez déjà un compte ?" }}
          <button @click="toggleAuthMode" class="switch-button">
            {{ isLogin ? "S'inscrire" : 'Se Connecter' }}
          </button>
        </p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'LoginInscriptionPage',
    data() {
      return {
        isLogin: true, // Par défaut, affiche le formulaire de connexion
        form: {
          username: '',
          email: '',
          password: ''
        },
        errorMessage: ''
      };
    },
    methods: {
      toggleAuthMode() {
        this.isLogin = !this.isLogin;
        this.form = { username: '', email: '', password: '' }; // Réinitialiser les champs du formulaire
        this.errorMessage = ''; // Réinitialiser le message d'erreur
      },
      async handleSubmit() {
        try {
          this.errorMessage = ''; // Réinitialiser les messages d'erreur
          const endpoint = this.isLogin ? '/api/login' : '/api/register';
          const response = await fetch(endpoint, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify(this.form)
          });
  
          const data = await response.json();
          
          if (!response.ok) {
            // Gestion des erreurs
            this.errorMessage = data.message || 'Une erreur est survenue';
            return;
          }
  
          // Si la connexion/l'inscription est réussie
          if (this.isLogin) {
            alert('Connexion réussie');
            // Rediriger vers une page sécurisée
            this.$router.push('/dashboard');
          } else {
            alert('Inscription réussie');
            // Passer en mode connexion pour permettre à l'utilisateur de se connecter
            this.toggleAuthMode();
          }
        } catch (error) {
          this.errorMessage = 'Une erreur est survenue lors de la communication avec le serveur';
        }
      }
    }
  };
  </script>
  
  <style scoped>
  .auth-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: #e2e8f0;
  }
  
  .auth-form {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 400px;
    text-align: center;
  }
  
  .section-title {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    color: #00ffc8;
  }
  
  label {
    display: block;
    font-size: 1rem;
    margin: 1rem 0 0.5rem;
    color: #a3bffa;
  }
  
  input {
    width: 100%;
    padding: 0.8rem;
    margin-bottom: 1rem;
    border: none;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.1);
    color: #e2e8f0;
    font-size: 1rem;
  }
  
  .submit-button {
    width: 100%;
    padding: 0.8rem;
    margin-top: 1rem;
    background-color: #00ffc8;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    color: #111b24;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.3s ease;
  }
  
  .submit-button:hover {
    background-color: #32ff7e;
    transform: scale(1.05);
  }
  
  .switch-text {
    margin-top: 1.5rem;
    font-size: 1rem;
    color: #cbd5e1;
  }
  
  .switch-button {
    background: none;
    border: none;
    color: #00ffc8;
    cursor: pointer;
    font-size: 1rem;
    margin-left: 0.5rem;
    transition: color 0.3s ease;
  }
  
  .switch-button:hover {
    color: #32ff7e;
  }
  
  .error-message {
    color: #ff4d4f;
    font-size: 0.9rem;
    margin-top: 0.5rem;
  }
  </style>
  
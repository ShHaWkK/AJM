<template>
    <div class="home">
      <section class="hero">
        <h1>Bienvenue chez AJM Services</h1>
        <p>Votre partenaire en technologie, sécurité et maintenance</p>
        <button @click.prevent="$router.push('/services')">Découvrez nos Services</button>
      </section>
      <section class="features">
        <div class="feature-card" v-for="feature in features" :key="feature.title">
          <img :src="feature.image" :alt="feature.title" />
          <h2>{{ feature.title }}</h2>
          <p>{{ feature.description }}</p>
        </div>
      </section>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        features: [
          {
            title: 'Technologie',
            description: 'Des solutions modernes et innovantes pour booster votre entreprise.',
            image: '/images/technology.jpg'
          },
          {
            title: 'Sécurité',
            description: 'Protection avancée pour la sécurité de vos données.',
            image: '/images/security.jpg'
          },
          {
            title: 'Cybersécurité',
            description: 'Détection et prévention des menaces en ligne.',
            image: '/images/cybersecurity.jpg'
          },
          {
            title: 'Maintenance',
            description: 'Support et maintenance pour assurer la continuité de vos activités.',
            image: '/images/maintenance.jpg'
          },
          {
            title: 'Jeunesse et Innovation',
            description: 'Des solutions jeunes et dynamiques pour une ère numérique.',
            image: '/images/youth.jpg'
          }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .hero {
    background: linear-gradient(to right, #283c86, #45a247);
    color: #fff;
    text-align: center;
    padding: 3rem 1rem;
  }
  
  .hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }
  
  .hero p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
  }
  
  .hero button {
    background-color: #4CAF50;
    color: #fff;
    padding: 0.75rem 1.5rem;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }
  
  .hero button:hover {
    background-color: #45a247;
  }
  
  .features {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 2rem;
  }
  
  .feature-card {
    text-align: center;
    padding: 1rem;
    width: 200px;
  }
  
  .feature-card img {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }
  
  .feature-card h2 {
    font-size: 1.25rem;
    margin: 1rem 0;
  }
  
  .feature-card p {
    font-size: 1rem;
    color: #666;
  }
  </style>
  
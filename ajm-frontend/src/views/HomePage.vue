<template>
  <div class="home">
    <!-- Section avec la vidéo de fond -->
    <section class="hero">
      <video autoplay muted loop class="background-video">
        <source src="/videos/first-page.mp4?version=1" type="video/mp4" />
        Votre navigateur ne supporte pas la vidéo.
      </video>
      <div class="content">
        <h1 class="title">Sécurisez, Créez, et Maintenez avec AJM</h1>
        <p class="subtitle">
          <span class="typing-animation">La cybersécurité, l'innovation et la maintenance</span>
        </p>
        <button class="cta" @click.prevent="$router.push('/services')">Découvrez nos Services</button>
      </div>
    </section>

    <!-- Section Pourquoi Nous Choisir -->
    <section class="why-choose-us">
      <h2 class="section-title">Pourquoi Nous Choisir ?</h2>
      <div class="advantages">
        <div class="advantage-card" v-for="advantage in advantages" :key="advantage.title">
          <i :class="advantage.icon" class="advantage-icon"></i>
          <h3>{{ advantage.title }}</h3>
          <p>{{ advantage.description }}</p>
        </div>
      </div>
    </section>

    <!-- Section des services -->
    <section class="services">
      <h2 class="section-title">Nos Services</h2>
      <div class="service-cards">
        <div class="service-card" v-for="service in services" :key="service.title">
          <img :src="service.image" alt="" class="service-icon" />
          <i :class="service.icon"></i>
          <h3>{{ service.title }}</h3>
          <p>{{ service.description }}</p>
        </div>
      </div>
    </section>

    <!-- Section des fondateurs -->
    <section class="founders">
      <h2 class="section-title">À Propos des Fondateurs</h2>
      <div class="founder-cards">
        <div class="founder-card" v-for="founder in founders" :key="founder.name">
          <img :src="founder.image" :alt="founder.name" class="founder-image" />
          <h3>{{ founder.name }}</h3>
          <p>{{ founder.bio }}</p>
        </div>
      </div>
    </section>

    <!-- Ajout de la section Footer -->
    <FooterPage />
  </div>
</template>

<script>
import FooterPage from './FooterPage.vue';

export default {
  data() {
    return {
      advantages: [
        { title: 'Expertise reconnue', description: 'Dans le domaine de la cybersécurité.', icon: 'fas fa-shield-alt' },
        { title: 'Support client 24/7', description: 'Assistance disponible à tout moment.', icon: 'fas fa-headset' },
        { title: 'Solutions personnalisées', description: 'Adaptées à vos besoins spécifiques.', icon: 'fas fa-cogs' },
      ],
      services: [
        { title: 'Cybersécurité', description: 'Protection avancée et prévention des menaces.', icon: 'fas fa-shield-alt', image: '/images/security.png' },
        { title: 'Création de Sites', description: 'Des sites modernes et adaptatifs.', icon: 'fas fa-code', image: '/images/technologie.png' },
        { title: 'Maintenance', description: 'Assistance et mises à jour continues.', icon: 'fas fa-tools', image: '/images/support.png' }
      ],
      founders: [
        { name: 'Alexandre UZAN', bio: 'Fondateur et expert en cybersécurité.', image: '/images/Alexandre.jpg' },
        { name: 'Marie Curie', bio: 'Co-fondatrice et directrice technique.', image: '/images/founder2.jpg' }
      ]
    };
  },
  components: {
    FooterPage
  }
};
</script>

<style scoped>
/* Styles généraux */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  background-color: #111B24; /* Harmonisation avec la vidéo */
}

.home {
  color: #fff;
}

/* Section Hero (Vidéo de fond) */
.hero {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100vh;
  overflow: hidden;
}

.background-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  z-index: -1;
}

.content {
  z-index: 1;
  padding: 20px;
  max-width: 700px;
  text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  animation: fadeIn 3s ease;
}

.title {
  font-size: 3.5rem;
  color: #00ffc8;
}

.subtitle {
  color: #32ff7e;
  font-size: 1.5rem;
  margin: 10px 0;
}

.typing-animation {
  display: inline-block;
  animation: typing 4s steps(30, end) infinite;
}

.cta {
  background-color: #32ff7e;
  border: none;
  padding: 1rem 3rem;
  border-radius: 30px;
  font-size: 1.2rem;
  cursor: pointer;
  transition: background 0.3s ease, transform 0.2s ease;
}

.cta:hover {
  background-color: #00ffc8;
  transform: scale(1.05);
}

/* Section Pourquoi Nous Choisir */
.why-choose-us {
  padding: 4rem 1rem;
  background-color: #111B24;
  text-align: center;
}

.section-title {
  font-size: 2.5rem;
  margin-bottom: 1.5rem;
  color: #fff;
}

.advantages {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 2rem;
}

.advantage-card {
  background: rgba(255, 255, 255, 0.1);
  padding: 2rem;
  border-radius: 15px;
  width: 240px;
  text-align: center;
  transition: transform 0.3s ease;
}

.advantage-card:hover {
  transform: scale(1.05);
}

.advantage-icon {
  font-size: 2.5rem;
  color: #00ffc8;
  margin-bottom: 1rem;
}

/* Section Services */
.services {
  padding: 4rem 1rem;
  background-color: #111B24;
  text-align: center;
}

.service-cards {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1.5rem;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
}

.service-card {
  background: rgba(255, 255, 255, 0.1);
  padding: 1.5rem;
  border-radius: 15px;
  width: 240px;
  text-align: center;
  transition: transform 0.3s ease;
}

.service-card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0, 255, 200, 0.4);
}

.service-icon {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 1rem;
}

/* Section Fondateurs */
.founders {
  padding: 4rem 1rem;
  background-color: #111B24;
  text-align: center;
}

.founder-cards {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 1.5rem;
  max-width: 800px;
  margin: 0 auto;
}

.founder-card {
  background: rgba(255, 255, 255, 0.1);
  padding: 1.5rem;
  border-radius: 15px;
  width: 240px;
  text-align: center;
  transition: transform 0.3s ease;
}

.founder-card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0, 255, 200, 0.4);
}

.founder-image {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  margin-bottom: 1rem;
}

/* Effets Typing et FadeIn */
@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
</style>

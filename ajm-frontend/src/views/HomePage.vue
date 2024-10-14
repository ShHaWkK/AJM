<template>
  <div class="home">
    <section class="hero">
      <video autoplay muted loop class="background-video">
        <source src="/videos/first-page.mp4?version=1" type="video/mp4" />
        Votre navigateur ne supporte pas la vidéo.
      </video>
      <div class="content">
        <h1 class="title">Sécurisez, Créez, et Maintenez avec AJM</h1>
        <p class="subtitle"><span class="typing-animation">La cybersécurité, l'innovation et la maintenance</span></p>
        <button class="cta" @click.prevent="$router.push('/services')">Nos Services</button>
      </div>
    </section>
    <section class="services">
      <div class="service-card" v-for="service in services" :key="service.title">
        <img :src="service.image" alt="" class="service-icon" />
        <i :class="service.icon"></i>
        <h2>{{ service.title }}</h2>
        <p>{{ service.description }}</p>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      services: [
        { title: 'Cybersécurité', description: 'Protection avancée et prévention des menaces.', icon: 'fas fa-shield-alt', image: '/images/security.png' },
        { title: 'Création de Sites', description: 'Des sites modernes et adaptatifs.', icon: 'fas fa-code', image: '/images/technologie.jpg' },
        { title: 'Maintenance', description: 'Assistance et mises à jour continues.', icon: 'fas fa-tools', image: '/images/support.png' }
      ]
    };
  }
};
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.home {
  display: flex;
  flex-direction: column;
  color: #fff;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.hero {
  flex: 1;
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
  width: 100%;
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

.services {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding: 3rem 1rem;
  background-color: #0a1a2e;
}

.service-card {
  background: rgba(255, 255, 255, 0.1);
  padding: 2rem;
  border-radius: 15px;
  width: 240px;
  text-align: center;
  transition: transform 0.3s ease;
  margin: 1rem;
  color: #fff;
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

.service-card i {
  font-size: 2.5rem;
  color: #00ffc8;
  margin-bottom: 1rem;
}

@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
</style>

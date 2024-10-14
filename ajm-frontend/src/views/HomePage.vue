<template>
  <div class="home">
    <section class="hero">
      <div class="content">
        <h1>Sécurisez, Créez, et Maintenez avec AJM</h1>
        <p><span class="typing-animation">La cybersécurité, l'innovation et la maintenance</span></p>
        <button class="cta" @click.prevent="$router.push('/services')">Nos Services</button>
      </div>
      <div class="background-animation"></div>
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
/* Fond principal avec un gradient */
.home {
  color: #fff;
  background: linear-gradient(to right, #0a1a2e, #1f1f1f);
}
.hero {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100vh;
  background: linear-gradient(120deg, #0a1a2e, #1c1c1e, #3b2d58);
}
.content h1 {
  font-size: 3rem;
  color: #00ffc8;
}
.typing-animation {
  color: #32ff7e;
  display: inline-block;
  animation: typing 3s steps(30, end) infinite;
}
@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}
/* .background-animation {
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('/images/background-animation.png') repeat;
  opacity: 0.2;
  animation: float 15s ease-in-out infinite;
} */

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.services {
  display: flex;
  justify-content: space-around;
  padding: 2rem;
  flex-wrap: wrap;
}
.service-card {
  background: rgba(0, 0, 0, 0.8);
  padding: 1.5rem;
  border-radius: 10px;
  width: 220px;
  text-align: center;
  transition: transform 0.3s ease;
  margin-bottom: 20px;
}
.service-card:hover {
  transform: translateY(-15px) scale(1.05);
  box-shadow: 0 8px 20px rgba(0, 255, 200, 0.4);
}
.service-icon {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 10px;
}
.service-card i {
  font-size: 3rem;
  color: #00ffc8;
  margin-bottom: 0.5rem;
}
.cta {
  background-color: #32ff7e;
  border: none;
  padding: 0.75rem 2rem;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}
.cta:hover {
  background-color: #00ffc8;
}
</style>

<!-- ServicesSectionPage.vue -->
<template>
  <section class="services">
    <h2 class="section-title">Nos Services</h2>
    <div class="service-cards">
      <div class="service-card" v-for="service in services" :key="service.title">
        <img :src="service.image" alt="" class="service-icon" />
        <h3 class="service-title">{{ service.title }}</h3>
        <p class="service-description">{{ service.description }}</p>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ServicesSectionPage',
  data() {
    return {
      services: [
        { title: 'Système de Ticketing', description: 'Suivez et résolvez vos problèmes rapidement.', image: '/images/ticketing.png' },
        { title: 'Maintenance Continue', description: 'Votre site reste à jour avec notre maintenance proactive.', image: '/images/maintenance.png' },
        { title: 'Solutions Personnalisées', description: 'Nous adaptons nos services à vos besoins.', image: '/images/custom-solutions.png' }
      ]
    };
  }
};
</script>

<style scoped>
.services {
  padding: 4rem 1rem;
  background-color: #0f172a;
  text-align: center;
}

.section-title {
  font-size: 3rem;
  color: #e2e8f0;
  margin-bottom: 2rem;
  text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.service-cards {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 2rem;
}

.service-card {
  background: rgba(255, 255, 255, 0.15);
  padding: 2rem;
  border-radius: 15px;
  width: 280px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.service-card:hover {
  transform: scale(1.08);
  box-shadow: 0 10px 20px rgba(0, 255, 200, 0.4);
  background: rgba(255, 255, 255, 0.2);
}

.service-icon {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 1rem;
  transition: transform 0.4s ease;
}

.service-card:hover .service-icon {
  transform: scale(1.05);
}

.service-title {
  font-size: 1.8rem;
  color: #ffffff;
  margin: 1rem 0;
  text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

.service-description {
  font-size: 1.1rem;
  color: #cbd5e1;
  text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}
</style>

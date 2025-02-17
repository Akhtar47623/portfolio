<template>
  <div>
    <h2>My Portfolio</h2>
    <div v-for="portfolio in portfolios" :key="portfolio.id" class="portfolio-item">
      <img :src="`/storage/${portfolio.image_path}`" alt="Portfolio Image">
      <h3>{{ portfolio.title }}</h3>
      <p>{{ portfolio.description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      portfolios: []
    };
  },
  mounted() {
    this.fetchPortfolios();
  },
  methods: {
    fetchPortfolios() {
      axios.get('http://127.0.0.1:8000/api/portfolios')
        .then(response => {
          this.portfolios = response.data;
        })
        .catch(error => {
          console.error("There was an error fetching portfolios:", error);
        });
    }
  }
};
</script>

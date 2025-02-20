<template>
  <div>
    <!-- Form for adding portfolio -->
    <form @submit.prevent="addPortfolio">
      <input type="text" v-model="title" placeholder="Project Title" class="form-control" required>
      <textarea v-model="description" placeholder="Project Description" required></textarea>
      <input type="file" @change="handleFileUpload" required>
      <button type="submit">Add Portfolio Item</button>
    </form>

    <!-- Table to display portfolio items -->
    <div v-if="portfolios.length">
      <h2>Portfolio List</h2>
      <table>
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="portfolio in portfolios" :key="portfolio.id">
            <td>{{ portfolio.title }}</td>
            <td>{{ portfolio.description }}</td>
            <td>
              <img :src="`/storage/${portfolio.image}`" alt="Image" width="100">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      title: '',
      description: '',
      image: null
    };
  },
  methods: {
    handleFileUpload(event) {
      this.image = event.target.files[0];
      console.log('Selected file:', this.image);
    },
    addPortfolio() {
      if (!this.image) {
        alert("Please upload an image.");
        return;
      }

      let formData = new FormData();
      formData.append('title', this.title);
      formData.append('description', this.description);
      formData.append('image', this.image);

      axios.post('http://127.0.0.1:8000/api/portfolios', formData, {
        headers: {
          'Content-Type': 'multipart/form-data',
        },
      })
        .then(response => {
          console.log('Portfolio added', response.data);
          // Reset form fields
          this.title = '';
          this.description = '';
          this.image = null;
        })
        .catch(error => {
          console.error("There was an error adding the portfolio:", error);
        });
    },
       fetchPortfolios() {
      axios.get('http://127.0.0.1:8000/api/portfolios')
        .then(response => {
          this.portfolios = response.data; // Store fetched portfolios in the array
        })
        .catch(error => {
          console.error("There was an error fetching portfolios:", error);
        });
    },
      mounted() {
    // Fetch the portfolios when the component is loaded
    this.fetchPortfolios();
  }
  }
};
</script>

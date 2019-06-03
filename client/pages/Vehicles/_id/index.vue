<template>
  <div class="single-post-page">
    <section class="post-list">
   <article>
      <div
        class="post-thumbnail"
        :style="{backgroundImage: 'url(' + vehicles.image + ')'}"></div>

      <div class="post-content">
        <h1>Model: {{ vehicles.model }}</h1>
        <h1>Vrsta: {{ vehicles.type }}</h1>
        <h1>Konjaža: {{ vehicles.engine_power }}</h1>
        <h1>Broj Vrata: {{ vehicles.door_number }}</h1>
        <h1>Opis: {{ vehicles.description }}</h1>
        <h1>Dostupnost: {{ vehicles.status }}</h1>
      </div>
    </article>
   </section>
</div>
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return {
            vehicles: {},
        }
    },
    methods: {
    },
    created(){
      axios.get('http://localhost/api/vehicles/' + this.$route.params.id)
        .then((res) => {
          console.log(res);
          this.vehicles = res.data.data;
        })
        .catch((error) => {
          // eslint-disable-next-line
          console.error(error);
        });
      
    },
}
</script>


<style scoped>
.single-post-page {
  margin-top: 20px;
  padding: 30px;
  text-align: center;
  box-sizing: border-box;
}
.post-preview {
  border: 1px solid #ccc;
  box-shadow: 0 2px 2px #ccc;
  background-color: white;
  width: 90%;
}

.post {
  width: 100%;
}
.post-list {
  background-color: #ccc;
  display: flex;
  padding: 20px;
  box-sizing: border-box;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

@media (min-width: 768px) {
  .post {
    width: 600px;
    margin: auto;
  }
}

.post-title {
  margin: 0;
}

.post-details {
  padding: 10px;
  box-sizing: border-box;
  border-bottom: 3px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}


.post-thumbnail {
  width: 100%;
  height: 200px;
  background-position: center;
  background-size: cover;
}

.post-content {
  padding: 10px;
  text-align: center;
}

a:hover .post-content,
a:active .post-content {
  background-color: #ccc;
}

@media (min-width: 768px) {
  .post-details {
    flex-direction: row;
  }
}

.post-detail {
  color: rgb(88, 88, 88);
  margin: 0 10px;
}

.post-feedback a {
  color: red;
  text-decoration: none;
}

.post-feedback a:hover,
.post-feedback a:active {
  color: salmon;
}
</style>

<template>
  <div class="single-post-page">
   <article>
      <div
        class="post-thumbnail"
        :style="{backgroundImage: 'url(' + vehicles.image + ')'}"></div>

      <div class="post-content">
        <h1>Vrsta: {{ vehicles.type }}</h1>
        <h1>Konjaža: {{ vehicles.engine_power }}</h1>
        <h1>Broj Vrata: {{ vehicles.door_number }}</h1>
        <h1>Opis: {{ vehicles.description }}</h1>
        <h1>Dostupnost: {{ vehicles.status }}</h1>
      </div>
    </article>
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
    getVehicles() {
      axios.get('http://localhost/api/vehicles/')
        .then((res) => {
          console.log(res);
          this.vehicles = res.data.data;
        })
        .catch((error) => {
          // eslint-disable-next-line
          console.error(error);
        });
      },
    },
    created(){
        this.getVehicles();
    },
 
    props: {
    id: {
      type: Number,
      required: true
    },
    type: {
      type: String,
      required: true
    },
    engine_power: {
      type: String,
      required: true
    },
    door_number :{
        type:String,
        required: true
    },
    image : {
        type:String,
        required:true
    },
    description :{
        type:String,
        required:true
    },
    status: {
        type:String,
        required:true
    }
  },
  components: {
  },
}
</script>


<style scoped>
.single-post-page {
  padding: 30px;
  text-align: center;
  box-sizing: border-box;
}

.post {
  width: 100%;
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

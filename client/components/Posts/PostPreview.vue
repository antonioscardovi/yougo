<template>
  <div class="post-preview">

    <article class="vehicle">
      <div
        class="post-thumbnail"
        :style="{backgroundImage: 'url(' + image + ')'}"></div>

      <div class="post-content">
         <!-- <p> Vrsta: {{ type }}</p> -->
         <h3>  {{model_of_vehicle.make_of_vehicle.name}} {{model_of_vehicle.name}}</h3>
        <!-- <p>Konjaža: {{ engine_power }}</p> -->
        <!-- <p>Broj Vrata: {{ door_number }}</p> -->
        <p><img src="~/assets/images/car-door.png" alt="Broj vratiju"> {{ door_number }}</p>
        <p><img src="~/assets/images/gearbox.png" alt="Mjenjač"> {{ gearbox }}</p>
        <!-- <p>Opis: {{ description }}</p> -->
        <p>Dostupnost: {{ status }}</p>
        <!-- <p>Marka Vozila: {{model_of_vehicle.make_of_vehicle.name}}</p> -->
        <!-- <p>Model: {{model_of_vehicle.name}}</p> -->
        <nuxt-link :to="'Vehicles/' + id"><button>Detalji</button></nuxt-link>
      </div>
      <div class="price"><p> Cijena: {{ price }} kn</p></div>
    </article>
  </div>
</template>

<script>
export default {
  name: 'PostPreview',
  props: {
    id: {
      type: Number,
      required: true
    },
    type: {
      type: String,
      required: true
    },
    price: {
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
    gearbox: {
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
    },
    model_of_vehicle:{
      type:Object,
      required:true,
       make_of_vehicle:{
        type:Object,
         required:true
         }
    }
  },
  computed: {
    postLink() {
      return this.isAdmin ? '/admin/' + this.id : '/Vehicles/' + this.id
    }
  }
}
</script>


<style scoped>
.vehicle {
  display:flex;
}

.post-preview {
  border: 1px solid #ccc;
  box-shadow: 0 2px 2px #ccc;
  background-color: white;
  width: 90%;
}

a {
  text-decoration: none;
  color: black;
}

@media (min-width: 850px) {
  .post-preview {
    /* width: 400px; */
    width: 90%;
    margin: 10px;
  }
}

.post-thumbnail {
  width: 100%;
  /* height: 200px; */
  height: 200px;
  background-position: center;
  background-size: cover;
  flex:1;
}

.post-content {
  padding: 10px;
  text-align: center;
  flex:2;
}
.price {
  flex:1;
}

a:hover .post-content,
a:active .post-content {
  background-color: #ccc;
}
</style>

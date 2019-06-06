<template>
  <nuxt-link :to="'Vehicles/' + id" class="post-preview">
    <article>
      <div
        class="post-thumbnail"
        :style="{backgroundImage: 'url(' + image + ')'}"></div>

      <div class="post-content">
         <h1> Vrsta: {{ type }}</h1>
        <h1>Konjaža: {{ engine_power }}</h1>
        <h1>Broj Vrata: {{ door_number }}</h1>
        <h1>Mjenjač: {{ gearbox }}</h1>
        <h1>Opis: {{ description }}</h1>
        <h1>Dostupnost: {{ status }}</h1>
        <h1>Marka Vozila: {{model_of_vehicle.make_of_vehicle.name}}</h1>
        <h1>Model: {{model_of_vehicle.name}}</h1>
      </div>
    </article>
  </nuxt-link>
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
    width: 400px;
    margin: 10px;
  }
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
</style>

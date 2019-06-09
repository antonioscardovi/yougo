<template>
  <div class="post-preview">

    <article class="vehicle">

      <div class="thumb">
        <div
        class="post-thumbnail"
        :style="{backgroundImage: 'url(https://media.gettyimages.com/photos/white-car-with-black-tires-on-a-white-background-picture-id174823142?b=1&k=6&m=174823142&s=612x612&w=0&h=FWU7ooeIUHPu9T-EuYkeQ_oQBQ0TJACvDtHkoTY7uqo=)'}"></div>
        <!-- <div
        class="post-thumbnail"
        :style="{backgroundImage: 'url(' + image + ')'}"></div> -->
      </div>

      <div class="post-content">
         <!-- <p> Vrsta: {{ type }}</p> -->
         <h3>  {{model_of_vehicle.make_of_vehicle.name}} {{model_of_vehicle.name}}</h3>
        <!-- <p>Konjaža: {{ engine_power }}</p> -->
        <!-- <p>Broj Vrata: {{ door_number }}</p> -->
        <p>Oprema vozila:</p>
        <ul>
        <li><img src="~/assets/images/car-door.png" alt="Broj vratiju">  &nbsp;&nbsp;  {{ door_number }}</li>
        <li><img src="~/assets/images/gearbox.png"  alt="Mjenjač">  &nbsp;&nbsp;  {{ gearbox }}</li>
        <li> <img src="~/assets/images/snowflake.png" alt="auto klima"> &nbsp;&nbsp;  {{ a_ac }}</li>
        <li> snaga motora: &nbsp; {{ engine_power }} kW</li>
        <!-- <p>Opis: {{ description }}</p> -->
        <li>Dostupnost:  &nbsp;  {{ status }}</li>
        </ul>
        <!-- <p>Marka Vozila: {{model_of_vehicle.make_of_vehicle.name}}</p> -->
        <!-- <p>Model: {{model_of_vehicle.name}}</p> -->
        <div class="btn">
        <nuxt-link :to="'Vehicles/' + id"><button>Detalji</button></nuxt-link></div>
      </div>
      <div class="price">
        <div class="price-section">
        <h4 style="color:#ff6002;"> Cijena:</h4>
         <h2>{{ price }} HRK</h2><h5>NA DAN</h5>
         </div>
      </div>
    </article>
  </div>
</template>

<script>
export default {
  data() {
    return {
      a_ac:"Auto A/C"
    }
  },
  name: 'PostPreview',
  props: {
    id: {
      type: Number,
      required: true
    },
    auto_ac: {
      type:Boolean,
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
    },
    ac() {
      if(props.auto_ac==false){
        return this.a_ac="N/A";
      }
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
.thumb {
  height: 280px;
  flex:4;
  /* background-position: center;
  background-size: cover; */
}
.post-thumbnail {
  width: 90%;
  height: 90%;
  border: 1px solid #ccc;
  /* height: 250px; */
  background-position: center;
  background-size: cover;
  margin: 10px;
  /* flex:2; */
}

.post-content {
  padding: 10px;
  /* border: 1px solid #ccc; */
   margin: 10px;
  /* text-align: center; */
  flex:3;
}

.post-content h3 {
  border-bottom: 1px solid #ccc;
  /* margin-bottom: 1rem; */
}
.post-content li {
  margin: 5px 0;
}
.post-content p {
  border-bottom: 1px solid #ccc;
}
.post-content .btn {
  width:100%;
  display: flex;
  justify-content: center;
}
.post-content button {
padding: 0.5rem 1rem;
margin-top: 10px;
background-color:#ff6002;
border-radius: 30px;
color: #fff;

}
.price {
  text-align: center;
  flex:4;
}
.price-section {
  margin: 4rem 1rem;
  border-radius: 30px;
  border: 2px solid #ff6002;
}

a:hover .post-content,
a:active .post-content {
  background-color: #ccc;
}
</style>

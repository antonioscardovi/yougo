<template>
<div class="container">
    <section class="post-list">
      <PostPreview
        v-for="vehicle in Vehicles"
        :key="vehicle.id"
        :id="vehicle.id"
        :type="vehicle.type"
        :engine_power="vehicle.engine_power"
        :door_number="vehicle.door_number"
        :image="vehicle.image"
        :description="vehicle.description"
        :status="vehicle.status"
        :make_of_vehicle="vehicle.make_of_vehicle"
        :model_of_vehicle="vehicle.model_of_vehicle" />
    </section>
  </div>
</template>
<script>
import PostPreview from '@/components/Posts/PostPreview'
import axios from 'axios'
export default {
    data(){
        return {
            Vehicles: [],
            checkedVehicles: [],
            types: ['electric', 'supercar', 'hatchback', 'limousine'],
            transmission: ['automatic', 'manual'],
            fVehicles: [],

        }
    },
    computed: {
      // filteredVehicles() {
      //   if(!this.checkedVehicles.length){
      //     return this.Vehicles;
      //   }
      //   else if(this.checkedVehicles.filter(x=>x == 'automatic' || x == 'manual').length <= 0){
      //     return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.type))
      //   }
      //   else if(this.checkedVehicles.filter(x=>x == 'electric' || x == 'supercar' || x == 'hatchback' || x == 'limousine').length <= 0){
      //     return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.gearbox));
      //   }
      //   else{
      //     return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.type)).filter(j=>this.checkedVehicles.includes(j.gearbox));
      //   }

      // },
    },
    methods: {
    getVehicles() {
      axios.get('http://localhost/api/vehicles')
        .then((res) => {
          // console.log(res);
          this.Vehicles = res.data.data;
        })
        .catch(error => {
          // eslint-disable-next-line
          console.error(error);
        });
      },

    // ispis() {
    //     this.checkedVehicles=this.Vehicles.filter(function(el) {
    //       return el.status=='available';
    //     })
    //   }
    },

    created(){
        this.getVehicles();
    },
  components: {
    PostPreview
  }
}
</script>
<style scoped>
.post-list {
  display: flex;
  padding: 20px;
  box-sizing: border-box;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
.forms {
  display: flex;
  justify-content: space-evenly;
}
.form-wrap {
  background-color: #ccc;
  padding:10px;
  border-radius:10px;
}
.prazno {
  height: 100px;
}
</style>

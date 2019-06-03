<template>
<div class="container">
   <div class="prazno"></div>
   <div class="forms">
      <div class="form-wrap">
        <h3>Types</h3>
        <ul>
        <li v-for="tip in types" :key="tip">
        <input type="checkbox" v-model="checkedVehicles" v-bind:value="tip"> {{ tip }}
        </li>
        </ul>
      </div>
      <div class="form-wrap">
        <h3>Transmission</h3>
        <ul>
        <li v-for="trans in transmission" :key="trans">
        <input type="checkbox" v-model="checkedVehicles" v-bind:value="trans"> {{ trans }}
        </li>
        </ul>
      </div>
    </div>

    <section class="post-list">



      <PostPreview
        v-for="vehicle in filteredVehicles"
        :key="vehicle.id"
        :id="vehicle.id"
        :type="vehicle.type"
        :engine_power="vehicle.engine_power"
        :door_number="vehicle.door_number"
        :image="vehicle.image"
        :description="vehicle.description"
        :status="vehicle.status" />
    </section>
  </div>
</template>
<script>
import PostPreview from '@/components/Posts/PostPreview'
import axios from 'axios';
export default {
    data(){
        return {
            Vehicles: [],
            checkedVehicles: [],
            types: ['electric', 'supercar', 'hatchback', 'limousine'],
            transmission: ['automatic', 'manual'],

        }
    },
    computed: {
      filteredVehicles() {
        if(!this.checkedVehicles.length)
          return this.Vehicles

          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.type))
      },
        filteredVehiclesGear() {
          if(!this.checkedVehicles.length)
           return this.Vehicles

           return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.gear))
      }
    },
    methods: {
    getVehicles() {
      axios.get('http://localhost/api/vehicles')
        .then((res) => {
          // console.log(res);
          this.Vehicles = res.data.data;
        })
        .catch((error) => {
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
  },
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

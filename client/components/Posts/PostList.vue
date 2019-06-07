<template>
<div class="container">

   <!-- <div class="forms">
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
      <div class="form-wrap">
        <h3>Status</h3>
        <ul>
        <li v-for="stat in status" :key="stat">
        <input type="checkbox" v-model="checkedVehicles" v-bind:value="stat"> {{ stat }}
        </li>
        </ul>
      </div>
    </div> -->

      <div class="forms">
      <form>
      <div class="multiselect">
        <div class="selectBox" @click="showCheckboxes1()">
          <select>
            <option>Tip Vozila</option>
          </select>
          <div class="overSelect"></div>
        </div>
        <div id="checkboxes1">
          <ul>
            <li v-for="tip in types" :key="tip">
            <input type="checkbox"  v-model="checkedVehicles" v-bind:value="tip"> {{ tip }}
            </li>
          </ul>
        </div>
      </div>
      </form>

      <form>
      <div class="multiselect">
        <div class="selectBox" @click="showCheckboxes2()">
          <select>
            <option>Vrsta Mjenjača</option>
          </select>
          <div class="overSelect"></div>
        </div>
        <div id="checkboxes2">
          <ul>
            <li v-for="trans in transmission" :key="trans">
            <input type="checkbox" v-model="checkedVehicles" v-bind:value="trans"> {{ trans }}
            </li>
          </ul>
        </div>
      </div>
    </form>

      <form>
      <div class="multiselect">
        <div class="selectBox" @click="showCheckboxes3()">
          <select>
            <option>Dostupnost</option>
          </select>
          <div class="overSelect"></div>
        </div>
        <div id="checkboxes3">
          <ul>
            <li v-for="stat in status" :key="stat">
            <input type="checkbox" v-model="checkedVehicles" v-bind:value="stat"> {{ stat }}
            </li>
          </ul>
        </div>
      </div>
    </form>
    </div>

    <section class="post-list">

      <PostPreview
        v-for="vehicle in filteredVehicles"
        :key="vehicle.id"
        :id="vehicle.id"
        :type="vehicle.type"
        :price="vehicle.price"
        :gearbox="vehicle.gearbox"
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
            status: ['available', 'unavailable'],
            fVehicles: [],
            expanded1: false,
            expanded2: false,
            expanded3: false

        }
    },
    computed: {
      filteredVehicles() {
        if(!this.checkedVehicles.length){
          return this.Vehicles;
        }
        else if(this.checkedVehicles.filter(x=>x == 'electric' || x == 'supercar' || x == 'hatchback' || x == 'limousine').length <= 0 && this.checkedVehicles.filter(x=>x == 'available' || x == 'unavailable').length <= 0){
          console.log("gearbox");
          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.gearbox));
        }

        else if(this.checkedVehicles.filter(x=>x == 'automatic' || x == 'manual').length <= 0 && this.checkedVehicles.filter(x=>x == 'available' || x == 'unavailable').length <= 0){
          console.log("type");
          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.type));
        }

        else if(this.checkedVehicles.filter(x=>x == 'electric' || x == 'supercar' || x == 'hatchback' || x == 'limousine').length <= 0 && this.checkedVehicles.filter(x=>x == 'automatic' || x == 'manual').length <= 0){
          console.log("status");
          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.status));
        }
        else if(this.checkedVehicles.filter(x=>x == 'available' || x == 'unavailable').length <= 0){
          console.log("gearbox - type");
          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.gearbox)).filter(j=>this.checkedVehicles.includes(j.type));
        }

        else if(this.checkedVehicles.filter(x=>x == 'electric' || x == 'supercar' || x == 'hatchback' || x == 'limousine').length <= 0){
          console.log("gearbox - status");
          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.gearbox)).filter(j=>this.checkedVehicles.includes(j.status));
        }
        else if(this.checkedVehicles.filter(x=>x == 'automatic' || x == 'manual').length <= 0){
          console.log("type - status");
          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.type)).filter(j=>this.checkedVehicles.includes(j.status));
        }
        else{
          console.log("else");
          return this.Vehicles.filter(j=>this.checkedVehicles.includes(j.type)).filter(j=>this.checkedVehicles.includes(j.gearbox)).filter(j=>this.checkedVehicles.includes(j.status));
        }

      },
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
      showCheckboxes1() {
        var checkboxes = document.getElementById("checkboxes1");
        if (!this.expanded1) {
          checkboxes.style.display = "block";
          this.expanded1 = true;
        } else {
          checkboxes.style.display = "none";
          this.expanded1 = false;
        }
      },
      showCheckboxes2() {
        var checkboxes = document.getElementById("checkboxes2");
        if (!this.expanded2) {
          checkboxes.style.display = "block";
          this.expanded2 = true;
        } else {
          checkboxes.style.display = "none";
          this.expanded2 = false;
        }
      },
      showCheckboxes3() {
        var checkboxes = document.getElementById("checkboxes3");
        if (!this.expanded3) {
          checkboxes.style.display = "block";
          this.expanded3 = true;
        } else {
          checkboxes.style.display = "none";
          this.expanded3 = false;
        }
      },
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
  background:#ccc;
}
.form-wrap {
  background-color: #ccc;
  padding:10px;
  margin: 20px;
  border-radius:10px;
}
/* _____________________________________________________________________________________________ */
.multiselect {
  width: 200px;
  height:200px;
}

ul {
  background:#0054dB;
  border-bottom-left-radius: 15px;
  border: none;
  color:white;
  padding-bottom: 10px;
}
.multiselect li {
  list-style-type: none;
  line-height: 2rem;
  font-size: 1.2rem;
}
select {
  padding:0.5rem 1rem;
}
.selectBox {
  position: relative;

}

.selectBox select {
  width: 100%;
  /* font-weight: bold; */
  font-size: 1.2rem;
  text-align: center;
  margin-top: 20px;
  line-height:1.7rem;
  padding:0.5 0.5rem;
  border:none;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes1, #checkboxes2, #checkboxes3 {
  display: none;
  /* border: 1px #dadada solid; */
}

#checkboxes1 label, #checkboxes2 label, #checkboxes3 label  {
  display: block;
}

#checkboxes1 label:hover, #checkboxes2 label:hover, #checkboxes3 label:hover   {
  background-color: #1e90ff;
}

</style>

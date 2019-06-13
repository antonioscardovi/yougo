<template>
  <div class="container">
    <div class="forms">
      <div class="form-wrap-1">
        <h3>Types</h3>
        <ul>
          <li v-for="tip in types" :key="tip">
            <label>
              <input
                type="checkbox"
                style="display:none"
                v-model="checkedVehicles"
                v-bind:value="tip"
              >
              <span>{{ tip }}</span>
            </label>
          </li>
        </ul>
      </div>
      <div class="form-wrap-2">
        <h3>Transmission</h3>
        <ul>
          <li v-for="trans in transmission" :key="trans">
            <label>
              <input
                type="checkbox"
                style="display:none"
                v-model="checkedVehicles"
                v-bind:value="trans"
              >
              <span>{{ trans }}</span>
            </label>
          </li>
        </ul>
      </div>
      <div class="form-wrap-3">
        <h3>Datum Najma</h3>
         <form>
                <div class="form-group">
                  <div class="date-pick">
                  <label for="date">Datum iznajmljivanja:</label><br>
                  <date-pick v-model="form.fromDate" :pickTime="true" :format="'YYYY-MM-DD'"></date-pick>

                <br>

                <div class="form-group">
                  <label for="date">Datum vracanja:</label><br>
                  <date-pick v-model="form.toDate" :pickTime="true" :format="'YYYY-MM-DD'"></date-pick>
                </div>
                </div>
                </div>
                <!-- <br>
                <br>
                <button @click="test()">Filtriraj</button> -->
              </form>



        <ul>
          <li v-for="stat in status" :key="stat">
            <label>
              <input
                type="checkbox"
                style="display:none"
                v-model="checkedVehicles"
                v-bind:value="stat"
              >
              <span>{{ stat }}</span>
            </label>
          </li>
        </ul>
      </div>
    </div>

    <!-- <div class="forms">
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
    </div>-->
    <section class="to_post-list">
      <PostPreview v-for="vehicle in filteredVehicles" :key="vehicle.id" :vehicle="vehicle"/>
    </section>
  </div>
</template>
<script>
import PostPreview from '@/components/Posts/PostPreview'
import axios from 'axios'
import DatePick from 'vue-date-pick'
import 'vue-date-pick/dist/vueDatePick.css'


export default {
  data() {
    return {
      Vehicles: {},
      checkedVehicles: [],
      types: ['electric', 'supercar', 'hatchback', 'limousine'],
      transmission: ['automatic', 'manual'],
      status: ['available', 'unavailable'],
      fVehicles: [],
      // reservations: [],
      form: {
        fromDate:'',
        toDate:'',
      },
      expanded1: false,
      expanded2: false,
      expanded3: false,




    }
  },
  computed: {
    filteredVehicles() {
      if(this.Vehicles[1]){
        if(this.form.fromDate != '' && this.form.toDate != ''){
        this.Vehicles.forEach(element => {
           element.reservations.forEach(el => {
             //var a = Date(el.from_date);
             //var b = Date(this.form.fromDate);
             //console.log(a, b, a == b);
             // (Date(el.from_date) >= Date(this.form.fromDate) || Date(el.from_date) <= Date(this.form.toDate)) || (Date(el.to_date) >= Date(this.form.fromDate) || Date(el.to_date) <= Date(this.form.toDate))
             if((el.from_date >= this.form.fromDate && el.from_date <= this.form.toDate) || (el.to_date >= this.form.fromDate && el.to_date <= this.form.toDate)){
               element.status = 'unavailable';
             }
             else{
               element.status = 'available';
             }
           })
           console.log(element.id, element.status);
        });
      }
      }


      if (!this.checkedVehicles.length) {
        return this.Vehicles
      } else if (
        this.checkedVehicles.filter(
          x =>
            x == 'electric' ||
            x == 'supercar' ||
            x == 'hatchback' ||
            x == 'limousine'
        ).length <= 0 &&
        this.checkedVehicles.filter(x => x == 'available'|| x == 'unavailable')
          .length <= 0
      ) {
        //console.log(this.form.fromDate)
        return this.Vehicles.filter(j =>
          this.checkedVehicles.includes(j.gearbox)
        )
      } else if (
        this.checkedVehicles.filter(x => x == 'automatic' || x == 'manual')
          .length <= 0 &&
        this.checkedVehicles.filter(x => x == 'available'|| x == 'unavailable')
          .length <= 0
      ) {
        console.log('type')
        return this.Vehicles.filter(j => this.checkedVehicles.includes(j.type))
      } else if (
        this.checkedVehicles.filter(
          x =>
            x == 'electric' ||
            x == 'supercar' ||
            x == 'hatchback' ||
            x == 'limousine'
        ).length <= 0 &&
        this.checkedVehicles.filter(x => x == 'automatic' || x == 'manual')
          .length <= 0
      ) {
        console.log('status')
        return this.Vehicles.filter(j =>
          this.checkedVehicles.includes(j.status)
        )
      } else if (
        this.checkedVehicles.filter(x => x == 'available'|| x == 'unavailable')
          .length <= 0
      ) {
        console.log('gearbox - type')
        return this.Vehicles.filter(j =>
          this.checkedVehicles.includes(j.gearbox)
        ).filter(j => this.checkedVehicles.includes(j.type))
      } else if (
        this.checkedVehicles.filter(
          x =>
            x == 'electric' ||
            x == 'supercar' ||
            x == 'hatchback' ||
            x == 'limousine'
        ).length <= 0
      ) {
        console.log('gearbox - status')
        return this.Vehicles.filter(j =>
          this.checkedVehicles.includes(j.gearbox)
        ).filter(j => this.checkedVehicles.includes(j.status))
      } else if (
        this.checkedVehicles.filter(x => x == 'automatic' || x == 'manual')
          .length <= 0
      ) {
        console.log('type - status')
        return this.Vehicles.filter(j =>
          this.checkedVehicles.includes(j.type)
        ).filter(j => this.checkedVehicles.includes(j.status))
      } else {
        console.log('else')
        return this.Vehicles.filter(j => this.checkedVehicles.includes(j.type))
          .filter(j => this.checkedVehicles.includes(j.gearbox))
          .filter(j => this.checkedVehicles.includes(j.status))
      }
    }
  },
  methods: {
    getVehicles() {
      axios
        .get('http://localhost/api/vehicles')
        .then(res => {
          this.Vehicles = res.data.data;
        })
        .catch(error => {
          // eslint-disable-next-line
          console.error(error)
        })
    },
    // getReservations() {
    //   axios
    //     .get('http://localhost/api/reservations')
    //     .then(res => {
    //       this.reservations = res.data.data
    //       // console.log(this.reservations)
    //     })
    //     .catch(error => {
    //       // eslint-disable-next-line
    //       console.error(error)
    //     })
    // },
    test() {
      console.log(this.form.fromDate)
    },
    showCheckboxes1() {
      var checkboxes = document.getElementById('checkboxes1')
      if (!this.expanded1) {
        checkboxes.style.display = 'block'
        this.expanded1 = true
      } else {
        checkboxes.style.display = 'none'
        this.expanded1 = false
      }
    },
    showCheckboxes2() {
      var checkboxes = document.getElementById('checkboxes2')
      if (!this.expanded2) {
        checkboxes.style.display = 'block'
        this.expanded2 = true
      } else {
        checkboxes.style.display = 'none'
        this.expanded2 = false
      }
    },
    showCheckboxes3() {
      var checkboxes = document.getElementById('checkboxes3')
      if (!this.expanded3) {
        checkboxes.style.display = 'block'
        this.expanded3 = true
      } else {
        checkboxes.style.display = 'none'
        this.expanded3 = false
      }
    }
  },
  created() {
    this.getVehicles()
    // this.getReservations()
  },
  components: {
    PostPreview,
     DatePick
  }
}
</script>
<style scoped>
.container {
  display: flex;
}

.date-pick {
  width:200px;
}
.form-wrap-3 .form-group {
  padding-bottom:10px;
}

.forms span {
  background: #fff;
  /* margin: 5px 0;
  padding:5px; */
  border-radius: 5px;
  display: inline-block;
  width: 80%;
  text-align: center;
  border: 1px solid #333;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
input[type='checkbox']:checked ~ span {
  background: #0054db;
  color: #fff;
}

.post-list {
  display: flex;
  padding: 20px;
  box-sizing: border-box;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  flex: 3;
}
.forms {
  /* display: flex; */
  justify-content: space-evenly;
  background: #333;
  /* flex:1; */
  min-width: 250px;
  /* margin-bottom: 200px; */
}
.form-wrap-1 {
  background-color: #333;
  padding: 20px auto;
  margin: 20px 30px;
  /* border-radius:10px; */
  position: -webkit-sticky;
  position: sticky;
  top: 95px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.form-wrap-2 {
  background-color: #333;
  padding: 20px auto;
  margin: 20px 30px;
  /* border-radius:10px; */
  position: -webkit-sticky;
  position: sticky;
  top: 355px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.form-wrap-3 {
  background-color: #333;
  padding: 20px auto;
  margin: 20px 30px;
  /* border-radius:10px; */
  position: -webkit-sticky;
  position: sticky;
  top: 530px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.form-wrap-3 form{
  text-align: center;
  background: #fff;

}

.form-wrap-3 form datepick {
  margin: 0px 5px;
}

.forms h3 {
  color: #fff;
  text-align: center;
  padding-bottom: 10px;
  background-color: #1e90ff;
}
/* _____________________________________________________________________________________________ */
.multiselect {
  width: 200px;
  height: 200px;
}

ul {
  background: #fff;
  border-bottom-left-radius: 10px;
  border: none;
  color: #333;
  padding-bottom: 10px;
  padding-top: 10px;
}

li {
  list-style-type: none;
  line-height: 2rem;
  /* font-size: 1.2rem; */
  margin: 10px 0;
}
span:hover {
  background-color: #1e90ff;
  cursor: pointer;
}

select {
  padding: 1rem 1rem;
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
  line-height: 1.7rem;
  padding: 0.5 0.5rem;
  border: none;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes1,
#checkboxes2,
#checkboxes3 {
  display: none;
  /* border: 1px #dadada solid; */
}

#checkboxes1 label,
#checkboxes2 label,
#checkboxes3 label {
  display: block;
}

#checkboxes1 label:hover,
#checkboxes2 label:hover,
#checkboxes3 label:hover {
  background-color: #1e90ff;
}
</style>

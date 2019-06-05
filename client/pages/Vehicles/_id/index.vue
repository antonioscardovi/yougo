<template>
<div>
      <TheSidenav/>

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
        <h1>Marka Vozila: {{vehicles.model_of_vehicle.make_of_vehicle.name}}</h1>
        <h1>Model: {{vehicles.model_of_vehicle.name}}</h1>
        <h1>Dostupnost: {{ vehicles.status }}</h1>

         <form @submit.prevent="rezerviraj">
          <div class="form-group">

            <label for="date">3.Datum znajmljivanja: </label>
                    <date-pick
                  v-model="form.date"
                  :pickTime="true"
                  :format="'DD-MM-YYYY HH:mm'"
                 ></date-pick>
          </div><br>

          <div class="form-group">
            <label for="date">4.Datum vracanja: </label>
                   <date-pick
                    v-model="form.date2"
                    :pickTime="true"
                    :format="'DD-MM-YYYY HH:mm'"
                    
               ></date-pick>
          </div><br>
              
          <button>Rezerviraj</button>       
        </form>
         
      </div>
    </article>
   </section>
</div>
</div>
</template>

<script>
import TheSidenav from '~/components/Navigation/TheSidenav.vue'
import axios from 'axios';
import DatePick from 'vue-date-pick';
import 'vue-date-pick/dist/vueDatePick.css';
export default {
    data(){
        return {
          form:{
            date: '',
            date2: '',
            days:'',
            customer_id:'11'
          },
            vehicles: {
              model_of_vehicle:{
                make_of_vehicle:{}
              }
            },
        }
    },

/*
    console.log("Datumi:");
     console.log(this.date, this.date2);
     var dateP = new Date(this.date);
     console.log(dateP);
     var dateK = new Date(this.date2);
     var rezult = dateK.getDate() - dateP.getDate();
     console.log(rezult);
*/
  
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
      
      components: {
         TheSidenav,
         DatePick
      },
      methods :{
            async rezerviraj() {

              var dateP = new Date(this.form.date);
              var dateK = new Date(this.form.date2);
              var num = dateK.getDate() - dateP.getDate();
              this.form.days = num.toString();
        try {
          //console.log('evo me ovdje')
          const response = await this.$axios.post('http://localhost/api/vehicles/' + this.$route.params.id, {
            headers: {
              'Access-Control-Allow-Origin': '*',
              'Content-Type': 'application/json',
            },
            
            days: this.form.days,
            customer_id: this.form.customer_id,
          })
        // console.log('got response', response)
        } catch (e) {
          console.log('error', e.message, response)
        }
        //   this.$auth.login({ data: this.form }
      }
     }

      
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
  margin-top: 40px;
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

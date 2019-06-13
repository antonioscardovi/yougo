<template>
  <div>
    <TheSidenav/>

    <div class="single-vehicle-page">
      <section class="vehicle-list">
        <div v-if="isLoading">Loading...</div>

        <article v-else>
          <div class="description">
            <div class="one-image" :style="{backgroundImage: 'url(' + image + ')'}"></div>
            <div class="post-content">
              <i class="fa fa-info-circle" style="font-size:26px;color:#ff6002;padding-right:3%"></i>
              <br>
              <h4>Detalji</h4>
              <ul>
                <br>
                <li>Vrsta: {{ vehicle.type }}</li>
                <li>Konjaža: {{ vehicle.engine_power }}</li>
                <li>Broj Vrata: {{ vehicle.door_number }}</li>
                <li>Marka Vozila: {{vehicle.model_of_vehicle.make_of_vehicle.name}}</li>
                <li>Model: {{vehicle.model_of_vehicle.name}}</li>
                <li>Mjenjač: {{vehicle.gearbox}}</li>
                <li>Dostupnost: {{ vehicle.status }}</li>
              </ul>
              <div class="opis">
                <i
                  class="fa fa-asterisk"
                  style="font-size:26px;color:#ff6002;padding-right:3%;margin-top:3%"
                ></i>
                <h4 class="description-title" style="margin-left:7%">Opis:</h4>
                <p>{{ vehicle.description }}</p>
              </div>
            </div>
          </div>
          <template v-if="vehicle.status === 'available'">
            <br>

            <!-- <div class="botun">
              <button type="submit" class="btn">
          <a id="link" href="/Vehicles">
            <span>REZERVIRAJ!</span>
          </a>
        </button>
            </div>-->

            <div class="rezervacijaa">
              <form @submit.prevent="alert">
                <div class="form-group">
                  <label for="date">Datum iznajmljivanja:</label>
                  <date-pick
                    class="input"
                    v-model="form.fromDate"
                    :pickTime="true"
                    :format="'YYYY-MM-DD HH:mm:ss'"
                  ></date-pick>
                </div>
                <br>

                <div class="form-group">
                  <label for="date">Datum vracanja:</label>
                  <date-pick
                    class="input"
                    v-model="form.toDate"
                    :pickTime="true"
                    :format="'YYYY-MM-DD HH:mm:ss'"
                  ></date-pick>
                </div>
                <br>
                <h4>Dani Rezervacije: {{ numDays }}</h4>
                <br>
                <button @click="alert()" class="btn">Potvrdi Rezervaciju</button>
              </form>
            </div>
          </template>

          <template v-else>
            <br>
            <h1>Vozilo je trenutačno iznajmljeno</h1>
          </template>
          <div class="test">
            <div
              v-for="(image, index) in vehicle.images"
              :key="index"
              class="vehicle-thumbnail"
              :style="{backgroundImage: 'url(' + image.filename + ')'}"
            ></div>
          </div>
        </article>
      </section>
    </div>
  </div>
</template>

<script>
import TheSidenav from '~/components/Navigation/TheSidenav.vue'
import axios from 'axios'
import DatePick from 'vue-date-pick'
import 'vue-date-pick/dist/vueDatePick.css'
import Swal from 'sweetalert2/dist/sweetalert2.js'
import swal from 'sweetalert2/dist/sweetalert2.all.min.js'

export default {
  data() {
    return {
      form: {
        fromDate: '',
        toDate: ''
      },
      isLoading: true,
      vehicle: undefined
    }
  },
  computed: {
    image() {
      return this.vehicle.images[0].filename
    },
    numDays() {
      console.log('racunam numDays')
      if (this.form.fromDate === '' || this.form.toDate === '')
        return 'Odaberite datum'

      console.log({
        toDate: this.form.toDate,
        fromDate: this.form.fromDate
      })

      return (
        (new Date(this.form.toDate) - new Date(this.form.fromDate)) /
        (24 * 60 * 60 * 1000)
      )
    },
    totalPrice() {
      if (this.vehicle === undefined) return -1

      return this.numDays * this.vehicle.price
    }
  },

  created() {
    axios
      .get('//localhost/api/vehicles/' + this.$route.params.id)
      .then(res => {
        console.log(res)
        this.vehicle = res.data.data
        this.isLoading = false
      })
      .catch(error => {
        // eslint-disable-next-line
        console.error(error)
      })
  },

  components: {
    TheSidenav,
    DatePick
  },
  methods: {
    alert() {
      Swal.fire({
        title: 'Potvrdite Rezervaciju?',
        text: 'Rezervirajte svoje vozilo',
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Da Rezerviraj'
      }).then(result => {
        if (result.value) {
          Swal.fire(
            'Rezervirano!',
            'Uspješno ste rezervirali vase vozilo',
            'success',
            this.rezerviraj()
          )
        }
      })
    },
    async rezerviraj() {
      try {
        const token = localStorage.getItem('authToken')

        if (!token) throw new Error('Nema tokena')

        const response = await this.$axios({
          url: '//localhost/api/vehicles/' + this.$route.params.id,
          method: 'post',
          headers: {
            'Content-Type': 'application/json',
            Accept: 'application/json',
            Authorization: 'Bearer ' + token
          },
          data: {
            from_date: this.form.fromDate,
            to_date: this.form.toDate
          }
        })

        setTimeout(() => {
          this.$router.push({ path: '/' })
        }, 1500)
        //console.log('got response', response, this.form.days, this.form.customer_id);
      } catch (error) {
        console.log('error', error.message, error.response)
        alert('Doslo je do greske')
      }
    }
  }
}
</script>


<style scoped>
label {
  font-size: 1.5rem;
}

input {
  border: none;
}

.description {
  display: flex;
  justify-content: center;
}
.test {
  display: flex;
  justify-content: center;
  margin-top: 4%;
}
ul {
  list-style: none;
}

ul li:before {
  content: '•';
}

.rezervacijaa {
  padding: 20px;
  text-align: left;
  background-color: #ffffff66;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  /* margin-top:-14%;  */
}

h4 {
  font-size: 18px;
  font-family: 'montserrat';
  padding-bottom: 3%;
  padding-top: 2%;
}

.one-image {
  height: 350px;
  width: 50%;
  background: center center/cover;
  /* flex: 3; */

  display: flex;

  flex-direction: row;

  flex-wrap: wrap;
}
article {
  width: 100%;
}
.single-vehicle-page {
  margin-top: 20px;
  padding: 30px;
  text-align: center;
  box-sizing: border-box;
}
.post-preview {
  border: 1px solid #ccc;
  box-shadow: 0 2px 2px #ccc;
  background-color: white;
  /* width: 90%; */
}

.post {
  width: 100%;
}
.vehicle-list {
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

.vehicle-thumbnail {
  width: 300px;
  height: 200px;
  background-position: center;
  background-size: cover;
  background-color: #333;
  margin: 5px;
  border: 2px solid #333;
}

.post-content {
  padding: 10px;
  text-align: center;
  flex: 1;

  width: 33%;
  display: flex;

  flex-direction: row;

  flex-wrap: wrap;
  background-color: #ffffff66;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: justify;
  padding: 3% 5% 3% 5%;
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
.botun {
  display: flex;
  justify-content: center;
  flex: 1;
  width: 100%;

  flex-direction: column;
  flex-wrap: wrap;
  margin-left: 25%;
}
.btn {
  text-decoration: none !important;
  font-family: 'Montserrat';
  font-weight: bold;
  text-shadow: 2px 2px 6px #444444;
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;

  min-width: 50%;
  margin: 0 auto;
  background: #ff6002;
  height: 80px;
  border-radius: 5px;

  color: rgb(255, 255, 255);
  font-size: 24px;
  border: 2px solid white;
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.517), 0 6px 20px 0 rgba(0, 0, 0, 0.51);
}

#link {
  text-decoration: none;
  color: rgb(255, 255, 255);
}

.btn:hover,
#link:hover,
.btn span:hover {
  color: rgb(255, 255, 255);
  text-shadow: 1px 1px 6px #1b1b1b;
  background-color: #e65400;
}
.btn span,
.btn2 span {
  position: relative;
  z-index: 1;
  text-decoration: none;
}

.btn:after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 350%;

  background: #ce4b00;
}

@media (max-width: 900px) {
  .one-image {
    width: 100%;
    flex-direction: column;
    flex-wrap: wrap;
  }

  .post-content {
    flex: 1;
    width: 100%;
    display: flex;

    flex-direction: column;
    padding-bottom: 4%;
    padding-left: 5%;
    padding-right: 5%;
    flex-wrap: wrap;
    text-align: justify;
  }

  .description {
    display: flex;
    justify-content: center;
    flex: 1;
    width: 100%;

    flex-direction: column;
    flex-wrap: wrap;
  }

  .botun {
    margin-left: 0;
    width: 100%;
  }
}

.input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
/* --------------------------   carousel ------------------------------------ */
</style>

<template>
  <div>
    <TheSidenav/>

    <div class="single-post-page">
      <section class="post-list">
        <div v-if="isLoading">Loading...</div>

        <article v-else>
          <div
            v-for="(image, index) in vehicle.images"
            :key="index"
            class="post-thumbnail"
            :style="{backgroundImage: 'url(' + image.filename + ')'}"
          ></div>

          <div class="post-content">
            <h1>Model: {{ vehicle.model }}</h1>
            <h1>Vrsta: {{ vehicle.type }}</h1>
            <h1>Konjaža: {{ vehicle.engine_power }}</h1>
            <h1>Broj Vrata: {{ vehicle.door_number }}</h1>
            <h1>Opis: {{ vehicle.description }}</h1>
            <h1>Marka Vozila: {{vehicle.model_of_vehicle.make_of_vehicle.name}}</h1>
            <h1>Model: {{vehicle.model_of_vehicle.name}}</h1>
            <h1>Mjenjač: {{vehicle.gearbox}}</h1>
            <h1>Dostupnost: {{ vehicle.status }}</h1>

            <template v-if="vehicle.status === 'available'">
              <br>
              <form @submit.prevent="alert">
                <div class="form-group">
                  <label for="date">3.Datum znajmljivanja:</label>
                  <date-pick v-model="form.fromDate" :pickTime="true" :format="'YYYY-MM-DD HH:mm'"></date-pick>
                </div>
                <br>

                <div class="form-group">
                  <label for="date">4.Datum vracanja:</label>
                  <date-pick v-model="form.toDate" :pickTime="true" :format="'YYYY-MM-DD HH:mm'"></date-pick>
                </div>
                <br>
                {{ numDays }}
                <br>
                <button @click="alert()">Potvrdi Rezervaciju za {{ numDays }} dana</button>
              </form>
            </template>

            <template v-else>
              <br>
              <h1>Vozilo je trenutačno iznajmljeno</h1>
            </template>
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

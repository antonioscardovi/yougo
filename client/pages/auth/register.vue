<template>

  <div class="box1">
    <TheSidenav />
    <div class="container">
          <div class="form-wrap">
          <div class="card-header">
            <p class="mb-20">Registriraj Se</p>
          </div>

          <div class="card-body">
            <form @submit.prevent="register">
              <div class="form-group">
                <label>Ime</label>
                <input
                  v-model="form.name"
                  type="text"
                  class="form-control"
                  :class="{'is-invalid': errors.name }"
                  placeholder="Ime..."
                >
                <div class="invalid-feedback" v-if="errors.name">{{ errors.name[0]}}</div>
              </div>

              <div class="form-group">
                <label>Prezime</label>
                <input
                  v-model="form.lastname"
                  type="text"
                  class="form-control"
                  :class="{'is-invalid': errors.lastname }"
                  placeholder="Prezime..."
                >
                <div class="invalid-feedback" v-if="errors.lastname">{{ errors.lastname[0]}}</div>
              </div>

              <div class="form-group">
                <label>Korisničko Ime</label>
                <input
                  v-model="form.username"
                  type="text"
                  class="form-control"
                  :class="{'is-invalid': errors.username }"
                  placeholder="Korisničko Ime..."
                >
                <div class="invalid-feedback" v-if="errors.username">{{ errors.username[0]}}</div>
              </div>

              <div class="form-group">
                <label>E-mail</label>
                <input
                  v-model="form.email"
                  type="email"
                  class="form-control"
                  :class="{'is-invalid': errors.email }"
                  placeholder="E-mail..."
                >
                <div class="invalid-feedback" v-if="errors.email">{{ errors.email[0]}}</div>
              </div>

              <div class="form-group">
                <label>Lozinka</label>
                <input
                  v-model="form.password"
                  type="password"
                  class="form-control"
                  :class="{'is-invalid': errors.password }"
                  placeholder="Lozinka..."
                >
                <div class="invalid-feedback" v-if="errors.password">{{ errors.password[0]}}</div>
              </div>

              <div class="form-group">
                <label>Potvrdite Lozinku</label>
                <input
                  v-model="form.password_confirmation"
                  type="password"
                  class="form-control"
                  :class="{'is-invalid': errors.password_confirmation }"
                  placeholder="Potvrdite Lozinku..."
                >
                <div
                  class="invalid-feedback"
                  v-if="errors.password_confirmation"
                >{{ errors.password_confirmation[0]}}</div>
              </div>

              <div class="form2">
                <!-- <input
                  type="submit"
                  variant="primary"
                  value="Register"
                  class="btn btn-primary w-100"
                > -->

                <button>Registracija</button>
              </div>
            </form>

            <!-- <div class="form3">
              <button to="/auth/login" class="btn btn-secondary w-100">Prijava</button>
            </div> -->
            <footer>
             <p>Imaš stvoren korisnički račun?<nuxt-link to="/auth/login">Prijava</nuxt-link></p>
            <div class=home-pg>
              <nuxt-link to="/">Home</nuxt-link>
            </div>
            </footer>
          </div>
        </div>
    </div>
  </div>
</template>



<script>
import TheSidenav from '~/components/Navigation/TheSidenav.vue'
export default {
  middleware: 'guest',
  data() {
    return {
      form: {
        name: 'Mateo',
        lastname: 'Hrastnik',
        username: 'mhrastnik',
        email: 'hrastnik@mail.com',
        password: 'test1234',
        password_confirmation: 'test1234'
      }
    }
  },
   components: {
    TheSidenav
  },
  methods: {
    async register() {
      try {
        //console.log('evo me ovdje')
        const response = await this.$axios.post('/customers', {
          headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
          },
          name: this.form.name,
          lastname: this.form.lastname,
          username: this.form.username,
          email: this.form.email,
          password: this.form.password,
          password_confirmation: this.form.password_confirmation
        })
       // console.log('got response', response)
      } catch (e) {
        console.log('error', e.message, response)
      }

      //   this.$auth.login({ data: this.form })

      this.$router.push({ name: 'index' })
    }
  }
}
</script>

<style scoped>
html {
  background-color: #333;
}


.container {
  margin:  70px auto;
  max-width: 400px;
  padding: 20px;
  overflow:auto;

}

.form-wrap {
  background-color: #fff ;
  padding: 15px 25px;
  color: #333;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.form-wrap h1,
.form-wrap p {
  text-align: center;

}

.form-wrap .form-group {
  margin-top: 15px;
}

.form-wrap .form-group label {

  display: block;
  color: #333;
}

.form-wrap .form-group input {

  width: 100%;
  padding: 10px;
  border: #ddd 1px solid;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.form-wrap button {

  display: block;
  width:100%;
  background:#0054Db;
  padding: 10px;
  margin-top:20px;
  color: #fff;
  border: #ddd 1px solid;
  cursor: pointer;
  border-radius: 5px;
  font-size: 1.1rem;
}

footer, .home-pg {

  text-align: center;
  padding-top:1rem;
}

span {
  text-decoration: none;
}

</style>

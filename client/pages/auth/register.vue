<template>
  <div class="box1">
    <div class="container">
      <div class="col-md-6 offset-md-3">
        <div class="card mt-4">
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
                <input
                  type="submit"
                  variant="primary"
                  value="Register"
                  class="btn btn-primary w-100"
                >
              </div>
            </form>

            <div class="form3">
              <button to="/auth/login" class="btn btn-secondary w-100">Prijava</button>
            </div>

            <div class="form3">
              <button to="/" class="btn btn-secondary w-100">Vrati me na početnu</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>



<script>
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

<style>
.box1 {
  margin-top: 5%;
}

.form2 {
  margin-top: 10%;
}

.form3 {
  margin-top: 7%;
}
</style>

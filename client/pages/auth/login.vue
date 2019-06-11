<template>
  <div class="box1">
    <TheSidenav/>
    <div class="container">
      <div class="form-wrap">
        <div class="card-header">
          <p class="mb-0">Prijavi se!</p>
        </div>

        <div class="card-body">
          <form @submit.prevent="login">
            <div class="form-group">
              <label>E-mail</label>
              <input
                v-model="email"
                type="email"
                class="form-control"
                :class="{'is-invalid': errors.email }"
              >
              <div class="invalid-feedback" v-if="errors.email">{{ errors.email[0]}}</div>
            </div>

            <div class="form-group">
              <label>Lozinka</label>
              <input
                v-model="password"
                type="password"
                class="form-control"
                :class="{'is-invalid': errors.password }"
              >
              <div class="invalid-feedback" v-if="errors.password">{{ errors.password[0]}}</div>
            </div>

            <div class="form-group">
              <!-- <input type="submit" value="Logiraj se" class="btn btn-primary w-100"> -->
              <button>Prijava</button>
            </div>

            <!-- <div class="form3">
							<p>Nemaš Korisnički Račun? <nuxt-link to="/auth/register">Registracija</nuxt-link> </p>
						</div>

						<div class="form3">
						<b-button  to='/' >Home</b-button>
            </div>-->

            <footer>
              <p class="prijava">
                Nemaš korisnički račun?
                <nuxt-link to="/auth/register" class="linkovi">Registriraj se!</nuxt-link>
              </p>
              <div class="home-pg">
                <nuxt-link to="/" class="linkovi">Početna stranica</nuxt-link>
              </div>
            </footer>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>



<script>
import TheSidenav from '~/components/Navigation/TheSidenav.vue'

export default {
  components: {
    TheSidenav
  },
  middleware: 'guest',
  data() {
    return {
      email: '',
      password: ''
    }
  },
  methods: {
    async login() {
      try {
        const response = await this.$axios({
          url: '//localhost/api/login',
          method: 'post',
          data: {
            email: this.email,
            password: this.password
          },
          headers: {
            'Content-Type': 'application/json',
            Accept: 'application/json'
          }
        })

        if (response.data.error) {
          throw new Error(response.data.error)
        }

        if (!response.data.token) {
          throw new Error('Invalid login data')
        }

        localStorage.setItem('authToken', response.data.token)

        this.$router.push({ path: '/' })
      } catch (error) {
        console.log('Error', error.message)
        alert('nesto je poslo po zlu')
      }
    }
  }
}
</script>

<style scoped>
.container {
  margin: 70px auto;
  max-width: 400px;
  padding: 20px;
  overflow: auto;
}

.form-wrap {
  background-color: #fff;
  padding: 15px 25px;
  color: #333;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.form-wrap h1,
.form-wrap p {
  text-align: center;
}

.form-wrap .form-group {
  margin-top: 20px;
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
  width: 100%;
  background: #0054db;
  padding: 10px;
  margin-top: 20px;
  color: #fff;
  border: #ddd 1px solid;
  cursor: pointer;
  border-radius: 5px;
  font-size: 1.1rem;
}

button:hover {
  background-color: rgb(67, 139, 255);
}

footer,
.home-pg {
  text-align: center;
  padding-top: 1rem;
}
.linkovi {
  text-decoration: none;
  color: #0054db;
}
.linkovi:hover {
  color: #0054db;
  font-weight: bolder;
  text-shadow: 0px 1px 2px #00000057;
}
</style>

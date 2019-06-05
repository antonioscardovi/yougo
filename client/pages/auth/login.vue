<template>
<div class="box1">
  <TheSidenav />
	<div class="container">
    <div class="form-wrap">
				<div class="card-header">
					<p class="mb-0">Logiraj Se</p>
				</div>

				<div class="card-body">

					<form @submit.prevent="login">

						<div class="form-group">
							<label>E-mail</label>
							<input v-model="form.email" type="email" class="form-control" :class="{'is-invalid': errors.email }" >
							<div class="invalid-feedback" v-if="errors.email">
								{{ errors.email[0]}}
							</div>
						</div>

						<div class="form-group">
							<label>Lozinka</label>
							<input v-model="form.password" type="password" class="form-control" :class="{'is-invalid': errors.password }" >
							<div class="invalid-feedback" v-if="errors.password">
								{{ errors.password[0]}}
							</div>
						</div>

						<div class="form-group">
							<!-- <input type="submit" value="Logiraj se" class="btn btn-primary w-100"> -->
              <button>Loggin</button>
						</div>

						<!-- <div class="form3">
							<p>Nemaš Korisnički Račun? <nuxt-link to="/auth/register">Registracija</nuxt-link> </p>
						</div>

						<div class="form3">
						<b-button  to='/' >Home</b-button>
						</div> -->

            <footer>
             <p>Nemaš korisnički račun? <nuxt-link to="/auth/register">Registracija</nuxt-link></p>
            <div class=home-pg>
              <nuxt-link to="/">Home</nuxt-link>
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
	middleware:'guest',
	data(){
		return {
			form:{
				email:'',
				password:''
			}
		}
	},
	methods:{
		async login () {

			await this.$auth.login({ data: this.form });

			this.$router.push({name: 'index' });
		}
	}
}
</script>

<style scoped>
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
</style>

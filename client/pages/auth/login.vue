<template>
<div class="box1">
	<div class="container">
		<div class="col-md-6 offset-md-3">
			<div class="card mt-4">
				<div class="card-header">
					<p class="mb-0">Logiraj Se</p>
				</div>
				
				<div class="card-body">
					
					<form @submit.prevent="login">

						<div class="form-group">
							<label>E-mail</label>
							<input v-model="form.email" type="email" class="form-control" :class="{'is-invalid': errors.email }" placeholder="E-Mail...">
							<div class="invalid-feedback" v-if="errors.email">
								{{ errors.email[0]}}
							</div>
						</div>

						<div class="form-group">
							<label>Lozinka</label>
							<input v-model="form.password" type="password" class="form-control" :class="{'is-invalid': errors.password }" placeholder="Lozinka...">
							<div class="invalid-feedback" v-if="errors.password">
								{{ errors.password[0]}}
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Logiraj se" class="btn btn-primary w-100">
						</div>
						
						<div class="form3">
							<b-button to='/auth/register' class="btn btn-secondary w-100">Registracija</b-button>
						</div>

						<div class="form3">
						<b-button to='/' class="btn btn-secondary w-100">Vrati me na početnu</b-button>				
						</div>
				
					</form>
				</div>
			</div>
		</div>
  </div>
</div>
</template>



<script>
export default {
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

<style>
.box1{
  margin-top: 5%;
}
.form2{
	margin-top: 10%;
}

.form3{
	margin-top: 7%;
}
</style>

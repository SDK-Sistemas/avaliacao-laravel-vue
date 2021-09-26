<template>
	<form @submit.prevent="submit" novalidate class="mb-5">
		<div class="row">
			<div class="col-12 col-lg-5">
				<div class="form-group">
					<input
						type="email"
						v-model="form.email"
						class="form-control"
						placeholder="Seu e-mail"
						:class="{'is-invalid': errors.email}"
					>
					<div v-for="error in errors.email" v-text="error" class="ml-3 invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-lg-5">
				<div class="form-group">
					<select
						id="tags"
						v-model="form.tag"
						class="form-control"
						:class="{'is-invalid': errors.tag}"
					>
						<option :value="null" hidden> Tag que deseja receber </option>
						<option value="500">Essa tag não existe!</option>
						<option v-for="tag in tags" :value="tag.id" v-text="tag.name"></option>
					</select>
					<div v-for="error in errors.tag" v-text="error" class="ml-3 invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-lg-2">
				<div class="input-group-btn">
					<button type="submit" class="w-100 btn btn-danger">
						Enviar
					</button>
				</div>
			</div>
		</div>
	</form>
</template>

<script>
	import Swal from 'sweetalert2'

    export default {
	    props: ['tags'],
	    
	    data() {
		    return {
			    form: {
			    	email: '',
				    tag: null
 			    },
 			    errors: {}
		    }
	    },
	
	    methods:{
    	    submit(event) {
    	    	axios.post('subscribe', this.form)
			        .then( response => {
				        Swal.fire({
					        icon: 'success',
					        title: 'Sucesso!',
					        text: 'Seu e-mail foi cadastrado, você receberá notificações todos os sábados às 10h',
				        })
				        event.target.reset()
			        })
		            .catch( error => {
			            console.log(error.response.data)
		            	// Erros de validação
		            	if(error.response.status === 422){
		            	    this.errors = error.response.data.errors
			            }
		            	
			            Swal.fire({
			                 icon: 'error',
			                 title: 'Erro!',
			                 text: error.response.data.message,
			            })
		            })
	        }
        }
    }
</script>

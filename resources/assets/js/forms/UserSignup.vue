<template id="user-signup-template">
	<div class="col-md-6">
        <div class="box">
            <h1>New account</h1>

            <p class="lead">Not our registered customer yet?</p>
            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
            <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

            <hr>

            <form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <div :class="[form.errors.has('name') ? 'has-error' : '', 'form-group']">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" v-model="form.name" required>
                    <span class="help-block" v-if="form.errors.has('name')">
                        <strong>{{ form.errors.get('name') }}</strong>
                    </span>
                </div>
                <div :class="[form.errors.has('email') ? 'has-error' : '', 'form-group']">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" v-model="form.email" required>
                    <span class="help-block" v-if="form.errors.has('email')">
                        <strong>{{ form.errors.get('email') }}</strong>
                    </span>
                </div>
                <div :class="[form.errors.has('password') ? 'has-error' : '', 'form-group']">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" v-model="form.password" required>
                    <span class="help-block" v-if="form.errors.has('password')">
                        <strong>{{ form.errors.get('password') }}</strong>
                    </span>
                </div>
                <div :class="[form.errors.has('password_confirmation') ? 'has-error' : '', 'form-group']">
	                <label for="password-confirm">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirm" v-model="form.password_confirmation" required>
                    <span class="help-block" v-if="form.errors.has('password_confirmation')">
	                    <strong>{{ form.errors.get('password_confirmation') }}</strong>
	                </span>
	            </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
	export default {
		data() {
			return {
				response : false,
				form : new Form({
					name: '',
					email: '',
					password: '',
					password_confirmation: ''
				})
			}
		},
		methods: {
			onSubmit() {
				this.form.post('register').then( status => location.href = "/" );
			}
		}
	}
</script>
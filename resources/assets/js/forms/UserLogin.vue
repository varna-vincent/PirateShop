<template id="user-login-template">
	<div class="col-md-6">
        <div class="box">
            <h1>Login</h1>

            <p class="lead">Already our customer?</p>
            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

            <hr>

            <form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <div :class="[form.errors.has('email') ? 'has-error' : '', 'form-group']">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" v-model="form.email" required>
                    <span class="help-block" v-if="form.errors.has('email')">
                        <strong>{{ form.errors.errors.email }}</strong>
                    </span>
                </div>
                <div :class="[form.errors.has('password') ? 'has-error' : '', 'form-group']">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" v-model="form.password" required>
                    <span class="help-block" v-if="form.errors.has('password')">
                        <strong>{{ form.errors.get('password') }}</strong>
                    </span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                </div>
            </form>
            <br/>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><router-link to="/register"><strong>Register now</strong></router-link>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
        </div>
    </div>
</template>
<script>
	export default {
		data() {
			return {
				form : new Form({
					email: '',
					password: ''
				})
			}
		},
		methods: {
			onSubmit() {
				this.form.post('login').then( response => location.href = '/' );
			}
		}
	}
</script>
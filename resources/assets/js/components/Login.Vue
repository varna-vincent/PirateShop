<template id="login-template">
	<div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Sign in</li>
                </ul>
            </div>

            <div class="col-md-12">
                <div class="box">
                    <h1>Login</h1>

                    <p class="lead">Already our customer?</p>
                    <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                        mi vitae est. Mauris placerat eleifend leo.</p>

                    <hr>

                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
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
        </div>
        <!-- /.container -->
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
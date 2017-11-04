<template id="login-template">
	<div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Sign in</li>
                </ul>
            </div>
        </div>
        <!-- /.container -->
    </div>
</template>
<script>
    import UserLogin from '../forms/UserLogin.vue';

	export default {
		components: { UserLogin }
	}
</script>
<template id="register-template">
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>New account / Sign in</li>
                </ul>
            </div>

            <user-signup></user-signup>
            <user-login></user-login>
        </div>
    </div>
</template>
<script>
    import UserSignup from '../forms/UserSignup.vue';
    import UserLogin from '../forms/UserLogin.vue';

    export default {
        components: { UserSignup, UserLogin }
    }
</script>
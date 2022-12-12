<template>
    <Head title="Login"></Head>
    <section class="section">
        <div class="">
            <div class="text-center mb-3">
                <Link href="/" class="h3 text-dark text-decoration-none">
                    <img src="/images/favicon.svg" class="img-fluid" width="24" alt="logo"> Reviewed.ke
                </Link>
            </div>
            <div class="card border rounded-5">
                <div class="card-body">
                    <form class="form-signin">
                        <h1 class="h4 mb-2">Login to your account</h1>
                        <div class="alert alert-danger" role="alert" v-if="form.errors.email || form.errors.password" >
                            <span class="text-sm">Please enter a correct email address and password. Note that both fields may be case-sensitive.</span>
                        </div>
                        <label for="inputEmail" class="sr-only">Account Email</label>
                        <input type="email" class="form-control" placeholder="Registered Email" v-model="form.email" required autofocus>
                        <div v-if="form.errors.email">{{ form.errors.email }}</div>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" v-model="form.password" required>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="/forgot-password" class="text-sm text-decoration-none">Forgot Password?</a>
                            </div>
                            <div class="col-6 text-end">
                                <div class="text-sm text-black show-password">Show Password</div>
                            </div>
                        </div>
                        <button class="mt-4 btn btn-lg btn-dark col-12" type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Log In</button>
                        <div class="text-sm mt-3">Don't have a Reviewed.ke account? <a href="/register" class="text-decoration-none">Sign up for free now.</a></div>
                    </form>
                </div>
            </div>
        </div>
        <p class="mt-5 mb-3 text-muted fixed-bottom text-center">&copy; 2022 Reviewed.ke | All Rights Reserved</p>
    </section>
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    props: {
        canResetPassword: Boolean,
        status: String,
        errors: Object
    },

    components: {
        Head,
        Link
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },
    methods: {
        submit() {
            this.form
                .transform(data => ({
                    ... data,
                    remember: this.form.remember ? 'on' : ''
                }))
                .post(this.route('login'), {
                    onFinish: () => this.form.reset('password'),
                })
        }
    }
}

</script>

<style scoped>

.section {
    height:100vh !important;   
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-align: center;
    -ms-flex-pack: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    background-color: #f5f5f5; 
}

.card {
    width: 500px !important;
}

label {
    margin-top: 8px;
}

input {
    margin-top: 8px;
}

.form-signin {
  width: 100%;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
}
.show-password {
    cursor: pointer;
}
</style>
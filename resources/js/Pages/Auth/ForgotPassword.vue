<template>
    <Head title="Forgot Password"></Head>
    <section class="section">
        <div class="">
            <div class="text-center mb-3">
                <Link href="/" class="h3 text-dark text-decoration-none">
                    <img src="/images/favicon.svg" class="img-fluid" width="24" alt="logo"> Reviewed.ke
                </Link>
            </div>
            <div class="card border rounded-5">
                <div class="card-body">
                    <form action="login-form mt-4" @submit.prevent="submit">
                        <div class="col-lg-12">
                            <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>
                            <div class="form-group position-relative">
                                <label>Your Email <span class="text-danger">*</span></label>
                                <input type="email" id="email" class="form-control" placeholder="Enter your registerd account email"  v-model="form.email" required autofocus>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between">
                                <p class="forgot-pass mb-0">
                                    <Link v-if="canResetPassword" :href="route('password.request')" class="text-dark font-weight-bold">Forgot password?</Link>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-0 mt-3">
                            <button class="btn btn-dark btn-lg col-12" :class="{ 'opacity-25': form.processing }" disabled>Recover Password</button>
                        </div>
                        <div class="col-12 text-center">
                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Remember your password ?</small> <Link href="/login" class="text-dark font-weight-bold">Log In</Link></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <p class="mt-5 mb-3 text-muted fixed-bottom text-center">&copy; 2022 Reviewed.ke | All Rights Reserved</p>
    </section>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head,Link } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            Head,
            Link
        },
        props: {
            status: String
        },
        data() {
            return {
                form: this.$inertia.form({
                    email: ''
                })
            }
        },
        methods: {
            submit() {
                this.form.post(this.route('password.email'))
            }
        }
    })
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
    margin-top: 22px;
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
<template>
    <Head title="Create an Account"></Head>
    <section class="section">
        <div class="">
            <div class="card border rounded-5">
                <div class="card-body">
                    <form class="form-signin" @submit.prevent="submit">
                        <h1 class="h5 mb-4">Create a Business Account</h1>
                        <input type="text" class="form-control" placeholder="Company Name" v-model="form.company" autofocus>
                        <small class="text-danger" v-if="form.errors.company">* {{form.errors.company}}</small>
                        <input type="text" class="form-control" placeholder="Name of contact person" v-model="form.name">
                        <small class="text-danger" v-if="form.errors.name">* {{form.errors.name}}</small>
                        <input type="text" class="form-control" placeholder="Job Title" v-model="form.job" >
                        <small class="text-danger" v-if="form.errors.job">* {{form.errors.job}}</small>
                        <input type="email" class="form-control" placeholder="Work Email" v-model="form.email" >
                        <small class="text-danger" v-if="form.errors.email">* {{form.errors.email}}</small>
                        <div class="mt-3">
                            <input id="phone" type="text" class="form-control" v-model="form.phone" >
                        </div>
                        <small class="text-danger" v-if="form.errors.phone">* {{form.errors.phone}}</small>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" v-model="form.password">
                        <small class="text-danger" v-if="form.errors.password">* {{form.errors.password}}</small>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" v-model="form.password_confirmation">
                        <small class="text-danger" v-if="form.errors.confirm_password">* {{form.errors.confirm_password}}</small>
                        <button class="mt-3 btn btn-lg btn-dark col-12" type="submit" :disabled="form.processing">Create free account</button>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';
import intlTelInput from 'intl-tel-input';  

export default {
    props: {
        errors: Object
    },
    components: {
        Head,
        Link,
        intlTelInput
    },
    data(){
        return {
            form: this.$inertia.form({
                role: 2,
                company: '',
                name: '',
                job: '',
                email: '',
                phone: '',
                password: "",
                password_confirmation: ""
            })
        }
    },

    methods:{
        submit() {
            this.form.post(this.route('register'), {
                onFinish: () => this.form.reset('password')
            })
        }
    },

    mounted() {
        const input = document.querySelector('#phone');
        intlTelInput(input, {
            initialCountry: "ke",
            onlyCountries: ["ke"],
            separateDialCode: true,
            autoPlaceholder: "aggressive",
            utilsScript:"/js/utils.js"
        });
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

.form-control {
    margin-top: 10px;
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
  padding: 8px;
  font-size: 14px;
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

small{
    font-size: 12px;
}
</style>
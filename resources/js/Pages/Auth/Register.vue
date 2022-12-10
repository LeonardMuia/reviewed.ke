<template>
    <Head title="Create an Account"></Head>
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
                        <h1 class="h5 mb-4">Create a Business Account</h1>
                        <input type="text" class="form-control" placeholder="Company Name" required autofocus>
                        <input type="text" class="form-control" placeholder="Name of contact person" required>
                        <input type="text" class="form-control" placeholder="Job Title" required>
                        <input type="email" class="form-control" placeholder="Work Email" required>
                        <div class="mt-3">
                            <input id="phone" type="text" class="form-control" required>
                        </div>
                        <select class="form-control">
                            <option value="" disabled selected>Select your plan</option>
                            <option value="free">Free Plan (Ksh.0 for life)</option>
                            <option value="standard">Standard Plan (Ksh.1,200/month)</option>
                            <option value="growth">Growth Plan (Ksh.2,800/month)</option>
                            <option value="scale">Scale Plan (Ksh.3,500/month)</option>
                            <option value="enterprise">Enterprise Plan (To be determined)</option>
                        </select>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <button class="mt-3 btn btn-lg btn-dark col-12" type="submit" disabled>Create free account</button>
                    </form>
                </div>
            </div>
        </div>
        <p class="mt-5 mb-3 text-muted fixed-bottom text-center">&copy; 2022 Reviewed.ke | All Rights Reserved</p>
    </section>
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';
import intlTelInput from 'intl-tel-input';  

export default {
    components: {
        Head,
        Link,
        intlTelInput
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
  padding: 10px;
  font-size: 16px;
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
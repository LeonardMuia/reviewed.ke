<template>
    <Head title="Login"></Head>
    <section class="section">
        <div class="">
            <div class="text-center mb-3">
                <Link href="/" class="h2 text-dark text-decoration-none">Reviewed.ke</Link>
            </div>
            <div class="card border rounded-5">
                <div class="card-body">
                    <form class="form-signin">
                        <h1 class="h4 mb-4">Create a Free Business Account</h1>
                        <input type="text" class="form-control" placeholder="Company Name" required autofocus>
                        <input type="text" class="form-control" placeholder="First Name" required>
                        <input type="text" class="form-control" placeholder="Last Name" required>
                        <input type="text" class="form-control" placeholder="Job Title" required>
                        <input type="email" class="form-control" placeholder="Work Email" required>
                        <input type="text" class="form-control" placeholder="Phone Number" required>
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

export default {
    components: {
        Head,
        Link
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

input {
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
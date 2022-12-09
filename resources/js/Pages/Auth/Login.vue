<template>
    <section class="section">
        <div class="">
            <div class="text-center">
                
            </div>
            <div class="card border shadow rounded-5">
                <div class="card-body">
                    <form class="form-signin">
                        <h1 class="h4 mb-4">Login to Business Account</h1>
                        <label for="inputEmail" class="sr-only">Business Account Email</label>
                        <input type="email" class="form-control" placeholder="Work Email" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        
                        <button class="mt-4 btn btn-lg btn-dark col-12" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
        <p class="mt-5 mb-3 text-muted fixed-bottom text-center">&copy; 2022 Reviewed.ke | All Rights Reserved</p>
    </section>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
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
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5; 
}

.card {
    width: 600px !important;
}

input, label {
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
</style>
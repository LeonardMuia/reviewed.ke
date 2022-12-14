<template>
    <div class="bg-blue-light">
      <div class="container container-fluid p-5">
        <h1 class="display-6 fw-bold">Welcome back <span class="text-primary">{{user.name}}!</span></h1>
        <p class="col-md-12 fs-6 mt-2">Manage your business account, subscription and profile.</p>
      </div>
    </div>
</template>

<script>

import moment from 'moment';

export default {
    props: [
      'user'
    ],  
    components: {
        moment
    },

    data() {
        return {
            
        }
    },

    mounted() {
        
    },
}
</script>
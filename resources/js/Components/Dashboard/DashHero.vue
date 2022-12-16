<template>
    <div class="bg-blue-light">
      <div class="container container-fluid p-5">
        <h1 class="display-6 fw-bold">Welcome <span class="text-primary">{{user.name}}.</span></h1>
        <p class="col-md-12 fs-6 mt-2 h4" v-if="user.role_id == 2">{{ user.company_name }} : {{ user.job_title }}</p>
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
}
</script>
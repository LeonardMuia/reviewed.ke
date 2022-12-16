<template>
    
<table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">Company</th>
      <th scope="col">Review</th>
      <th scope="col">Rating</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="review in reviews" :key="review">
        <th scope="row">getCompany(review.company_id)</th>
        <td class="d-inline-block">
            <p class="col-6 text-truncate">{{review.review}}</p>
        </td>
        <td>{{review.rating}}</td>
        <td>
            <p class="text-danger" v-if="!review.is_verified">Pending Verification</p>
            <p class="text-danger" v-if="review.company">Verified</p>
        </td>
        <td><button class="btn btn-dark btn-sm">Mark as verified</button></td>
    </tr>
  </tbody>
</table>

</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: [
        'reviews'
    ],
    
    components: {
        Link
    },

    methods: {
        getCompany(id){

        }
    },
    
    computed: {
        user() {
          return this.$page.props.auth.user
        }
    }
}

</script>
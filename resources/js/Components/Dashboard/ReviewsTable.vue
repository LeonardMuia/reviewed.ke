<template>
    
<table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company</th>
      <th scope="col">Review</th>
      <th scope="col">Rating</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="review in reviews" :key="review">
        <th scope="row">{{review.id}}</th>
        <th scope="row">{{getCompany(review.company_id)}}</th>
        <td class="text-sm rating-text">
            {{review.review}}
        </td>
        <td class="text-sm">{{review.rating}}</td>
        <td class="text-sm">{{review.email}}</td>
        <td class="text-sm">{{"+254" + review.phone}}</td>
        <td class="text-sm">
            <span class="text-danger" v-if="!review.is_verified">Pending</span>
            <p class="text-success" v-if="review.is_verified">Verified</p>
        </td>
        <td><button class="btn btn-outline-dark btn-sm" @click="verify(review.id)">Verify</button></td>
    </tr>
  </tbody>
</table>

</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: [
        'reviews',
        'companies'
    ],
    
    components: {
        Link
    },

    methods: {
        getCompany(id){
            const name = this.companies.find( e => e.id == id).name;
            return name;
        },

        verify(id){
          this.$swal({
            title: 'Are you sure?',
              text: "You confirm that you have verified this review by reaching out to the reviewer.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, verify it!'
            }).then((result) => {
              if (result.isConfirmed) {
                this.$inertia.post(`/verify-review/${id}`, {
                  onSuccess:()=>{
                    this.$swal({
                        titleText: 'Success',
                        text: 'You have successfully verified this review.',
                        icon: 'success',
                        showConfirmButton: false,
                        toast: true,
                        position: 'top-end',
                        timer: 3000,
                        timerProgressBar: true,
                        customClass: {
                            title: 'm-0 pt-2 pl-3',
                            htmlContainer: 'text-sm m-0 pt-2 pl-3',
                        }
                    });
                  }
                });
              }
          })
        }
    },
    
    computed: {
        user() {
          return this.$page.props.auth.user
        }
    }
}

</script>

<style scoped>
.rating-text{
  max-width: 200px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
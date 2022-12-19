<template>
    
    <table class="table table-striped">
      <thead class="thead-light">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Number of Companies</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
    
    </template>
    
    <script>
    
    import { Link } from '@inertiajs/inertia-vue3';
    
    export default {
        props: [
            
        ],
        
        components: {
            Link
        },
    
        methods: {
            
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
<template>
    <Head title="Admin Dashboard"></Head>

    <DashHeader :user="user"></DashHeader>

    <main>

        <DashHero :user="user"></DashHero>
        
        <DashContent :reviews="reviews" :companies="companies"></DashContent>

    </main>

</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import DashContent from '../Components/Dashboard/DashContent.vue';
import DashHeader from '../Components/Dashboard/DashHeader.vue';
import DashHero from '../Components/Dashboard/DashHero.vue';

export default {
    props: {
       reviews: {
        type: Object
       },
       companies: {
        type: Object
       }
    },  

    components: {
      Head,
      Link,
      DashHeader,
      DashHero,
      DashContent   
    },

    mounted() {
      console.log(this.reviews);
    },

    computed: {
      user() {
        return this.$page.props.auth.user
      }
    }
}
</script>
<template>
    <Head title="Admin Dashboard"></Head>

    <DashHeader :user="user"></DashHeader>

    <main>

        <DashHero :user="user"></DashHero>
        
        <BusinessContent></BusinessContent>

    </main>

</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import BusinessContent from '../Components/Dashboard/BusinessContent.vue';
import DashContent from '../Components/Dashboard/DashContent.vue';
import DashHeader from '../Components/Dashboard/DashHeader.vue';
import DashHero from '../Components/Dashboard/DashHero.vue';

export default {
    props: {
       
    },  

    components: {
    Head,
    Link,
    DashHeader,
    DashHero,
    DashContent,
    BusinessContent
},

computed: {
    user() {
      return this.$page.props.auth.user
    }
  }

}
</script>
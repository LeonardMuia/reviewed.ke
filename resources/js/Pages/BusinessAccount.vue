<template>
    <Head title="Admin Dashboard"></Head>

    <DashHeader></DashHeader>

    <main>

        <DashHero></DashHero>
        
        <DashContent></DashContent>

    </main>

</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
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
    DashContent
},

    mounted() {

    }
}
</script>
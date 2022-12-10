<template>
    <Head title="For Businesses"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <BestInItems :companies="companies"></BestInItems>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
import BestInItems from '../Components/BestInItems.vue';

export default {
    props: {
       companies: {
         type: Object
       }
    },  
    components: {
        Head,
        Link,
        Nav,
        Header,
        Footer,
        BestInItems
    }
}
</script>
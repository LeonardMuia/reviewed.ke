<template>
    <Head title="For Businesses"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';

export default {
    props: {
       brands: {
         type: Object
       }
    },  
    components: {
        Head,
        Link,
        Nav,
        Header,
        Footer
    }
}
</script>
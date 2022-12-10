<template>
    <Head title=""></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <BestInHero :category="category"></BestInHero>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
import BestInHero from '../Components/BestInHero.vue';

export default {
    props: {
       companies: {
            type: Object
       },
       category: {
            type: Text
       }
    },  

    components: {
        Head,
        Link,
        Nav,
        Header,
        Footer,
        BestInHero
    },
}
</script>
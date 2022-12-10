<template>
    <Head :title="'Best in '+category"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <BestInHero :category="category"></BestInHero>
        <BestInItems :companies="companies"></BestInItems>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
import BestInHero from '../Components/BestInHero.vue';
import BestInItems from '../Components/BestInItems.vue';

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
        BestInHero,
        BestInItems
    },
}
</script>
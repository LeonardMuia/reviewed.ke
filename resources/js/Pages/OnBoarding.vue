<template>
    <Head :title="company[0].name"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <CompanyHero :company="company" :count="count"></CompanyHero>
        <CompanyContent :reviews="reviews"></CompanyContent>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import CompanyHero from '../Components/CompanyHero.vue';
import Footer from '../Components/Footer.vue';
import CompanyContent from '../Components/CompanyContent.vue';

export default {
    props: {
       company: {
            type: Object
       },
       reviews: {
            type: Object
       },
       count: {
            type: Number
       }
    },  

    components: {
    Head,
    Link,
    Nav,
    Header,
    CompanyHero,
    Footer,
    CompanyContent
},

    mounted() {
    }
}
</script>
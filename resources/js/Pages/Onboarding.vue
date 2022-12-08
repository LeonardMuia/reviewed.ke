<template>
    <Head title="For Businesses"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <HeroBusiness></HeroBusiness>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import HeroBusiness from "../Components/HeroBusiness.vue";
import Footer from '../Components/Footer.vue';

export default {
    components: {
        Head,
        Link,
        Nav,
        Header,
        HeroBusiness,
        Footer
    },
}
</script>
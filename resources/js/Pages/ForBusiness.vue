<template>
    <Head title="For Businesses"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <HeroBusiness></HeroBusiness>

        <section class="section">
            <Trusted :brands="brands"></Trusted>
        </section>

        <Milestones></Milestones>

    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import HeroBusiness from "../Components/HeroBusiness.vue";
import Trusted from '../Components/Trusted.vue';
import Milestones from '../Components/Milestones.vue';
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
        HeroBusiness,
        Trusted,
        Milestones,
        Footer
    },
}
</script>
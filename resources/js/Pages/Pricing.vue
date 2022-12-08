<template>
    <Head title="Pricing"></Head>
    <Nav :pricing="true"></Nav>
    <Header></Header>
    <main>
        <Pricing></Pricing>
        <Faq></Faq>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Pricing from "../Components/Pricing.vue";
import Faq from "../Components/PricingFaq.vue";
import Footer from '../Components/Footer.vue';

export default {
    components: {
        Head,
        Link,
        Nav,
        Header,
        Pricing,
        Faq,
        Footer
    },
    
    data(){
        return {
            active: "pricing"
        }
    }
}
</script>
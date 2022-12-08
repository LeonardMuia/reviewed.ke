<template>

    <Head title="Home"></Head>
    <Nav></Nav>
    <Header></Header>
    <main>
        <Hero></Hero>
        <section class="section py-5">
            <Categories :categories = "categories"></Categories>
        </section>

        <section class="section py-5 bg-light">
            <SocialProof></SocialProof>
        </section>

        <section class="section">
            <Trusted :brands="brands"></Trusted>
        </section>

        <section class="section py-5 bg-light">
            <CaseStudy></CaseStudy>
        </section>

        <section class="section py-5">
            <div class="container">
                <img class="img-fluid rounded-5 shadow-sm" src="images/reviews.png" alt="">
            </div>
        </section>

    </main>

    <Footer></Footer>

</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Hero from "../Components/Hero.vue";
import Categories from "../Components/Categories.vue";
import Trusted from "../Components/Trusted.vue";
import SocialProof from '../Components/SocialProof.vue';
import Footer from '../Components/Footer.vue';
import CaseStudy from '../Components/CaseStudy.vue';
export default {
    props: {
       categories: {
         type : Object
       },
       brands: {
         type: Object
       }
    },  
    components: {
        Head,
        Link,
        Nav,
        Header,
        Hero,
        Categories,
        Trusted,
        Footer,
        SocialProof,
        CaseStudy
    },
    mounted() {
    }
}

</script>
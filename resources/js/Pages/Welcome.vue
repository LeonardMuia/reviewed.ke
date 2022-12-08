<template>

    <Head title="Home"></Head>
    <Nav></Nav>
    <Header></Header>
    <main>
        <Hero></Hero>
        <section class="section py-5">
            <Categories></Categories>
        </section>

        <section class="section py-5 bg-light">
            <SocialProof></SocialProof>
        </section>

        <section class="section">
            <Trusted></Trusted>
        </section>

        <section class="section py-5 bg-light">
        </section>

        <section class="section py-4">
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

    export default {
        props: {
           
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
            SocialProof
        }
    }

</script>
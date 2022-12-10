<template>
    <Head title="FAQ"></Head>
    <Nav :faq="true"></Nav>
    <Header></Header>
    <main>
        <Faq></Faq>

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
import Footer from '../Components/Footer.vue';
import Faq from '../Components/Faq.vue';

export default {
    components: {
    Head,
    Link,
    Nav,
    Header,
    Footer,
    Faq
},
}
</script>
<template>
    <Head title="Support"></Head>
    <Nav :support="true"></Nav>
    <Header></Header>
    <main>
        <Support></Support>

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
import Support from '../Components/Support.vue';
import Trusted from '../Components/Trusted.vue';
import Footer from '../Components/Footer.vue';

export default {
    components: {
    Head,
    Link,
    Nav,
    Header,
    Support,
    Trusted,
    Footer,
},
}
</script>
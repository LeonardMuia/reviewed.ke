<template>
    <Head title="Support"></Head>
    <Nav :support="true"></Nav>
    <Header></Header>
    <main>
        <Support></Support>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
import Support from '../Components/Support.vue';

export default {
    components: {
    Head,
    Link,
    Nav,
    Header,
    Footer,
    Support
},
}
</script>
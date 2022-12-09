<template>
    <Head title="Categories"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <CategoriesHero></CategoriesHero>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
import CategoriesHero from '../Components/CategoriesHero.vue';

export default {
    components: {
    Head,
    Link,
    Nav,
    Header,
    Footer,
    CategoriesHero
},
}
</script>
<template>
    <Head title="Categories"></Head>

    <Nav :categories="true"></Nav>

    <Header></Header>

    <main>
        <CategoriesHero></CategoriesHero>
        <AllCategories></AllCategories>
    </main>

    <Footer></Footer>
</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
import CategoriesHero from '../Components/CategoriesHero.vue';
import AllCategories from '../Components/AllCategories.vue';

export default {
    props: {
       categories: {
         type : Object
       }
    },  
    components: {
    Head,
    Link,
    Nav,
    Header,
    Footer,
    CategoriesHero,
    AllCategories
},
}
</script>
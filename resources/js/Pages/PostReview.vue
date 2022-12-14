<template>

    <Head :title="`Write a review ${name}`"></Head>

    <Nav></Nav>

    <Header></Header>

    <main>
        <PostReviewHero :name="name" :id="id"></PostReviewHero>
    </main>

    <Footer></Footer>

</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
import PostReviewHero from "../Components/PostReviewHero.vue";

export default {
    props: {
        id: {
            type: String
        },
        name: {
            type: String
        }
    },
    components: {
        Head,
        Link,
        Nav,
        Header,
        Footer,
        PostReviewHero
    },

    mounted() {

    }
}
</script>
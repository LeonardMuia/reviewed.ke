<template>

    <Head title="Spice Candles"></Head>
    
    <Nav></Nav>
    
    <Header></Header>
    
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light rounded-5">
            <div class="col-md-8 p-lg-5 mx-auto my-2">
                <span class="badge badge-primary mb-2">Case Study</span>
              <div class="h1 display-6">How reviews allowed for an easier <span class="text-primary">expansion</span> for Spice Candles.</div>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

    </main>

    <Footer></Footer>

</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';

export default {
    components: {
        Head,
        Link,
        Nav,
        Header,
        Footer,
    },
}

</script>

<style scoped>
.badge-primary {
    background-color: #ff8c00;
    border-radius: 2rem;
}
</style>
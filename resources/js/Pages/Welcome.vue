<template>

    <Head title="Home"></Head>

    <Nav></Nav>

    <Header></Header>

</template>

<script>

    import { Head,Link } from '@inertiajs/inertia-vue3';
    import Nav from '../Components/Nav.vue';
    import Header from '../Components/Header.vue';
    
    export default {
        props: {
           
        },  
        components: {
            Head,
            Link,
            Nav,
            Header
      }
    }

</script>
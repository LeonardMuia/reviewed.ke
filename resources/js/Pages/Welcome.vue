<template>

    <Head title="Home"></Head>

    <Nav></Nav>
    
</template>

<script>

    import { Head,Link } from '@inertiajs/inertia-vue3';
    import Nav from '../Components/Nav.vue';
    
    export default {
        props: {
           
        },  
        components: {
            Head,
            Link,
            Nav
      }
    }

</script>
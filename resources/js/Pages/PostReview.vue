<template>


    <div>
        
    </div>
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    props: {
        id: {
            type: Number
        },
        name: {
            type: String
        }
    },
    components: {
        Head,
        Link
    },

    mounted() {
        console.log(this.id);
        console.log(this.name);
    }
}
</script>
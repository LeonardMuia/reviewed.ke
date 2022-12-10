<template>
     <div class="row mt-4">
        <div class="col-lg-3 col-md-6 col-sm-12 mt-2 mb-2" v-for="category in categories" :key="category">
            <Link :href="`/categories/${category.id}`" class="category-card card p-4 rounded-lg-2 text-center">
                <span>{{ category.name }}</span>
            </Link>
        </div>
    </div>
</template>
<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: [
        'categories'
    ],  
    components: {
        Link
    }
}
</script>
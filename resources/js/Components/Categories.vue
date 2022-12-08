<template>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="h4">
                    Explore Categories
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-end">
                <Link class="btn btn-outline shadow" href="/categories">View All</Link>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 col-sm-12 mt-2 mb-2" v-for="category in categories" :key="category">
                <Link :href="`/categories/${category.id}`" class="category-card card p-4 rounded-lg-2 text-center">
                    <span>{{ category.name }}</span>
                </Link>
            </div>
            
        </div>
    </div>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: [
        "categories"
    ],
    components: {
        Link
    }
}
</script>
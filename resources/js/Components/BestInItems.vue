<template>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-8">
                    <div class="row mt-5" v-if="companies == 0">
                        <div class="col-12 text-center text-muted">
                            <!-- <i class="uil uil-exclamation-octagon display-2"></i> -->
                            <div class="h2 mt-3">No companies found in this category.</div>
                            <div class="mt-4">
                                <a href="/register" class="btn btn-header shadow">Add your company for free</a>
                            </div>
                        </div>
                    </div>
                    <Link href="#" class="card bg-light text-decoration-none text-dark mt-3" v-for="company in companies" :key="company" v-if="companies">
                        <div class="card-body">
                            <img :src="company.logo_path" :alt="company.name" class="img-fluid" height="96" width="96">
                            <div class="company-data px-4">
                                <div class="h4">{{ company.name }}</div>
                                <div class="mt-2 text-muted text-sm">{{ 'Average Rating ' + getRating(company.rating) }} | 1,220 reviews </div>
                                <div class="mt-2 text-muted text-sm">Nairobi, Kenya. </div>
                            </div> 
                            <div class="badge badge-secondary">Most Relevant</div>
                        </div>
                        <div class="card-footer text-muted text-sm">
                            <div class="text-dark">
                                <i class="uil uil-phone-alt"></i>
                                <span class="px-2">{{company.company_phone}}</span>
                            </div>
                            <div class="text-dark">
                                <i class="uil uil-envelope-alt"></i>
                                <span class="px-2">{{company.company_email}}</span>
                            </div>
                            <div class="text-dark">
                                <i class="uil uil-globe"></i>
                                <span class="px-2">{{company.website_url}}</span>
                            </div>
                        </div>
                    </Link>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </section>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: [
        'companies'
    ],

    components: {
        Link
    },
    methods: {
        getRating(rating){
            return parseFloat(rating).toFixed(1);
        }
    }
}
</script>

<style scoped>
    .card-body {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: flex-start;
    }

    .company-data {
        display: flex;
        flex-direction: column;
    }

    .card-footer {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .card:hover {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        transition: .5s ease-in-out;
    }
    
    .badge-secondary {
        margin-left: auto;
        background-color: #6c757d;
    }
</style>
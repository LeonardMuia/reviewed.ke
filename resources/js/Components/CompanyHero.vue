<template>
    <section class="section bg-light shadow-sm border-bottom">
      <div class="container">
        <div class="row p-5 justify-contents-center">
          <div class="text-center company-details align-items-center">
            <img :src="company[0].logo_path" :alt="company[0].name" class="img-fluid shadow-lg">
            <div class="company-rating px-5">
                <div class="h2 fw-bold">{{ company[0].name }}</div>
                <img class="img-fluid rating-image" src="/images/stars/zero.png" alt="Poor" v-if="company[0].rating < 1.0 ">
                <img class="img-fluid rating-image" src="/images/stars/one.png" alt="Poor" v-if="company[0].rating < 2.0 && company[0].rating >= 1.0">
                <img class="img-fluid rating-image" src="/images/stars/two.png" alt="Bad" v-if="company[0].rating < 3.0 && company[0].rating >= 2.0">
                <img class="img-fluid rating-image" src="/images/stars/three.png" alt="Fair" v-if="company[0].rating < 4.0 && company[0].rating >= 3.0">
                <img class="img-fluid rating-image" src="/images/stars/four.png" alt="Good" v-if="company[0].rating < 4.5 && company[0].rating >= 4">
                <img class="img-fluid rating-image" src="/images/stars/five.png" alt="Excellent" v-if="company[0].rating > 4.5">
                <div class="mt-1 h4 text-secondary">
                    Rating of {{ getRating( company[0].rating) }} based on {{ count }} reviews
                </div>
                <div class="mt-2" v-if="company[0].is_verified">
                    <div class="badge badge-success p-2"> <i class="uil uil-check-circle"></i> Verified Company</div>
                </div>
                <div class="mt-2" v-if="company[0].is_verified != 1">
                    <div class="badge badge-warning p-2"> <i class="uil uil-times-circle"></i> Unverified Company</div>
                </div>
            </div>
            <div class="website">
                <a class="card border text-decoration-none mb-3" :href="company[0].website_url" target="blank">
                    <i class="uil uil-external-link-alt px-2"></i>
                    <span class="">Visit this company's website</span>
                </a>
                <Link class="mt-3" :href="'/category/'+company[0].category_id">Go back to category</Link>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: [
        'company',
        'count'
    ],

    components: {
        Link
    },

    mounted() {
        
    },

    methods: {
        getRating(){
            const rating = parseFloat(this.company[0].rating);

            if(rating == 0) {

                return "No Ratings";

            } else if(rating < 1) {

                return "Poor";

            } else if(rating < 2) {

                return "Fair";

            } else if(rating < 3) {

                return "Good";

            } else if(rating < 4.5) {

                return "Great";

            } else {

                return "Excellent";

            }

        },

        getRating(rating) {
            return parseFloat(rating).toFixed(1);
        }
    }
}
</script>

<style scoped>
.company-details {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
}

.company-details > img {
    max-width: 172px;
    max-height: 172px;
}

.company-rating {
    display:flex;
    flex-direction: column;
    align-items: flex-start;
}

.company-rating > img {
    max-width: 96px;
    margin: 8px 0;
}
.badge-success {
    text-transform: uppercase;
    color: #333;
    background-color: #bdf5bd;
}

.badge-warning {
    text-transform: uppercase;
    color: #fff;
    background-color:#6c757d;
}

.website {
    margin-left: auto;
    cursor: pointer;
}

.website > .card {
    display: flex;
    flex-direction: row;
    padding: 20px 40px;
}

.website > .card:hover {
    background-color: #cce3ff; 
    transition: .3s ease-in-out;
}
</style>


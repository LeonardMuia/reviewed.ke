<template>
    <section class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="card bg-light py-4 rounded-5 shadow">
                        <div class="card-body text-center">
                            <div class="col-12 mb-2">
                                <img class="img-fluid" src="/images/stars/zero.png" alt="">
                            </div>
                            <div class="h4 text-dark">Writer your review</div>
                            <p class="text-sm">Help future customers by talking about customer service, price, delivery, returns & refunds.</p>
                            <div class="mt-4">
                              <Link class="btn btn-outline-dark btn-lg shadow" :href="`/post-review/${company[0].id}`">Write a review</Link>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-light mt-4 p-3 rounded-5" v-for="review in reviews" :key="review">
                        <div class="card-header py-3 align-items-center">
                            <span class="avatar mr-2">
                                <span class="avatar-text avatar-primary-light">{{getUser(review.user)}}</span>
                            </span>
                            <div class="user-info px-4">
                                <div class="fw-bold h5">{{ review.user }}</div>
                                <div class="span text-sm text-success" v-if="review.is_verified"><i class="uil uil-`check-circle"></i> Verified Review</div>
                                <div class="span text-sm text-danger" v-if="!review.is_verified"><i class="uil uil-times-circle"></i> Pending Verification</div>
                            </div>
                            <div class="rating">
                                <span class="h5 text-dark">{{review.rating}} out of 5</span>
                                <img class="img-fluid rating-image" src="/images/stars/one.png" alt="Poor" v-if="review.rating == 1">
                                <img class="img-fluid rating-image" src="/images/stars/two.png" alt="Bad" v-if="review.rating == 2">
                                <img class="img-fluid rating-image" src="/images/stars/three.png" alt="Fair" v-if="review.rating == 3">
                                <img class="img-fluid rating-image" src="/images/stars/four.png" alt="Good" v-if="review.rating == 4">
                                <img class="img-fluid rating-image" src="/images/stars/five.png" alt="Excellent" v-if="review.rating == 5">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-3">
                                <div class="h5 text-dark">{{ review.title }}</div>
                                <div class="mt-3 text-secondary">
                                    {{ review.review }}
                                </div>
                                <div class="mt-3 text-muted text-sm">
                                    <span class="fw-bold">Date of Experience:</span> <span class="text-dark">{{ getDate(review.created_at) }}</span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 sticky-top">
                    <div class="card bg-light p-4 rounded-5">
                        <div class="row text-secondary">
                            <div class="col-12">
                                <div class="h5 text-dark">About {{ company[0].name }}</div>
                                <div class="text-sm">Information written by the company.</div>
                                <div class="mt-3">{{ company[0].about }}</div>
                                <hr class="mt-4 mb-4">
                                <div class="h5 text-dark">Contact</div>
                                <div class="mt-2">
                                    Email:
                                    <a :href="'mailto:'+ company[0].company_email" target="blank">
                                        {{ company[0].company_email }}
                                    </a>
                                </div>
                                <div class="mt-2">
                                    Phone:
                                    <a :href="'tel:'+ company[0].company_phone" target="blank">
                                        {{ company[0].company_phone }}
                                    </a>
                                </div>
                                <div class="mt-2">
                                    Address: {{ company[0].address }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

import moment from 'moment';
import intlTelInput from 'intl-tel-input'; 
import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: [
        'reviews',
        'company'
    ],

    components: {
        intlTelInput,
        Link
    },  

    methods: {
        getUser(user) {
            return user.slice(0,2);
        },

        getDate(date){
            return moment(date).format("Do MMMM YYYY");  
        }
    }
}
</script>

<style scoped>
    .img-fluid {
        max-width: 144px;
    }
    hr {
        background-color: #777;
    }
    .avatar {
        display: inline-block;
        position: relative;
        width: 3rem;
        height: 3rem;
        text-align: center;
        border-radius: 50%;
        background-color: rgb(255, 201, 153, 0.7);
        line-height: 3rem;
    }
    .card-header {
        display: flex;
        flex-direction: row;
        background-color: #f8f9fa!important;
    }
    .rating {
       margin-left: auto;
       display: flex;
       flex-direction: column;
       align-items: flex-end;
    }

    .rating-image {
        max-width: 96px;
    }
</style>
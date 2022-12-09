<template>
    <section class="section bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="h2">Why consumers rely on Reviewed.ke</div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                    <div class="h1">
                        <CountUp :end-val="reviews" :duration="duration" :options="reviewOptions"></CountUp>
                    </div>
                    <p class="text-sm">reviews in total collected on our platform on behalf of Kenyan brands</p>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                    <div class="h1">
                        <CountUp :end-val="impact" :duration="duration" :options="impactOptions"></CountUp>
                    </div>
                    <p class="text-sm">of consumers agree that Reviewed.ke helps them make purchase decisions</p>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                    <div class="h1">
                        <CountUp :end-val="brands" :duration="duration" :options="brandOptions"></CountUp>
                    </div>
                    <p class="text-sm">brands using Reviewed.ke to win consumer trust and provide social proof</p>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                    <div class="h1">
                        <CountUp :end-val="growthRate" :duration="duration" :options="growthOptions"></CountUp>
                    </div>
                    <p class="text-sm">avarage growth of review generation from Reviewed.ke</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

import CountUp from 'vue-countup-v3';

export default {
    components: {
        CountUp
    },
    data() {
        return {
            reviews: 24,
            duration: 8,
            reviewOptions: {
                suffix: 'K'
            },
            growthRate: 68,
            growthOptions: {
                suffix: '%'
            },
            impact: 92,
            impactOptions: {
                suffix: '%'
            },
            brands: 165,
            brandOptions: {
                suffix: '+'
            }
        }
    }
}
</script>
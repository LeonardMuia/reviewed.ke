<template>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 p-3 p-lg-5 pt-lg-3">
                <div class="h2 display-6">Turn your reviews into <br> <span class="text-primary">social proof.</span></div>
                <div class="text-dark">
                    Consumers are smart, and with the level of competition in every marketplace, they have plenty of choice when deciding where to invest their time and money. The most important aspect of social proof is to inspire trust; we know that nine out of ten people are checking out reviews, so getting positive feedback is a good way to start building a trust in your brand or product.
                </div>
                <div class="mt-4">
                    <Link class="btn btn-header shadow" href="/onboarding">Start Collecting Reviews</Link>
                </div>
            </div>
            <div class="col-5">
                <img class="socia-proof-img img-fluid rounded-5 m-5" src="/images/social-proof.png" alt="">
            </div>
        </div>
    </div>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    }
}
</script>
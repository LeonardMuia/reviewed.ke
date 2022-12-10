<template>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5">
                <img class="img-fluid rounded-5 shadow-lg" src="/images/bella.jpg" alt="Bella Beauty">
            </div>
            <div class="col-1"></div>
            <div class="col-6 p-3 p-lg-5 pt-lg-3">
                <p class="text-primary mb-2">Case Study</p>
                <div class="h2 display-6">How reviews allowed for an easier <span class="text-primary">expansion</span> for Bella Beauty.</div>
                <div class="text-dark">
                    International expansion is not easy, so when a brand gets it right it's worth taking note of their approach. That's the focus of our latest case study, as we chat to Kenyan based Bella Beauty about growth in East Africa, and how an existing relationship with <span class="font-weight-bold text-primary">Reviewed.ke</span> supported the move.
                </div>
                <div class="mt-4">
                    <Link class="btn btn-header shadow" href="/bella-beauty">View Case Study</Link>
                </div>
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
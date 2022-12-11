<template>
    <section class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="card bg-light py-4">
                        <div class="card-body text-center">
                            <div class="col-12 mb-2">
                                <img class="img-fluid" src="/images/stars/zero.png" alt="">
                            </div>
                            <div class="h4 text-dark">Writer your review</div>
                            <p class="text-sm">Help future customers by talking about customer service, price, delivery, returns & refunds.</p>
                            <div class="mt-4">
                              <a class="btn btn-outline-dark shadow btn-lg" href="/for-business">Post a review</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-light px-2"></div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: [
        'reviews'
    ]
}
</script>

<style scoped>
    .img-fluid {
        max-width: 144px;
    }
</style>
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

                    <div class="card bg-light mt-2">

                    </div>
                </div>
                <div class="col-4 sticky-top">
                    <div class="card bg-light p-4">
                        <div class="row text-secondary">
                            <div class="col-12">
                                <div class="h4 text-dark">About {{ company[0].name }}</div>
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
export default {
    props: [
        'reviews',
        'company'
    ],
}
</script>

<style scoped>
    .img-fluid {
        max-width: 144px;
    }
    hr {
        background-color: #777;
    }
</style>
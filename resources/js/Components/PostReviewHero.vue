<template>
    <section class="section bg-light">
      <div class="container">
        <div class="row p-5 justify-contents-center">
          <div class="col-lg-12 p-3 text-center">
            <h1 class="display-6 fw-bold lh-1 mb-4">Write a review about {{name}} </h1>
            <p>Help future customers by talking about customer service, price, delivery, returns & refunds.</p>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
export default {
    props: [
        'name',
        'id'
    ],

    components: {

    }
}
</script>

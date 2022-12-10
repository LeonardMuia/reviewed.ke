<template>
    <section class="section bg-light">
      <div class="container">
        <div class="row p-5 justify-contents-center">
          <div class="col-lg-12 p-3 text-center">
            <h1 class="display-6 fw-bold lh-1 mb-4">Best In {{ category }}</h1>
            <p>Compare the best companies in this category.</p>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
export default {
    props: [
        'category'
    ]
}
</script>


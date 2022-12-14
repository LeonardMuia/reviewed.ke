<template>
  <section class="section mt-5 mb-0">
    <div class="container">
      <div class="row">
        <div class="to-top col-12 bg-dark text-center py-3" @click="scrollToTop">
            <div class="text-white">BACK TO TOP</div>
        </div>
      </div>
      <footer class="d-flex justify-content-between align-items-center py-3">
        <div class="col-md-12 text-center">
          <span class="mb-3 text-muted">© 2022 Reviewed.ke | All Rights Reserved</span>
        </div>
      </footer>
    </div>
  </section>
</template>

<script>
export default {
    methods: {
      scrollToTop() {
        $('html, body').animate({scrollTop:0}, '100');
      }
    }
}
</script>

<style scoped>
  .to-top {
    cursor: pointer;
  }

</style>
<template>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="h3">Trusted by Kenyan Leading Brands</div>
                <div class="mt-1 mb-1">Trusted by Kenyan Leading Brands</div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                <carousel :settings="settings" :breakpoints="breakpoints">
                    <slide v-for="slide in brands" :key="slide">
                      <img :src="slide.logo_path" class="border img-fluid brand-image">
                    </slide>
                </carousel>
            </div>
        </div>
    </div>
</template>

<script>

import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

export default {
    props: [
      'brands'
    ],
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation
    },
    data: () => ({
      // carousel settings
      settings: {
        itemsToShow: 1,
        snapAlign: 'center',
        autoplay: 3000,
        wrapAround: true
      },
      // breakpoints are mobile first
      // any settings not specified will fallback to the carousel settings
      breakpoints: {
        // 700px and up
        700: {
          itemsToShow: 1,
          snapAlign: 'center',
        },
        // 1024 and up
        1024: {
          itemsToShow: 7,
          snapAlign: 'start',
        },
      },
    }),
}
</script>

<style scoped>
.brand-image {
  width: 120px;
  height: 120px;
}
</style>

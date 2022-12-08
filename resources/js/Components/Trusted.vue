<template>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="h2">Trusted by Kenyan Leading Brands</div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                <carousel :settings="settings" :breakpoints="breakpoints">
                    <slide v-for="slide in 10" :key="slide">
                    {{ slide }}
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
        autoplay: 3000
      },
      // breakpoints are mobile first
      // any settings not specified will fallback to the carousel settings
      breakpoints: {
        // 700px and up
        700: {
          itemsToShow: 3.5,
          snapAlign: 'center',
        },
        // 1024 and up
        1024: {
          itemsToShow: 5,
          snapAlign: 'start',
        },
      },
    }),
}
</script>

<style scoped>
.carousel__item {
  min-height: 200px;
  width: 100%;
  background-color: var(--vc-clr-primary);
  color: var(--vc-clr-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__slide {
  padding: 10px;
}

.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 5px solid white;
}
</style>

<template>
    <header class="py-3 border-bottom">
        <div class="container d-flex flex-wrap align-items-center">
            <Link href="/dashboard" class="mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
              <span class="h4"><img style="color: #ffffff;" src="/images/favicon.svg" class="img-fluid" width="18" alt="logo"> Reviewed.ke</span>
            </Link>
            <ul class="nav align-items-center">
            <li class="nav-item px-2 mt-0 mb-0 h6"></li>
            <div class="d-block link-dark text-decoration-none">
                  <div class="text-sm">Account:</div>
                  <span class="text-sm">{{ user.email }}</span>
            </div>
            <Link method="post" href="/logout" class="h3 px-3 text-dark">
                <i class="uil uil-signout"></i>
            </Link>
            </ul>
        </div>
    </header>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
  props: [
      'user'
  ],
  components: {
    Link
  },

  methods: {
    getName(name){
      return name.slice(0,2);
    }
  }
}
</script>

<style scoped>
.avatar {
    display: inline-block;
    position: relative;
    width: 2rem;
    height: 2rem;
    text-align: center;
    border: 1px solid #333;
    border-radius: 50%;
    background-color: #ffe8cc;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    color: #333;
    line-height: 2rem;
}
.text-sm {
    font-size: 12px;
}
</style>
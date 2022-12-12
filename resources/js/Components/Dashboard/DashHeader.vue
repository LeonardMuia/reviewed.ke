<template>
    <header class="py-3 border-bottom">
        <div class="container d-flex flex-wrap align-items-center">
            <Link href="/dashboard" class="mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
              <span class="h4"><img style="color: #ffffff;" src="/images/favicon.svg" class="img-fluid" width="18" alt="logo"> Reviewed.ke</span>
            </Link>
            <ul class="nav align-items-center">
            <div class="text-sm">
                <span class="avatar mr-2">
                    <span class="avatar-text avatar-primary-light">SA</span>
                </span>
            </div>
              <li class="nav-item px-2 mt-0 mb-0 h6"></li>
              <div class="d-block link-dark text-decoration-none">
                    <div class="text-sm">Welcome back</div>
                    System Admin
              </div>
            </ul>
        </div>
    </header>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: {
    Link
  }
}
</script>

<style scoped>
.avatar {
    display: inline-block;
    position: relative;
    width: 3rem;
    height: 3rem;
    text-align: center;
    border: 1px solid #333;
    border-radius: 50%;
    background-color: #ffe8cc;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    color: #333;
    line-height: 3rem;
}
.text-sm {
    font-size: 12px;
}
</style>
<template>
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="/" class="nav-link link-dark px-2" :class="{'active': home}">Home</a></li>
        <li class="nav-item"><a href="/categories" class="nav-link link-dark px-2" :class="{'active': categories}" >Categories</a></li>
        <li class="nav-item"><a href="/pricing" class="nav-link link-dark px-2" :class="{'active': pricing}" >Pricing</a></li>
        <li class="nav-item"><a href="/faqs" class="nav-link link-dark px-2"  :class="{'active': faq}" >FAQs</a></li>
        <li class="nav-item"><a href="/support" class="nav-link link-dark px-2" :class="{'active': support}" >Support</a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="/login" class="nav-link link-dark px-2">Login</a></li>
        <li class="nav-item"><a href="/register" class="nav-link link-dark px-2">Create an Account</a></li>
      </ul>
    </div>
  </nav>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
  props: [
    'home',
    'pricing',
    'faq',
    'support',
    'categories'
  ],
  components: {
    Link
  },
}
</script>
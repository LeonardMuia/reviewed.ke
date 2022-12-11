<template>
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><Link href="/" class="nav-link link-dark px-2" :class="{'active': home}">Home</Link></li>
        <li class="nav-item"><Link href="/categories" class="nav-link link-dark px-2" :class="{'active': categories}" >All Categories</Link></li>
        <li class="nav-item"><Link href="/pricing" class="nav-link link-dark px-2" :class="{'active': pricing}" >Pricing</Link></li>
        <li class="nav-item"><Link href="/faqs" class="nav-link link-dark px-2"  :class="{'active': faq}" >FAQs</Link></li>
        <li class="nav-item"><Link href="/support" class="nav-link link-dark px-2" :class="{'active': support}" >Support</Link></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><Link href="/login" class="nav-link link-dark px-2">Login</Link></li>
        <li class="nav-item"><Link href="/register" class="nav-link link-dark px-2">Create an Account</Link></li>
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
<template>
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><Link href="/" class="nav-link link-dark px-2 active" aria-current="page">Home</Link></li>
        <li class="nav-item"><Link href="/pricing" class="nav-link link-dark px-2">Pricing</Link></li>
        <li class="nav-item"><Link href="/faqs" class="nav-link link-dark px-2">FAQs</Link></li>
        <li class="nav-item"><Link href="/support" class="nav-link link-dark px-2">Support</Link></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
      </ul>
    </div>
  </nav>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
      Link
    }
}
</script>
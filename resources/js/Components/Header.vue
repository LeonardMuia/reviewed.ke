<template>
    <header class="py-3 border-bottom">
        <div class="container d-flex flex-wrap align-items-center">
          <Link href="/" class="mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <span class="h4"><img src="/images/favicon.svg" class="img-fluid" width="18" alt="logo"> Reviewed.ke</span>
          </Link>
          <div class="col-12 col-lg-auto mb-3 mb-lg-0">
            <a class="btn btn-header shadow" href="/for-business">For Businesses</a>
          </div>
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
<template>
    <div class="modal rounded-5 fade" :id="'company'+id" tabindex="-1" role="dialog" aria-labelledby="postReview" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title h4" id="postReview">Rate your experience with {{ name }}</div>
            <a href="#" class="close text-decoration-none h4 text-dark" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="modal-body">
            
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    props: [
        'id',
        'name'
    ]
}
</script>
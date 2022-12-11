<template>
    <div class="modal fade" :id="'company'+id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title h5 text-dark" id="postReview">Write your review on {{ name }}</div>
            <a href="#" class="close text-decoration-none h4 text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="modal-body text-secondary">
            <form class="px-2" @submit.prevent="submit">
                <div class="h6 text-dark">Rate your recent experience</div>
                <div class="form-group-rating mt-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" v-bind:value="1" v-model="form.rating">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" v-bind:value="2" v-model="form.rating">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" v-bind:value="3" v-model="form.rating">
                      <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" v-bind:value="4" v-model="form.rating">
                      <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" v-bind:value="5" v-model="form.rating">
                      <label class="form-check-label" for="inlineRadio3">5</label>
                    </div>
                </div>
                <div class="additional-review mt-4" v-if="form.rating">
                    <div class="h6 text-dark">
                        Tell us more about your experience
                    </div>
                   
                    <div class="form-group mt-2">
                        <textarea class="form-control text-sm" rows="3" :placeholder="placeholder" v-model="form.review"></textarea>
                    </div>
                    
                    <div class="text-dark mt-3 h6">
                        What is your name?
                    </div>
                    <small class="mt-1 d-block text-muted">Leave this blank if you'd like to publish your review anonymously.</small>

                    <div class="form-group mt-2">
                        <input type="text" class="form-control">
                    </div>
                    <small class="mt-1 d-block text-muted">(optional)</small>

                    <div class="text-dark mt-3 h6">
                        What is your email?
                    </div>
                    <small class="mt-1 d-block text-muted">We need your email address to verify that your review is genuine.</small>

                    <div class="form-group mt-2">
                        <input type="text" class="form-control" v-model="form.email">
                    </div>
                    <small class="mt-1 d-block text-muted">Please note that we may share your email with the company to verify your order.</small>

                    <button type="submit" class="btn btn-dark btn-lg mt-3 col-12" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Submit Review</button>
                </div>
            </form>
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
    ],

    components: {
        intlTelInput
    },
    
    data() {
        return {
            form: this.$inertia.form({
                rating: 0,
                review: '',
                email: ''
            }),

            placeholder: `What did you like or dislike? What is ${this.name} doing well, or how can they improve? Remember to be honest, helpful, and constructive!`
        }
    }

}
</script>

<style scoped>
form {
    text-align: left !important;
}
input[type=radio]{
  transform:scale(1.2);
}
.form-check-label {
    font-size: 18px;
    padding: 0px 8px;
}
.form-group-rating{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
small {
    font-size: 12px;
}
</style>
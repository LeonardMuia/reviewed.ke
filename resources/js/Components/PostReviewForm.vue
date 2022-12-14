<template>
    <section class="section">
        <div class="container row py-5">
            <div class="col-4"></div>
            <div class="col-6">
              <form class="px-2" @submit.prevent="submit">
                    <div class="h5 text-dark">Rate your recent experience</div>
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
                    <div class="additional-review mt-5" v-if="form.rating">
                        <div class="h5 text-dark">
                            Tell us more about your experience
                        </div>
                      
                        <div class="form-group mt-2">
                            <textarea class="form-control text-sm" rows="4" :placeholder="placeholder" v-model="form.review"></textarea>
                        </div>

                        <div class="text-dark mt-3 h5">
                            What is your name?
                        </div>
                        <small class="mt-1 d-block text-muted">Leave this blank if you'd like to publish your review anonymously.</small>

                        <div class="form-group mt-2">
                            <input type="text" class="form-control" v-model="form.name">
                        </div>
                        <small class="mt-1 d-block text-muted">(optional)</small>

                        <div class="text-dark mt-3 h5">
                            What is your email?
                        </div>
                        <small class="mt-1 d-block text-muted">We need your email address to verify that your review is genuine.</small>

                        <div class="form-group mt-2">
                            <input type="text" class="form-control" v-model="form.email">
                        </div>
                        <small class="mt-1 d-block text-muted">Please note that we may share your email with the company to verify your order.</small>

                        <div class="text-dark mt-3 h5">
                            What is your Phone Number?
                        </div>
                        <small class="mt-1 d-block text-muted">We need your phone number to contact you to verify that your review is genuine.</small>

                        <div class="form-group mt-2">
                            <input id="phone" type="text" class="form-control" v-model="form.phone">
                        </div>

                        <small class="mt-1 d-block text-muted">Please note that we may share your phone with the company to verify your order.</small>

                        <button type="submit" class="btn btn-dark btn-lg mt-5 mb-3 col-12" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Submit Review</button>
                    </div>
              </form>
            </div>
        </div>
    </section>
</template>

<script>

import intlTelInput from 'intl-tel-input';  

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
                email: '',
                phone: '',
                name: ''
            }),

            placeholder: `What did you like or dislike? What is ${this.name} doing well, or how can they improve? Remember to be honest, helpful, and constructive!`

        }
    },

    mounted() {
        const input = document.getElementById('#phone');

        intlTelInput(input, {
            initialCountry: "ke",
            onlyCountries: ["ke"],
            separateDialCode: true,
            autoPlaceholder: "aggressive",
            utilsScript:"/js/utils.js"
        });
        
    },

    methods: {
      submit() {
        this.$inertia.post('/post-review', this.form)
      },
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
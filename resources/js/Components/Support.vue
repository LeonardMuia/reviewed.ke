<template>
    <section class="section py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="h1">Welcome! How can we help you?</div>
                    <p>Need help using our service? Seek help from out team.</p>
                </div>
            </div>
            <div class="row mt-5 px-5 align-items-center">
                <div class="col-6">
                    <div class="h4">Contact Support</div>
                    <p class="col-8">Have questions about our solutions, products, or licenses? Contact our Customer Support or find your answers online.</p>
                    <p class="col-8 mt-3">You can also visit our offices or reach out using one of our contact details.</p>
                    <div class="mt-4">
                       <a href="tel:+254700000000" class="d-block h6 text-decoration-none mt-3 col-5 text-dark"> <i class="uil uil-phone"></i> Phone: +254 700 000 000</a>
                       <a href="mailto:help@reviewed.ke" class="d-block h6 text-decoration-none mt-3 col-5 text-dark"><i class="uil uil-envelope"></i> Email: help@reviewed.ke</a>
                       <a href="#" class="d-block h6 mt-3 text-decoration-none col-9 text-dark"><i class="uil uil-map-marker"></i> 3rd Floor, Odyssey Building, Westlands, Nairobi.</a>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card shadow-lg bg-white">
                        <div class="card-head bg-light">
                            <div class="h5 text-center py-3">Contact Form</div>
                        </div>
                        <div class="card-body px-4">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" placeholder="first name" class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Surname" class="form-control">
                                </div>
                                <div class="col-12 mt-3">
                                    <input id="phone" type="text" placeholder="Phone Number" class="form-control">
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                                <div class="col-12 mt-3">
                                    <textarea class="form-control" placeholder="message" rows="5"></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-outline-dark btn-lg col-12" disabled>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

import intlTelInput from 'intl-tel-input';  

export default {
    components: {
        intlTelInput
    },
    mounted() {
        const input = document.querySelector('#phone');
        intlTelInput(input, {
            initialCountry: "ke",
            onlyCountries: ["ke"],
            separateDialCode: true,
            autoPlaceholder: "aggressive",
            utilsScript:"/js/utils.js"
        });
    }
}
</script>


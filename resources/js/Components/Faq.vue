<template>
    <section class="section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="h6 text-muted"></div>
                    <div class="h1">Frequently Asked Questions</div>
                    <p>Find answers to commonly asked questions about our service.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">What is the fastest way to collect reviews?</div>
                    <p class="mt-4">Start out by using our Review Booster. Email a review request to your last few months customers to see a quick return in just a few days.</p>
                </div>
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">Can I customize the collection email?</div>
                    <p class="mt-4">Of course! You can add your company logo and change the colours and design of the collection email to suit your companies image. If you need any help customising your email please don't hesitate to ask! We have a team of experienced email specialist who can create the perfect collection email free of charge.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">Can I customize the questions I ask customers?</div>
                    <p class="mt-4">Yes, our system is fully customisable. You can tailor questions around delivery or specific customer service questions.</p>
                </div>
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">Can you do review booster for me?</div>
                    <p class="mt-4">Yes, no problem. As long as you are a paying customer we will be happy to process your review booster for you.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">Where are you based?</div>
                    <p class="mt-4">Our head office is in 3rd Floor, Odyssey Building, 84 Muthithi Road, Nairobi.</p>
                </div>
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">Is there a 12 month contract?</div>
                    <p class="mt-4">No, we don't believe in lengthy contracts. We just need 30 days written notice if you want to cancel. We are confident that if you sign up with us you will stay because you want to, not because you have to.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">How often can I use review booster?</div>
                    <p class="mt-4">You can use the Review Booster as often as you like. Some of our clients use it daily.</p>
                </div>
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">How long does it take to set up and is there a set up cost?</div>
                    <p class="mt-4">It normally takes around 2 to 4 hours to get you set up. We don't charge for set up on Standard and Growth packages.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">Why isn't my review showing up?</div>
                    <p class="mt-4">Your review should be posted within 48 hours. If it's not up after that amount of time, be sure to check that your account is activated. Simply click on the link in the email that we sent out when you first signed up. Also, check to see that your review has not violated any of our policies. We usually send an email to let you know if it has.</p>
                </div>
                <div class="col-lg-6 mt-2 col-md-12 col-sm-12">
                    <div class="h5 text-dark">Will you use my customers data?</div>
                    <p class="mt-4">Never. We work as an email service provider similar to MailChimp or Constant Contact. We have a section in our Privacy Policy that says we will never use an email address unless instructed by the company sending the data. We take your data seriously which is why all data is stored on a SSL 128 bits protected server.</p>
                </div>
            </div>
        </div>
        <div class="mt-5 support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <i class="lni-emoji-sad"></i>
            <p class="mb-0 px-2 h5">Can't find your answers to your questions?</p>
            <Link class="text-success" href="/support"> Contact Support</Link>
        </div>
    </section>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    }
}
</script>
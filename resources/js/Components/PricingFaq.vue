<template>
<div class="faq_area py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="text-center">
                    <div class="h1 display-6">Frequently Asked Questions</div>
                    <p>Read some of the commonly asked questions regarding our pricing plans</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <!-- FAQ Area-->
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Can I import my existing reviews?<span class="uil uil-chevron"></span></h6>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Yes, you can import UGC, product reviews, and reviews obtained from a reputable source. All imported reviews are checked by our team to confirm authenticity.</p>
                                <p class="mt-3">To speed up the import process, it's best to have the spreadsheet file in the following formats: <br><span class="h6">CSV, XML</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp">
                        <div class="card-header" id="headingTwo">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I use User Generated Content collected(UGC) on my site?<span class="uil uil-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>All user-generated content collected through Reviewed.ke can be used across your site and in marketing campaigns. To support it, you can download Reviewed.ke logos and marketing materials from our Brand Guidelines.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp">
                        <div class="card-header" id="headingThree">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What happens if I cancel my account?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>If you cancel your account, you can easily export your reviews from your dashboard. Company reviews collected through us will still be displayed on your Reviewed.ke profile page in accordance with our Google Review Partnership License.</p>
                                <p class="mt-3">Once the account is canceled, you'll no longer have access to the dashboard, no invitation emails will be sent, and no further charges will be made.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp">
                        <div class="card-header" id="headingFour">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I pay for my subscription?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>We accept all major credit cards and you can enter or update your payment details on your account page at any time. For enterprise accounts, we're also able to offer a bank transfer option. .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp">
                        <div class="card-header" id="headingFive">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Can I switch between plans?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Yes. You can switch from one plan to another depending on your preference. Contact our billing team to help you with your smooth transition from one plan to another..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Support Button-->
                <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <p class="mb-0 px-2">Can't find your answers?</p>
                    <Link class="text-primary" href="/support"> Contact us</Link>
                </div>
            </div>
        </div>
    </div>
</div>
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
.faq_area {
    position: relative;
    z-index: 1;
}

.faq-accordian {
    position: relative;
    z-index: 1;
}
.faq-accordian .card {
    position: relative;
    z-index: 1;
    margin-bottom: 1.5rem;
}
.faq-accordian .card:last-child {
    margin-bottom: 0;
}
.faq-accordian .card .card-header {
    background-color: #ffffff;
    padding: 0;
    border-bottom-color: #ebebeb;
}
.faq-accordian .card .card-header h6 {
    cursor: pointer;
    padding: 1.25rem 2rem;
    color: #ff8c00;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.faq-accordian .card .card-header h6 span {
    font-size: 1.5rem;
}
.faq-accordian .card .card-header h6.collapsed {
    color: #0b2051;
}
.faq-accordian .card .card-header h6.collapsed span {
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
}
.faq-accordian .card .card-body {
    padding: 1.75rem 2rem;
}
.faq-accordian .card .card-body p:last-child {
    margin-bottom: 0;
}

@media only screen and (max-width: 575px) {
    .support-button p {
        font-size: 14px;
    }
}

.support-button i {
    color: #3f43fd;
    font-size: 1.25rem;
}
@media only screen and (max-width: 575px) {
    .support-button i {
        font-size: 1rem;
    }
}

.support-button a {
    text-transform: capitalize;
    color: #2ecc71;
}
@media only screen and (max-width: 575px) {
    .support-button a {
        font-size: 13px;
    }
}
</style>
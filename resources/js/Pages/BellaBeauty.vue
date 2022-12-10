<template>

    <Head title="Bella Beauty Case Study"></Head>
    
    <Nav></Nav>
    
    <Header></Header>
    
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-blue-light rounded-5">
            <div class="col-md-8 p-lg-5 mx-auto my-2">
                <span class="badge badge-primary mb-2">Case Study</span>
              <div class="h1 display-6">How reviews allowed for an easier <span class="text-primary">expansion</span> for Bella Beauty.</div>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="container">
            <div class="row p-4">
                <div class="col-2"></div>
                <p class="col-8">As a little bit of background, Bella Beauty has been in business since 2012. Working out of Nairobi, it's a small team of women passionate about what they do - inspiring confidence in other women with their inclusive range of functional, yet comfortable, outfits and dresses. </p>
                <div class="col-2"></div>
            </div>
            <div class="row px-4 py-2">
                <div class="col-2"></div>
                <p class="col-8">Quality products, personal service, and a focus on sustainability helped the brand become a household name on home turf, and now the team has carried that same ethos overseas with a new warehouse and dedicated website for the Kenyan market.</p>
                <div class="col-2"></div>
            </div>
            <div class="row px-4 py-2">
                <div class="col-2"></div>
                <div class="col-8 h3">Breaking New Ground by Building Trust</div>
                <div class="col-2"></div>
            </div>
            <div class="row px-4 py-2">
                <div class="col-2"></div>
                <p class="col-8">There are countless hurdles to cross when you enter a new market, and as Mary Akinyi the Ecommerce & Social Media Manager at Bella Beauty explains, a lot of these centre around customer acquisition. In Nigeria, Bella Beauty is a known entity with a healthy customer base, but before the expansion, it was a different story in Kenya.</p>
                <div class="col-2"></div>
            </div>
            <div class="row p-4">
                <div class="col-2"></div>
                <p class="col-8">The team were essentially starting from scratch, battling with minimal brand awareness, the rising cost of search and social campaigns, and competition from established brands that had amassed loyal fans and followers.</p>
                <div class="col-2"></div>
            </div>
            <div class="row p-4">
                <div class="col-2"></div>
                <div class="col-8">
                    <img class="img-fluid rounded-5" src="/images/bella.jpg" alt="banner">
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row p-4">
                <div class="col-2"></div>
                <p class="col-8">One strategy they used to overcome these barriers was to earn that all important buyer trust by sharing authentic reviews of their products and service - of which they already had around 2,500 from their Kenyan customer base. </p>
                <div class="col-2"></div>
            </div>
            <div class="row p-2">
                <div class="col-2"></div>
                <p class="col-8 bg-light rounded-5 p-5 lead"><em>“The fact that we could connect our Reviewed.ke account to our Nigerian website allowed us to instantly share customer feedback with a new and tentative audience. With the high cost of getting customers to the website it's been crucial that they can see honest customer reviews that give them confidence to purchase.”</em></p>
                <div class="col-2"></div>
            </div>
            <div class="row p-4">
                <div class="col-2"></div>
                <p class="col-8">Though yet to carry out any controlled testing, Mary is convinced that the positive sentiment found in this review content has had a huge impact on conversion rates, giving browsers the confidence they need to try a new product - from a relatively unknown brand - for the first time.</p>
                <div class="col-2"></div>
            </div>
            <div class="row p-4">
                <div class="col-2"></div>
                <p class="col-8">As well as adding that trusted source of information to product pages, review content has proved valuable in driving engagement and awareness, bringing persuasive social proof to the brand's marketing. .</p>
                <div class="col-2"></div>
            </div>
            <div class="row p-2">
                <div class="col-2"></div>
                <p class="col-8 bg-light rounded-5 p-5 lead"><em>“We use our 4.7 star review average for headlines in social campaigns and include reviews in many of our social posts and ads. It's an incredible asset to have so many reviews already present on a new Ecommerce site.”</em></p>
                <div class="col-2"></div>
            </div>
            <div class="row py-2 px-4">
                <div class="col-2"></div>
                <div class="col-8 h3">The Future</div>
                <div class="col-2"></div>
            </div>
            <div class="row py-2 px-4">
                <div class="col-2"></div>
                <p class="col-8">So what's next for the Bella Beauty team, and how do they plan to continue their growth? Last year brought major challenges on a global scale, with tighter privacy regulations, increased competition and the subsequent rise in acquisition costs. Despite that, the team managed to actually improve ROAS in the Nigerian market, though that's been harder to achieve in Kenya.</p>
                <div class="col-2"></div>
            </div>
            <div class="row p-4">
                <div class="col-2"></div>
                <p class="col-8">Mary explains how the brand exists in a marketplace saturated with great quality outfits, and faces challenges such as price point and low recognition, but we're sure by adopting the same strategy here as they did on home soil, they'll continue to gain profitable traction.</p>
                <div class="col-2"></div>
            </div>
            <div class="row p-4">
                <div class="col-2"></div>
                <p class="col-8">We're also on the verge of launching a proprietary analytics platform to help brands better understand conversion attribution. Keep your eyes peeled for more information on FullPicture.io and the actionable data it adds to your eCommerce growth strategy. </p>
                <div class="col-2"></div>
            </div>
            <div class="row p-4 mb-5">
                <div class="col-2"></div>
                <div class="col-8 lead">
                    <i class="uil uil-arrow-left"></i>
                    <Link class="text-dark" href="/">Back to home</Link>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </main>

    <Footer></Footer>

</template>

<script>

import { Head,Link } from '@inertiajs/inertia-vue3';
import Nav from '../Components/Nav.vue';
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';

export default {
    components: {
        Head,
        Link,
        Nav,
        Header,
        Footer,
    },
}

</script>

<style scoped>
.badge-primary {
    background-color: #ff8c00;
    border-radius: 2rem;
}
</style>
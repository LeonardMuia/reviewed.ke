<template>
    <section class="section py-3">
        <div class="container">
            <nav class="border-bottom">
		    	<div class="nav nav-pills nav-fill accent mb-3" id="nav-tab" role="tablist">
		    		<button class="pills nav-link active" id="nav-reviews-tab" data-toggle="tab" data-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="true"><i class="uil uil-star"></i>Reviews</button>
		    		<button class="pills nav-link" id="nav-businesses-tab" data-toggle="tab" data-target="#nav-businesses" type="button" role="tab" aria-controls="nav-businesses" aria-selected="false"><i class="uil uil-university"></i>Businesses</button>
		    		<button class="pills nav-link" id="nav-categories-tab" data-toggle="tab" data-target="#nav-categories" type="button" role="tab" aria-controls="nav-categories" aria-selected="false"><i class="uil uil-panel-add"></i>Categories</button>
		    		<button class="pills nav-link" id="nav-pricing-tab" data-toggle="tab" data-target="#nav-pricing" type="button" role="tab" aria-controls="nav-pricing" aria-selected="false"><i class="uil uil-coins"></i>Pricing</button>
		    		<button class="pills nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="uil uil-user-square"></i>Profile</button>
		    		<button class="pills nav-link" id="nav-setting-tab" data-toggle="tab" data-target="#nav-setting" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="uil uil-setting"></i>Settings</button>
		    	</div>
		    </nav>
            <div class="tab-content mt-3" id="nav-tabContent">
			    <div class="tab-pane fade active show" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                    <ReviewsTable :reviews="reviews" :companies="companies"></ReviewsTable>
			    </div>
                <div class="tab-pane fade" id="nav-businesses" role="tabpanel" aria-labelledby="nav-businesses-tab">
                    Businesses
			    </div>
                <div class="tab-pane fade" id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab">
                    Categories
			    </div>
                <div class="tab-pane fade" id="nav-pricing" role="tabpanel" aria-labelledby="nav-pricing-tab">
                    Pricing
			    </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    Profile
			    </div>
                <div class="tab-pane fade" id="nav-setting" role="tabpanel" aria-labelledby="nav-setting-tab">
                    Settings
			    </div>
		    </div>
        </div>
    </section>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import ReviewsTable from './ReviewsTable.vue';

export default {
	props: [
		'reviews',
		'companies'
	],

    components: {
    Link,
    ReviewsTable
}
}

</script>

<style scoped>

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
	color: #fff;
	background-color: #ff8c00;
}

.nav-link, .nav-link:hover {
	color: #0b2051;
}
</style>
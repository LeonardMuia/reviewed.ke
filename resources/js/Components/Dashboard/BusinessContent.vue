<template>
    <section class="section py-3">
        <div class="container">
            <nav class="border-bottom">
		    	<div class="nav nav-pills accent mb-3" id="nav-tab" role="tablist">
		    		<button class="pills nav-link active" id="nav-reviews-tab" data-toggle="tab" data-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="true"><i class="uil uil-star"></i>My Reviews</button>
		    		<button class="pills nav-link" id="nav-businesses-tab" data-toggle="tab" data-target="#nav-businesses" type="button" role="tab" aria-controls="nav-businesses" aria-selected="false"><i class="uil uil-university"></i>Payment Plan</button>
		    		<button class="pills nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="uil uil-user-square"></i>Profile</button>
		    		<button class="pills nav-link" id="nav-setting-tab" data-toggle="tab" data-target="#nav-setting" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="uil uil-setting"></i>Settings</button>
		    	</div>
		    </nav>
            <div class="tab-content mt-3" id="nav-tabContent">
			    <div class="tab-pane fade active show" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                    My Reviews
			    </div>
                <div class="tab-pane fade" id="nav-businesses" role="tabpanel" aria-labelledby="nav-businesses-tab">
                    Payment Plan
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
export default {
    
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
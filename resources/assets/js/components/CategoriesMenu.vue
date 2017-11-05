<template id="categories-menu-template">
    <div class="col-md-3">
        <!-- *** MENUS AND FILTERS *** -->
        <div class="panel panel-default sidebar-menu">

            <div class="panel-heading">
                <h3 class="panel-title">Categories</h3>
            </div>

            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked category-menu">
                    <li>
                        <a href="category.html">Type <span class="badge pull-right"></span></a>
                        <ul>
                        	<li class="active"><router-link to="/shop">All</router-link></li>
                            <li><router-link :to="{ name: 'shop', params: { type : 'DVD'}}">DVD</router-link></li>
                            <li><router-link :to="{ name: 'shop', params: { type : 'BluRay'}}">BluRay</router-link></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- *** MENUS AND FILTERS END *** -->

        <div class="banner">
            <a href="#">
                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
            </a>
        </div>
    </div>
</template>
<script>
	export default {
		data() {
			return {
			}
		}, 
		methods: {
			
		}
	}
</script>
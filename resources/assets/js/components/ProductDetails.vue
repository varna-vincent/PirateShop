<template id="product-details-template">
	<div id="content">
        <div class="container">

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
                                    <li><router-link to="/shop">All</router-link></li>
                                    <li><router-link to="/shop">DVD</router-link></li>
                                    <li><router-link to="/shop">BluRay</router-link></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- *** MENUS AND FILTERS END *** -->

                <div class="banner">
                    <a><img src="img/banner.jpg" alt="sales 2014" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row" id="productMain">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <img src="img/detailbig1.jpg" alt="" class="img-responsive">
                        </div>

                        <div class="ribbon sale">
                            <div class="theribbon">SALE</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->

                        <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->

                    </div>
                    <div class="col-sm-6">
                        <div class="box product-details">
                            <h1 v-if="product.name" class="text-center">{{ product.name }}</h1>
                            <p v-if="product.type" class="text-center">{{ product.type }}</p>
                            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product description</a>
                            </p>
                            <p v-if="product.price">Was: <span class="oldprice">${{ product.price }} </span></p>
                            <p v-if="product.discount">You save: ${{ discount() }} <span class="discount">({{ product.discount }}% OFF)</span></p>
                            <p v-if="product.price" class="price">${{ newprice() }}</p>
                            <h6 v-if="product.available_count" class="text-center">Only {{ product.available_count }} left! Hurry!</h6>
                            <p v-if="responseMsg != ''" class="response-msg text-center">{{ responseMsg }}</p>
                            <p class="text-center buttons pad-5" v-if="!isLoggedIn">
                                <router-link to="/login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in to Buy</router-link> 
                            </p>
                            <p class="text-center buttons pad-5" v-if="isLoggedIn">
                                <a @click="addToCart()" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                                <a class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                            </p>
                        </div>
                        <div class="row" id="thumbs">
                            <div class="col-xs-4">
                                <a href="img/detailbig1.jpg" class="thumb">
                                    <img src="img/detailsquare.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="img/detailbig2.jpg" class="thumb">
                                    <img src="img/detailsquare2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="img/detailbig3.jpg" class="thumb">
                                    <img src="img/detailsquare3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box" id="details">
                    <h4>Product details</h4>
                    <blockquote v-if="product.description">
                        <p><em>{{ product.description }}</em></p>
                    </blockquote>
                    <p v-if="product.type" class="text-center">{{ product.type }}</p>
                    <p v-if="product.actors"><strong>Actors : </strong> {{ product.actors }}</p>
                    <p v-if="product.directors"><strong>Directors : </strong> {{ product.directors }}</p>
                    <p v-if="product.writers"><strong>Writes : </strong> {{ product.writers }}</p>
                    <p v-if="product.producers"><strong>Producers : </strong> {{ product.producers }}</p>
                    <p v-if="product.studio"><strong>Studio : </strong> {{ product.studio }}</p>
                    <p v-if="product.rated"><strong>MPAA Rating : </strong> {{ product.rated }}</p>
                    <p v-if="product.subtitles"><strong>Subtitles : </strong> {{ product.subtitles }}</p>
                    <p v-if="product.language"><strong>Language : </strong> {{ product.language }}</p>
                    <p v-if="product.format"><strong>Format : </strong> {{ product.format }}</p>
                    <p v-if="product.releasedate"><strong>Release Date : </strong> {{ product.releasedate }}</p>
                    <p v-if="product.runtime"><strong>Run Time : </strong> {{ product.runtime }} min.</p>
                    <hr>
                    <div class="social">
                        <h4>Show it to your friends</h4>
                        <p>
                            <a class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                            <a class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                            <a class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                            <a class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                </div>
            </div> <!-- /.col-md-9 -->
        </div> <!-- /.container -->
    </div><!-- /#content -->
</template>
<script>
    import auth from '../utilities/Auth';
    import calculations from '../utilities/Calculations';
	export default {
		props: ['id'],
		data() {
			return {
                isLoggedIn: null,
				product: {},
                responseMsg: '',
                form : new Form({
                    status: 'cart',
                    name: '',
                    productid: null,
                    price: null,
                    discount: null
                })
			}
		},
		created() {
            auth.getCurrentUser().then(response => this.isLoggedIn = (response.data.user != null) ? true : false );
			this.loadProduct();
		},
		methods: {
			loadProduct() {
				axios.get('products/' + this.id).then(response => {
                    this.product = response.data;
                    this.loadForm(this.product.id, this.product.price, this.product.discount, this.product.name);
                });
			},
			newprice() {
                return calculations.newPrice(this.product);
			},
            discount() {
                return calculations.discount(this.product);
            },
            addToCart() {
                this.form.post('orders').then(response => {

                    let orderproduct = response.data.orderproduct;
                    this.responseMsg = orderproduct.quantity + " item(s) have been added to cart!" 
                    this.loadForm(orderproduct.product_id, orderproduct.price, orderproduct.discount, orderproduct.name);
                });
            },
            loadForm(productid, price, discount, name) {

                this.form.productid = productid;
                this.form.price = price;
                this.form.discount = discount;
                this.form.name = name;
            }
		}
	}
</script>
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
                                    <li><a href="category.html">DVD</a></li>
                                    <li><a href="category.html">BluRay</a></li>
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
                            <h1 class="text-center">{{ product.name }}</h1>
                            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product description</a>
                            </p>
                            <p>Was: <span class="oldprice">${{ product.price }} </span></p>
                            <p>You save: ${{ discount() }} <span class="discount">({{ product.discount }}% OFF)</span></p>
                            <p class="price">${{ newPrice() }}</p>
                            <h6 class="text-center">Only {{ product.available_count }} left! Hurry!</h6>

                            <p class="text-center buttons pad-5">
                                <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                                <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
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
                    <p>
                        <h4>Product details</h4>
                        <blockquote v-if="product.description">
                            <p><em>{{ product.description }}</em>
                            </p>
                        </blockquote>
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
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                </div>

                <div class="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height">
                            <h3>You may also like these products</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product1.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>

                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                </div>

                <div class="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height">
                            <h3>Products viewed recently</h3>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product1.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>

                            </div>
                        </div> <!-- /.product -->
                    </div>
                </div> 
            </div> <!-- /.col-md-9 -->
        </div> <!-- /.container -->
    </div><!-- /#content -->
</template>
<script>
	export default {
		props: ['id'],
		data() {
			return {
				product: {}
			}
		},
		created() {
			this.loadProduct();
		},
		methods: {
			loadProduct() {
				axios.get('products/' + this.id).then(response => this.product = response.data );
			},
			newPrice() {
				return parseFloat(this.product.price) - this.discount();
			},
			discount() {
				return (parseFloat(this.product.price) * parseInt(this.product.discount) / 100);
			}
		}
	}
</script>
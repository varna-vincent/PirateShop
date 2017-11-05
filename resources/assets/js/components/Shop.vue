<template id="shop-template">
	<div id="content">
        <div class="container">
            <div class="col-md-12">
                <div class="box info-bar">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 form-inline products-sort-by">
                            <strong>Type</strong>
                            <select v-model="productType" name="sort-by" @change="getByType" class="form-control">
                                <option>All</option>
                                <option value="DVD">DVD</option>
                                <option value="BluRay">BluRay</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-8  products-number-sort">
                            <div class="row">
                                <form class="form-inline">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="products-number">
                                            <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="products-sort-by">
                                            <strong>Sort by</strong>
                                            <select name="sort-by" class="form-control">
                                                <option>Price</option>
                                                <option>Name</option>
                                                <option>Sales first</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row products">
                    <div v-for="product in products" class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <router-link :to="{ name: 'product', params: { id: product.id }}">
                                            <img src="img/product1.jpg" alt="" class="img-responsive">
                                        </router-link>
                                    </div>
                                    <div class="back">
                                        <router-link :to="{ name: 'product', params: { id: product.id }}">
                                            <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                            <router-link :to="{ name: 'product', params: { id: product.id }}" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </router-link>
                            <div class="text">
                                <h3><router-link :to="{ name: 'product', params: { id: product.id }}">{{product.name}}</router-link></h3>
                                <p class="price">${{newPrice(product)}}</p>
                                <p class="buttons">
                                    <router-link :to="{ name: 'product', params: { id: product.id }}" class="btn btn-default">View detail</router-link>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.products -->

                <div class="pages">
                    <p class="loadMore">
                        <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                    </p>
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div> <!-- /.col-md-9 -->
        </div> <!-- /.container -->
    </div>
</template>
<script>
	export default {
		data() {
			return {
                productType: '',
				products: []
			}
		},
		created() {
			this.loadProducts();
		},
		methods: {
            getByType() {
                this.productType === 'All' ? this.loadProducts() : this.loadProductsByType();
            },
			loadProducts() {
				axios.get('products').then(response => this.products = response.data );
			},
			loadProductsByType() {
				axios.get('products', {
                    params: {
                        type: this.productType
                    }
                }).then(response => this.products = response.data );
			},
            newPrice(product) {
                return parseFloat(product.price) - (parseFloat(product.price) * parseInt(product.discount) / 100);
            }
		}
	}
</script>
<template id="cart-template">
	<div id="content">
            <div class="container">
                <div class="col-md-9" id="basket">
                    <div class="box">
                        <h1>Shopping cart</h1>
                        <p class="text-muted">You currently have {{ totalitems() }} item(s) in your cart.</p>
                        <div class="table-responsive">
                            <form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Discount</th>
                                        <th colspan="2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(order, index) in orders">
                                        <td>
                                            <a><img src="img/detailsquare.jpg" alt="White Blouse Armani"></a>
                                        </td>
                                        <td><router-link :to="{ name: 'product', params: { id: order.product_id }}">{{ order.name }}</router-link>
                                        </td>
                                        <td>
                                            {{ order.quantity }}
                                            <!--<input type="number" :value="order.quantity" class="form-control">-->
                                        </td>
                                        <td>${{ order.price }}</td>
                                        <td>${{ order.discount }}</td>
                                        <td>${{ total(order) }}</td>
                                        <td><a @click="deleteOrder(order.id, index)"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">${{ sum() }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                            </form>
                        </div>
                        <!-- /.table-responsive -->

                        <div class="box-footer">
                            <div class="pull-left">
                                <router-link to="/shop" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</router-link>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default" @click="updateCart()"><i class="fa fa-refresh"></i> Update basket</button>
                                <router-link v-if="order != null" :to="{ name: 'checkout', params: { orderid: order.id }}" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                </router-link>
                            </div>
                        </div>
                    </div> <!-- /.box -->
                </div> <!-- /.col-md-9 -->
                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>${{ sum() }}</th>
                                    </tr>
                                    <tr>
                                        <td>Discount over 100</td>
                                        <th>${{ discount100() }}</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>${{ netamount() }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
									<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>
							    </span>
                            </div> <!-- /input-group -->
                        </form>
                    </div>
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.container -->
        </div>
</template>
<script>
    import auth from '../utilities/Auth';
    import calculations from '../utilities/Calculations';
	export default {
		data() {
			return {
                loggedInUser: null,
                order: null,
				orders: [],
                form : new Form({
                    status: 'cart',
                    quantity: null
                })
			}
		},
		created() {
            auth.getCurrentUser().then(response => {
            	this.loggedInUser = response.data.user;
				this.loadCart(); 
            });
		},
		methods: {
			loadCart() {
				axios.get('orders/' + this.loggedInUser.id, {
                    params: {
                        status: 'cart'
                    }
                }).then(response => {
                    this.order = response.data[0];
                    this.orders = response.data[0].orderproducts;
                });
			},
			total(order) {
				let total = calculations.total(order);
				return total;
			},
			sum() {
				return this.orders.map(function(item) {
					return item.quantity * (parseFloat(item.price) - (parseFloat(item.price) * parseInt(item.discount) / 100));
				}).reduce(function(total, num) {
					return total + num;
				}, 0);
			},
			totalitems() {
				return this.orders.reduce(function(total, item) {
					return item.quantity + total;
				}, 0);
			},
            updateCart(order) {
                
            },
            deleteOrder(id, index) {
                if(confirm("Are you sure you want to remove this item from your cart?")) {
                    this.form.delete('orderProducts/' + id).then( response => this.orders.splice(index, 1) );
                }
            },
            discount100() {
                return calculations.discount100(this.totalitems(), this.sum());
            },
            netamount() {
                return calculations.netamount(this.sum(), this.discount100());
            }
		}
	}
</script>
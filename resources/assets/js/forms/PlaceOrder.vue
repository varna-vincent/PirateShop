<template id="place-order-template">
	<div class="col-md-9" id="checkout">
	    <div class="box">
	        <form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
	            <h1>Checkout - Order review</h1>
	            <ul class="nav nav-pills nav-justified">
	                <li><a href="checkout1.html"><i class="fa fa-map-marker"></i><br>Address</a>
	                </li>
	                <li><a href="checkout2.html"><i class="fa fa-truck"></i><br>Delivery Method</a>
	                </li>
	                <li><a href="checkout3.html"><i class="fa fa-money"></i><br>Payment Method</a>
	                </li>
	                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
	                </li>
	            </ul>
	            <div class="content">
	                <div class="table-responsive">
	                    <table class="table">
	                        <thead>
	                            <tr>
	                                <th colspan="2">Product</th>
	                                <th>Quantity</th>
	                                <th>Unit price</th>
	                                <th>Discount</th>
	                                <th>Total</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr v-for="order in orders">
                                    <td>
                                        <a href="#"><img src="img/detailsquare.jpg" alt="White Blouse Armani"></a>
                                    </td>
                                    <td><router-link :to="{ name: 'product', params: { id: order.product_id }}">{{ order.name }}</router-link>
                                    </td>
                                    <td>{{ order.quantity }}</td>
                                    <td>${{ order.price }}</td>
                                    <td>${{ order.discount }}</td>
                                    <td>${{ total(order) }}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Total</th>
                                    <th colspan="2">${{ sum() }}</th>
                                </tr>
                            </tfoot>
	                    </table>
	                    <p v-if="status != ''" class="red-text text-center">{{ status }}</p>
	                </div>
	                <!-- /.table-responsive -->
	            </div>
	            <!-- /.content -->

	            <div class="box-footer">
	                <div class="pull-left">
	                    <a href="checkout3.html" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Payment method</a>
	                </div>
	                <div class="pull-right">
	                    <button type="submit" class="btn btn-primary">Place an order<i class="fa fa-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </form>
	    </div> <!-- /.box -->
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
				status: '',
                form : new Form({
                    status: 'Received'
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
			onSubmit() {
				this.form.patch('orders/' + this.order.id).then( response => {
					console.log(response.data);
					if(response.data.message === 'NA') {
						this.status = 'There is not enough number of one of your items available - ' + response.data.product.name;
					} else {
						this.$router.push('/orderhistory'); 
					}
				});
			}
		}
	}
</script>
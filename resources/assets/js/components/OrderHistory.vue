<template id="order-history-template">
	<div class="container">
        <div class="col-md-3">
            <!-- *** CUSTOMER MENU *** -->
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Customer section</h3>
                </div>

                <div class="panel-body">

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <router-link to="/orderhistory"><i class="fa fa-list"></i> My orders</router-link>
                        </li>
                        <li>
                            <a><i class="fa fa-heart"></i> My wishlist</a>
                        </li>
                        <li>
                            <router-link to="/myaccount"><i class="fa fa-user"></i> My account</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9" id="customer-orders">
            <div class="box">
                <h1>My orders</h1>

                <p class="lead">Your orders on one place.</p>
                <p class="text-muted">If you have any questions, please feel free to <router-link to="/contact">contact us</router-link>, our customer service center is working for you 24/7.</p>
                <hr>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="order in orders">
                                <th># {{ order.id }}</th>
                                <td>{{ orderdate }}</td>
                                <td><router-link :to="{ name: 'product', params: { id: order.product_id }}">{{ order.name }}</router-link></td>
                                <td>$ {{ newprice(order) }}</td>
                                <td><span class="label label-success">{{ status }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import moment from 'moment';
    import calculations from '../utilities/Calculations';
	export default {
		data() {
			return {
				orders: [],
				orderdate: '',
				status: ''
			}
		},
		created() {
			this.loadOrders();
		},
		methods: {
			loadOrders() {
				axios.get('orders').then(response => {
					console.log(response.data);
					this.orderdate = moment(response.data.order.updated_at).format('MMMM Do YYYY');
					this.status = response.data.order.status;
                    this.orders = response.data.orderproducts;
                });
			},
			newprice(order) {
                return calculations.newPrice(order);
			}
		}
	}
</script>
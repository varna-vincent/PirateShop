<template id="checkout-template">
	<div id="content">
            <div class="container">

                <user-order-details v-if="showUserOrderDetails" :orderid="orderid" @proceedtodelivery="hideAll(); showDeliveryMethod=true"></user-order-details>

                <delivery-method v-if="showDeliveryMethod" :orderid="orderid" @proceedtopayment="hideAll(); showPaymentMethod=true"></delivery-method>

                <payment-method v-if="showPaymentMethod" :orderid="orderid" @proceedtoplaceorder="hideAll(); showPlaceOrder=true"></payment-method>
                
                <place-order v-if="showPlaceOrder" :orderid="orderid"></place-order>

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
                                        <th>$446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /#content -->
</template>
<script>
    import UserOrderDetails from '../forms/UserOrderDetails';
    import DeliveryMethod from '../forms/DeliveryMethod';
    import PaymentMethod from '../forms/PaymentMethod';
    import PlaceOrder from '../forms/PlaceOrder';

	export default {
		props: ['orderid'],
		data() {
			return {
				showUserOrderDetails: true,
				showDeliveryMethod: false,
				showPaymentMethod: false,
				showPlaceOrder: false
			}
		},
		methods: {
			hideAll() {
				this.showUserOrderDetails = false;
				this.showDeliveryMethod = false;
				this.showPaymentMethod = false;
				this.showPlaceOrder = false;
			}
		},
		components: { UserOrderDetails, DeliveryMethod, PaymentMethod, PlaceOrder }
	}
</script>
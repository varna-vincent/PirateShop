<template id="user-order-details-template">
	<div class="col-md-9" id="checkout">
        <div class="box">
            <form  method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <h1>Checkout</h1>
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                    </li>
                    <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                    </li>
                    <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                    </li>
                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                    </li>
                </ul>
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div :class="[form.errors.has('name') ? 'has-error' : '', 'form-group']">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" v-model="form.name" id="name" required>
                                <span class="help-block" v-if="form.errors.has('name')">
                                    <strong>{{ form.errors.get('name') }}</strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div :class="[form.errors.has('phone') ? 'has-error' : '', 'form-group']">
                                <label for="phone">Telephone</label>
                                <input type="text" class="form-control" v-model="form.phone" id="phone" required>
                                <span class="help-block" v-if="form.errors.has('phone')">
                                    <strong>{{ form.errors.get('phone') }}</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div :class="[form.errors.has('address1') ? 'has-error' : '', 'form-group']">
                                <label for="address1">Address Line 1</label>
                                <input type="text" class="form-control" v-model="form.address1" id="address1" required>
                                <span class="help-block" v-if="form.errors.has('address1')">
                                    <strong>{{ form.errors.get('address1') }}</strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address2">Address Line 2</label>
                                <input type="text" class="form-control" v-model="form.address2" id="address2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div :class="[form.errors.has('city') ? 'has-error' : '', 'form-group']">
                                <label for="city">City</label>
                                <input type="text" class="form-control" v-model="form.city" id="city" required>
                                <span class="help-block" v-if="form.errors.has('city')">
                                    <strong>{{ form.errors.get('city') }}</strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div :class="[form.errors.has('zip') ? 'has-error' : '', 'form-group']">
                                <label for="zip">ZIP</label>
                                <input type="text" class="form-control" v-model="form.zip" id="zip" required>
                                <span class="help-block" v-if="form.errors.has('zip')">
                                    <strong>{{ form.errors.get('zip') }}</strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div :class="[form.errors.has('state') ? 'has-error' : '', 'form-group']">
                                <label for="state">State</label>
                                <select class="form-control" v-model="form.state" id="state" required>
                                	<option disabled>Select one</option>
                                	<option value="CA">California</option>
                                	<option value="TX">Texas</option>
                                	<option value="FL">Florida</option>
                                </select>
                                <span class="help-block" v-if="form.errors.has('state')">
                                    <strong>{{ form.errors.get('state') }}</strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control" v-model="form.country" id="country" required>
                                	<option selected>USA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="pull-left">
                        <router-link to="/cart" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</router-link>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Continue to Delivery Method<i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
	export default {
		props: ['orderid'],
		data() {
			return {
				form : new Form({
                    name: '',
                    orderid: this.orderid,
                    phone: '',
                    address1: '',
                    address2: '',
                    city: '',
                    state: '',
                    country: '',
                    zip: ''
                })
			}
		},
		methods: {
			onSubmit() {
				this.form.post('userorderdetails').then( response => this.$emit('proceedtodelivery') );
			}
		}
	}
</script>
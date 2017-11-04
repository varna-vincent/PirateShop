<template id="product-add-template">
    <div class="col-md-9">
        <div class="box">
            <h1>Add Product</h1>
            <form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <div class="row">
                    <div class="col-sm-6">
                        <div :class="[form.errors.has('name') ? 'has-error' : '', 'form-group']">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" v-model="form.name" required>
                            <span class="help-block" v-if="form.errors.has('name')">
                                <strong>{{ form.errors.get('name') }}</strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div :class="[form.errors.has('type') ? 'has-error' : '', 'form-group']">
                            <label for="type">Type</label>
                            <select class="form-control" v-model="form.type" @change="getDiscount" required>
                            	<option disabled>Please select one</option>
                            	<option value="BluRay">BluRay</option>
                            	<option value="DVD">DVD</option>
                            </select>
                            <span class="help-block" v-if="form.errors.has('type')">
                                <strong>{{ form.errors.get('type') }}</strong>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div :class="[form.errors.has('price') ? 'has-error' : '', 'form-group']">
                            <label for="price">Price ($)</label>
                            <input type="number" class="form-control" v-model="form.price" required>
                            <span class="help-block" v-if="form.errors.has('price')">
                                <strong>{{ form.errors.get('price') }}</strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div :class="[form.errors.has('discount') ? 'has-error' : '', 'form-group']">
                            <label for="discount">Discount</label>
                            <input type="number" class="form-control" v-model="form.discount" disabled required>
                            <span class="help-block" v-if="form.errors.has('discount')">
                                <strong>{{ form.errors.get('discount') }}</strong>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div :class="[form.errors.has('count') ? 'has-error' : '', 'form-group']">
                            <label for="count">Available Count</label>
                            <input type="number" class="form-control" v-model="form.count" required>
                            <span class="help-block" v-if="form.errors.has('count')">
                                <strong>{{ form.errors.get('count') }}</strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="runtime">Run Time (min)</label>
                            <input type="number" class="form-control" v-model="form.runtime">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="actors">Actors</label>
                            <input type="text" class="form-control" v-model="form.actors">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="directors">Directors</label>
                            <input type="text" class="form-control" v-model="form.directors">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="writers">Writers</label>
                            <input type="text" class="form-control" v-model="form.writers">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="producers">Producers</label>
                            <input type="text" class="form-control" v-model="form.producers">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="subtitles">Subtitles</label>
                            <input type="text" class="form-control" v-model="form.subtitles">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="rated">Rated</label>
                            <select class="form-control" v-model="form.rated">
                            	<option disabled>Please select one</option>
                            	<option value="G">G</option>
                            	<option value="PG">PG</option>
                            	<option value="PG-13">PG-13</option>
                            	<option value="R">R</option>
                            	<option value="NC-17">NC-17</option>
                            	<option value="NR">NR</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="studio">Studio</label>
                            <input type="text" class="form-control" v-model="form.studio">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="format">Format</label>
                            <input type="text" class="form-control" v-model="form.format">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" class="form-control" v-model="form.language">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="4" class="form-control" v-model="form.description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
	export default {
		data() {
			return {
				form : new Form({
					name: '',
					type: '',
					price: 0,
					discount: 0,
					count: 0,
					runtime: 0,
					actors: '',
					directors: '',
					writers: '',
					producers: '',
					subtitles: '',
					rated: '',
					studio: '',
					format: '',
					language: '',
                    description: ''
				})
			}
		},
		methods: {
			onSubmit() {
				this.form.post('products').then( response => this.$router.push('/') );
			},
			getDiscount() {
				this.form.discount = this.form.type === 'DVD' ? 10 : 15;
			}
		}
	}
</script>
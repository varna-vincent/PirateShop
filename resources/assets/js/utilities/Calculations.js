export default {
	
  	newPrice(product) {
		return parseFloat(product.price) - this.discount(product);
	},
	discount(product) {
		return (parseFloat(product.price) * parseInt(product.discount) / 100);
	},
	total(product) {
		return parseInt(product.quantity) * this.newPrice(product);
	}

}
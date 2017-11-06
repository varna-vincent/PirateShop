export default {
	
  	newPrice(product) {
		return parseFloat(product.price) - this.discount(product);
	},
	discount(product) {
		return (parseFloat(product.price) * parseInt(product.discount) / 100);
	},
	total(product) {
		return parseInt(product.quantity) * this.newPrice(product);
	},
    discount100(totalitems, totalamount) {
        return ((totalitems > 4) ? totalamount * 5 / 100 : 0).toFixed(2);
    },
    netamount(amount, discount) {
        return (parseFloat(amount) - parseFloat(discount)).toFixed(2);
    }

}
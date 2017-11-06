import VueRouter from 'vue-router';

let routes = [
	{
		path: '/',
		component: require('./components/Home')
	},
	{
		path: '/login',
		component: require('./components/Login')
	},
	{
		path: '/register',
		component: require('./components/Register')
	},
	{
		path: '/addproduct',
		component: require('./components/admin/AddProduct')
	},
	{
		path: '/shop',
		component: require('./components/Shop')
	},
	{
		path: '/products/:id',
		name: 'product',
		component: require('./components/ProductDetails'),
		props: true
	},
	{
		path: '/cart',
		component: require('./components/Cart')
	},
	{
		path: '/checkout/:orderid',
		name: 'checkout',
		component: require('./components/Checkout'),
		props: true
	},
	{
		path: '/orderhistory',
		component: require('./components/OrderHistory')
	},
	{
		path: '/myaccount',
		component: require('./components/MyAccount')
	},
	{
		path: '/contact',
		component: require('./components/Contact')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});
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
	}
];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});
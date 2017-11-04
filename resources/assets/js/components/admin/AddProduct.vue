<template id="add-product-template">
	<div id="content">
        <div class="container">

            <admin-menu></admin-menu>
            <product-add></product-add>

        </div>
    </div>
</template>
<script>
    import AdminMenu from './AdminMenu.vue';
    import ProductAdd from '../../forms/ProductAdd.vue';

	export default {
		components: { AdminMenu, ProductAdd }
	}
</script>
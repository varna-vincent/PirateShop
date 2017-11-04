<template id="admin-menu-template">
	<div class="col-md-3">
        <!-- *** Admin MENU *** -->
        <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <h3 class="panel-title">Admin section</h3>
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><router-link to="/addproduct"><i class="fa fa-plus"></i> Add Product</router-link></li>
                    <li><a href="customer-wishlist.html"><i class="fa fa-list"></i> List Products</a></li>
                    <li><a href="customer-account.html"><i class="fa fa-plus"></i> Add Tags</a></li>
                    <li><a href="index.html"><i class="fa fa-list"></i> List Tags</a></li>
                </ul>
            </div>
        </div> <!-- /.col-md-3 -->
    </div>
</template>
<script>
	export default {

	}
</script>
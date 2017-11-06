<!-- *** TOPBAR *** -->
<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
            <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><router-link to="/cart"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">My Cart</span></router-link></li>
            </ul>
        </div>
    </div>
</div>
<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR *** -->

<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#user-services">
                    <span class="sr-only">Toggle user services</span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><router-link to="/" exact>Home</router-link></li>
                <li class="dropdown yamm-fw"><router-link to="/shop" exact>Shop </router-link></li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">
            <div class="navbar-collapse collapse right" id="user-services">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><router-link to="/register" exact>Login | Register</router-link></li>
                    @else
                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">{{ Auth::user()->name }} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5>ORDERS</h5>
                                                <ul>
                                                    <li><router-link to="/cart">My Cart</router-link></li>
                                                    <li><router-link to="/orderhistory">My Orders</router-link></li>
                                                </ul>
                                                @if (Auth::user()->isAdmin())
                                                <h5>PRODUCTS</h5>
                                                <ul>
                                                    <li><router-link to="/addproduct">Add Products</router-link></li>
                                                    <li><a href="category.html">List Products</a></li>
                                                </ul>
                                                @endif
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>ADDRESSES</h5>
                                                <ul>
                                                    <li><a href="category.html">Shipping Address</a></li>
                                                    <li><a href="category.html">Billing Address</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>LOGIN & SECURITY</h5>
                                                <ul>
                                                    <li><a href="category.html">Change Password</a></li>
                                                    <li>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>    
                                                        <form id="logout-form" name="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="banner">
                                                    <a href="#"><img src="img/banner2.jpg" class="img img-responsive" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>


            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div> <!--/.nav-collapse -->
    </div> <!-- /.container -->
</div> <!-- /#navbar -->

<!-- *** NAVBAR END *** -->
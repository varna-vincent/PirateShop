<template id="home-template">
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <div id="main-slider">
                    <div class="item">
                        <img src="img/main-slider1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/main-slider2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/main-slider3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/main-slider4.jpg" alt="">
                    </div>
                </div> <!-- /#main-slider -->
            </div>
        </div>

        <!-- *** ADVANTAGES HOMEPAGE *** -->
        <div id="advantages">
            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-heart"></i>
                            </div>

                            <h3><router-link to="/">We love our customers</router-link></h3>
                            <p>We are known to provide best possible service ever</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-tags"></i>
                            </div>

                            <h3><router-link to="/">Best prices</router-link></h3>
                            <p>The best movies at the cheapest rates</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-thumbs-up"></i>
                            </div>

                            <h3><router-link to="/">100% satisfaction guaranteed</router-link></h3>
                            <p>Free returns on everything for 3 months.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#advantages -->
        <!-- *** ADVANTAGES END *** -->
    </div>
    <!-- /#content -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

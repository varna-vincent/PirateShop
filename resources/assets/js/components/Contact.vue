<template id="contact-template">
	<div id="content">
        <div class="container">
            <div class="col-md-12">
                <div class="box" id="contact">
                    <h1>Contact</h1>
                    <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                    <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                    <hr>

                    <div class="row">
                        <div class="col-sm-4">
                            <h3><i class="fa fa-map-marker"></i> Address</h3>
                            <p>13/25 New Avenue
                                <br>New Heaven
                                <br>45Y 73J
                                <br>England
                                <br>
                                <strong>Great Britain</strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3><i class="fa fa-phone"></i> Call center</h3>
                            <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                            <p><strong>+33 555 444 333</strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                            <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                            <ul>
                                <li><strong><a >info@fakeemail.com</a></strong>
                                </li>
                                <li><strong><a >Ticketio</a></strong> - our ticketing support platform</li>
                            </ul>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>
                    <!-- /.row -->

                    <hr>

                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.4511479353687!2d-111.92149128492817!3d33.30701908081513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b06cdd50c43c7%3A0x7d3e9c66bdb7f8a2!2s251+Desert+Breeze+Blvd+W%2C+Chandler%2C+AZ+85226!5e0!3m2!1sen!2sus!4v1498079645378" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <hr>
                    <h2>Contact form</h2>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                            </div>
                        </div>
                        <!-- /.row -->
                    </form>
                </div>
            </div> <!-- /.col-md-9 -->
        </div> <!-- /.container -->
    </div>
</template>
<script>
	export default {
		
	}
</script>
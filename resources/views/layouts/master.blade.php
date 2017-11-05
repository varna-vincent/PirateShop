<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="robots" content="all,follow">
      <meta name="googlebot" content="index,follow,snippet,archive">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Obaju movie shopping site">
      <meta name="author" content="Varna Vincent">
      <meta name="keywords" content="">

      <title>Obaju : Ultimate Movie Shopping Site</title>

      <meta name="keywords" content="">

      <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
      <!-- styles -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/animate.min.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.css" rel="stylesheet">
      <!-- theme stylesheet -->
      <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
      <!-- your stylesheet with modifications -->
      <link href="css/custom.css" rel="stylesheet">
      <script src="js/respond.min.js"></script>
      <link rel="shortcut icon" href="img/favicon.png">
      <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
      </script>
  </head>

  <body>
    <div id="app">

      @include('layouts.nav')
      
      <div id="all">

          <router-view></router-view>
          @include('layouts.footer')

      </div>
    </div>  

      <!-- *** SCRIPTS TO INCLUDE *** -->
      <script type="text/javascript" src="js/app.js"></script> 
      <script src="js/jquery-1.11.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.cookie.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/modernizr.js"></script>
      <script src="js/bootstrap-hover-dropdown.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/front.js"></script>

  </body>
</html>
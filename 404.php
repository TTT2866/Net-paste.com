<?php include 'credits.php'; 
echo "$credits";?>
<!DOCTYPE html>
<html lang="en">

  <head>
 <link rel="shortcut icon" href="icon.ico">
 
      
    <meta charset="utf-8">
    <?php
	  include 'config.php';
echo "<meta property=\"og:title\" content=\"$domain_title 404\" />";
echo "<meta property=\"og:type\" content=\"website\" />";
echo "<meta property=\"og:url\" content=\"$domain/404.html\" />";
echo "<meta property=\"og:description\" content=\"$domain_title 404\" />";
echo "<meta property=\"og:image\" content=\"logo2.jpg\" />";
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
echo "<meta name=\"description\" content=\"$domain_title 404 error\">";
echo "<meta name=\"author\" content=\"$author\">";
echo "<title>$domain_title 404</title>";
?>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/logo-nav.css" rel="stylesheet">

    <style type="text/css">
.auto-style1 {
	font-family: "Helvetica";
	font-size: large;
}

	</style>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
         <img src="logo2.png" />
                        <a class="navbar-brand js-scroll-trigger" href="index.php"> <?php echo"$domain_title";?> </a>
                        
                               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
			<?php
            echo "<a class=\"nav-link\" href=\"$domain/\">Home";
            echo "</a>";
            echo "<li class=\"nav-item\">";
            echo "<a class=\"nav-link\" href=\"$domain/rules/\">Rules</a>";
            echo "</li>";
			echo "<li class=\"nav-item\">";
            echo "<a class=\"nav-link\" href=\"$domain/rules/index.php#info\">Information</a>";
            echo "</li> ";
            ?>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
	
    <div class="container">
        <br />
        <br />
        <h2 style="text-align:center"> PAGE 404 </h2>
<br />
<br />
<p style="text-align:center">
Sorry but it seems the page you're looking for may not exist or has been removed.

<br />
<br />

</p>
	    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

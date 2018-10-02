<?php include './../credits.php';
echo "$credits"; ?>
<!DOCTYPE html>
<html lang="en">

  <head>
 <link rel="shortcut icon" href="icon.ico">
      
    <meta charset="utf-8">
    
	<?php
  include './../config.php';
  echo "<meta property=\"og:title\" content=\"$domain_title\"/>";
  echo "<meta property=\"og:type\" content=\"website\"/>";
  echo "<meta property=\"og:url\" content=\"$domain\"/>";
  echo "<meta property=\"og:description\" content=\"$domain_title\"/>";
  echo "<meta property=\"og:image\" content=\"logo2.png\"/>";
  echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
  echo "<meta name=\"description\" content=\"$domain_title. Paste your scripts online!\">";
  echo "<meta name=\"author\" content=\"$author\">";

  echo "  <title>$title</title>";
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
         <img src="logo2.png" />
                     <?php   echo "<a class=\"navbar-brand js-scroll-trigger\" href=\"$domain\index.php\">$domain_title</a>"; ?>
                        
                               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
			
<?php
              echo "<a class=\"nav-link\" href=\"$domain\">Home</a></li>";
            echo "<li class=\"nav-item active\">";
              echo "<a class=\"nav-link\" href=\"$domain/rules/\">Rules</a><span class=\"sr-only\">(current)</span></li>";
			echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"$domain/rules/index.php#info\">Information</a></li>";
?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
	
    <div class="container">
        <br />
        <br />
 
<strong> <h2>Net-paste rules </h2></strong>
<br />

<ul>
<li> <h2> Please create your own GDPR complient rule page here </h2> </li>
</ul>


<br />
<br />
<p>
<strong>Discord: <?php echo "$discord"; ?> </strong> 
<br />
<strong>Email:</strong> <?php echo "$email"; ?>
<br /> 
<br />

<br />
<br />
<hr />
<div id="info"> 
<strong>Site information </strong>
<br />
<br />
<?php echo "$domain_title"; ?> is a website which aims to simplify the way you save your documents and codes online. Enter/paste in anything then have it sent to your very own page with a link.  Please keep in mind that this is NOT for securing your private information like usernames and passwords. Once you submit the paste, it is public and anyone can see it until it's removed. 
<br />
<br />
<strong>How to report pages -  </strong>
<br /> 
<br />
 To report a page, send an email with the paste link or ID. It will then be reviewed and taken down if it breaks any of the set <?php echo "<a href=\"$domain/rules\">rules</a>"; ?>
</div>
<br />
<hr />
<?php
echo "<h3><a href=\"$domain/index.php\">Back to homepage</a> </h3>";
?>


	    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

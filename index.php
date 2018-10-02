<?php 
session_start();

$_SESSION['some_key'] = true;
$_SESSION['when'] = time();

?>
<?php include 'credits.php'; 
echo "$credits";?>

<!DOCTYPE html>

<html lang="en">

  <head>
  <?php
  
    include 'config.php';
  echo "<link rel=\"shortcut icon\" href=\"$domain/icon.ico\"> ";
  ?>
    <meta charset="utf-8">    
	
	<?php
  echo "<meta property=\"og:title\" content=\"$domain_title\"/>";
  echo "<meta property=\"og:type\" content=\"website\"/>";
  echo "<meta property=\"og:url\" content=\"$domain\"/>";
  echo "<meta property=\"og:description\" content=\"$domain_title\"/>";
  echo "<meta property=\"og:image\" content=\"$domain/logo2.png\"/>";
  echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
  echo "<meta name=\"description\" content=\"$domain_title. Paste your scripts online!\">";
  echo "<meta name=\"author\" content=\"$author\">";
  echo "  <title>$title</title>";

   echo "<link href=\"$domain/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">";
   echo "<link href=\"$domain/css/logo-nav.css\" rel=\"stylesheet\">";
   echo "<link href=\"$domain/main1.css\" rel=\"stylesheet\">";
?>

  </head>

  <body>

    <!-- Navigation -->
	 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
	 <?php
        echo "<img src=\"$domain/logo2.png\"/><a class=\"navbar-brand js-scroll-trigger\" href=\"#\">$domain_title</a>";                
       ?>
	   
	     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto"> 
         <li class="nav-item active">

		
             <a class="nav-link" href="">Home
             <span class="sr-only">(current)</span>
             </a>
	   <?php
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
        <?php
	    echo "<form name=\"reg\" action=\"$domain/code_exec.php\" onsubmit=\"return validateForm()\" method=\"post\"> ";
	    ?>   
	       
	       
	        <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
                <div>
                    
                    <div align="center"><span class="auto-style1">Paste your text</span></div>
				    <hr size="3"/>
                    <div align="center"> 
					<?php
                       echo "<textarea rows=\"13\" cols=\"150\"; type=\"text\"; name=\"paste\"; maxlength=\"$paste_char_limit_2\"; required id=\"minle\" class=\"form-control\"; align=\"center\"; placeholder=\"Your paste goes here ($paste_char_limit_2 characters max)\" spellcheck=\"false\"></textarea> <br /> ";
					?>
                 
<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<img src="questionsmall.png" id="ThisShitCostMeRealMoneyToFix">				 

                        <div align="center">
<script>
document.getElementById("ThisShitCostMeRealMoneyToFix").addEventListener("click", myFunction);

function myFunction() {
  swal({
    imageUrl: 'metaexample.PNG',
    imageWidth: 317,
    imageHeight: 99,
    imageAlt: 'Example image',
    animation: true,
	width: 400,
	confirmButtonText: 'Got it!',
	timer: 4500
  });
}
</script>
   
                        <textarea rows="1" cols="30" type="text" name="meta" maxlength="30" class="form-control" align="center" placeholder="Custom META description" spellcheck="false"></textarea>
                        </div>
                        
                    </div>
	            </div>
            </table>
        	  
	            <div style="text-align:center">
                 <input type="submit" id="button" name="button" class="button" value="Submit">
                </div>
                

	    </form>
	    </div>
		<?php
         echo "<script src=\"$domain/vendor/jquery/jquery.min.js\"></script>";
         echo "<script src=\"$domain/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>";
		
        ?>
	

  </body>

</html>

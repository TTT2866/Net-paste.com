<?php
include 'config.php';
session_start();

if (! isset($_SESSION['some_key'], $_SESSION['when']) 
|| ((time() - $_SESSION['when']) > 60)) {
//I don't have a high understanding how this works but it does. it prevents spam mostly, without a google captch since i can't work out how to add that
    header('location:index.php');
    die();

}

session_unset();
session_destroy();

//It's supposed to redirect you back to the index if you've come directly here without visiting there first. It reduces spam a little

$paste=htmlspecialchars($_POST['paste']);
$pastecharlimit = substr($paste, 0, $paste_char_limit); //ensures the paste char isn't over the set limit //defined in config.php
$paste = $pastecharlimit;

$dateTime = date('d/m/y G:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$randomnumber = rand(3, $maxlimit);
$id = substr(str_shuffle(md5(sha1(time()))), 0, $randomnumber);

//Will change the ID of a paste if it already exists. 
if (file_exists('id/$id.html')) {
$id = substr(str_shuffle(md5(sha1(time()))), 0, $randomnumber);
}

$newstyle = "<link rel=stylesheet type=text/css href=id2.css>"; //custom CSS style I guess?
$preview1 = substr($paste, 0, 20);
$admprev = substr($paste, 0, $admin_log_preview);
$filename = "$domain/id/" . trim($id) . ".html";
$protocol = $_SERVER['SERVER_PROTOCOL'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$auth1=md5($ip);
$auth2=sha1($auth1);
$auth = substr($auth2, 0, 8); //will cut down the hashed IP a bit so it can't be resolved


//The 'META MACHINE'

$meta=htmlspecialchars($_POST['meta']);
 if (isset($meta)  && !empty($meta) ) {
    $preview = $meta;
    $title = $meta;
    }else{
    $preview = $preview1;
    $title = $id;} //meta thing. it makes sure you have either set or not set the meta. dont mess with it because as far as I know it works to perfection

include 'credits.php';
$data = "
<!DOCTYPE html>
<html lang=\"en\">
  <head>   
    <meta charset=\"utf-8\">

	<meta property=\"og:title\" content=\"$domain_title\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"id/$id.html\" />
    <meta property=\"og:description\" content=\"$preview\" />
    <meta property=\"og:image\" content=\"logo2.png\" />
    <meta name=\"author\" content=\"$auth\">
	
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"$domain_title. Paste your scripts online!\">
    <meta name=\"author\" content=\"$auth\"> 
		
	
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/logo-nav.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
.auto-style1 {
	font-family: \"Palatino Linotype\";
	font-size: large;
}
	</style>
	    <title>$title</title>
  </head>
  <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
           
                        <a class=\"navbar-brand js-scroll-trigger\" href=\"$domain\"><img src=\"$domain/logo2.png\" /> $domain_title</a>					
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"$domain/\">Home</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"$domain/rules/\">Rules</a>
            </li>
			<li class=\"nav-item\">
              <a class=\"nav-link\" href=\"$domain/rules/index.php#info\">Information</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class=\"container\">
  <br />
  <p>Date created - $dateTime <strong>
  <br />
  </strong> Paste ID - $id
  <br />
  Paste URL - <a href=\"$domain/id/$id.html\">$domain/id/$id.html</a>
  </p>
  
	<textarea class=\"col-md-12\" rows=\"18\">$paste</textarea>
	<br />
	    </div>
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  </body>
  $credits
</html>
";
//above is basically just your template for the user's created paste. if you wanted to put in some effort you could have multiple templates or themes with jscript

$fh = fopen('id/' .$id. '.html', 'a');
fwrite($fh, $data);
fclose($fh);


//This is all the admin information. It helps you keep statistics for the website without having to configure the Google Statistics side. 
//To see this, visit /admin/index.php (you need to configure it first)
$foradmin = "<tr>
<td>   $dateTime  </td>
<td>   <a href=$domain/id/$id.html target=_blank>$id</a>   </td>
<td>   $ip |<strong> $browser </strong> | $protocol   </td>
<td>   $auth </td>
<td>   $admprev </td>
<td>   $preview </td> 
</tr>";

$fh = fopen('admin/index.php', 'a');
fwrite($fh, $foradmin);
fclose($fh);

header("Location: id/$id.html");
echo "Creating your paste..";
sleep(1)


?>




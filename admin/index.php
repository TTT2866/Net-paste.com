<?php

  include './../config.php';
echo '<form action="" method="POST">User: <input type="text" name="user" /><br />Pass: <input type="password" name="pwd" /><input type="submit" name="submit" style="display:none;"/></form>';
        if(isset($_POST['submit'])){
            $user = md5($_POST['user']);
            $pwd = md5($_POST['pwd']);}
            if($user == "$username" && $pwd == "$password"){
                echo " ";
			
            }
			
            else{
                echo "$message";
                exit;
            }
?>
<title id="pageTitle">logs</title>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>


<table style="width:50%">
<tr>
<th>     <b>Date and time</b>    </th>
<th>    <b>ID</b>   </th>
<th>    <b>IP | Protocol</b>   </th>
<th>    <b>Hashed IP</b>   </th>
<th>    <b>Admin short preview</b> </th>
<th>    <b>User's page META</b> </th>
  </tr>
  <br />
  <br />
  <br />
  <!-- clear below -->
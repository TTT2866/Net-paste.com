<?Php
$domain = '/site-opensource';
//This would normall be yourdomain.com but I have mine set as localhost. make sure you keep the slash in front if you're only directing to a subfolder

//Don't use http or https, define this in your host or HTA setting to auto http or https
//Also make sure its the entire path to the first main index

$domain_title = 'Net-paste';
//This is the domain without the .com 

$author = 'your_name';
$paste_char_limit = '300000'; //300,000 paste character limit
$paste_char_limit_2 = "300,000"; //Makes it look neat with a comma on the index
$title = ''.$domain_title.''; //This is the page title, itll be the domain_title for now unless you want to change it

$discord = '-'; //Found on the rules page. Enter your Discord name, server, or keep it blank
$email = 'admin@'.$domain.''; //your contact email

$maxlimit = '13'; //The ID of each created paste is a certain set length. It's between 3 characters and x characters long. In this case, x=13.
//for example - https://net-paste.com/id/123456789123.html

$admin_log_preview = '30'; //A short x-character preview of each paste in the admin log


$username_unhash = 'ttt';
$password_unhash = 'ttt123';
//Default admin username and password login is above

//Leave anything below this as normal unless you want to change the hashing algorythem. note that you will have to change it in the admin page too.
$username=md5($username_unhash);
$password=md5($password_unhash);



/*

This site was made by Justin H, 2017 - 2018. And is free for anyone to use, modify, and/or distribute under the Github/MIT license. 
Please feel free to contribute to the project on Github - 
https://github.com/TTT2866/Net-paste.com

Email: admin@net-paste.com
Discord server: https://discord.gg/v6VEGK
*/


?>
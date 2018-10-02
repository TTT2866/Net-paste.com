# Net-paste.com
PHP project

===There is no live version of the site currently as I'm too poor to keep the host online===


To use these source files, do the following in order.

1: Locate config.php and change the variables to which suit you

2: In the index create a new .htaccess file and whitelist your own IP, then blacklist everything else --> https://www.htaccessredirect.net

2: In the folder called 'admin', create a htaccess file --> https://www.htaccessredirect.net

4: The 'Rules' page should be updated to your own preferences and GDPR complient (if you plan on making the site for public use)


This site should be perfectly fine to run from localhost AS IS. 

There are no databases as this site was made for simplicity purposes. If you need to mass delete all pastes created by one specific user, their IP 
is hashed with md5 and inside the meta of each page they make. Simply find the abuser's IP on the page source, copy it, search it in your FTP and delete all of the search results.
The hash is NOT the users full IP address, it's their IP hashed then cut down to prevent decryption. To have a user's IP, check the admin logs. You can ban specific
IP's from accessing the site altogether by blacklisting it in your HTaccess file or in the configuration of your site host.


:Contributing:
-Anything is super appreciated! This project was for me to start playing with PHP and isn't very amazing. If you add something, no matter how small. Please don't hesitate to add your name and site to the credits.php file! 

:Known bugs:
-Sometimes submitting a paste will just go back to the index and nothing will be sent

:Copyright: 
Nothing is actually copyrighted on the entire site

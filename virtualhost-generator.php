<?php
if(isset($_POST) && count($_POST)>0){
  $domain = $_POST["domain"];
} else {
  $domain = "";
}
?>
<html>
<head>
<title>Virtualhost Generator</title>
<link rel="stylesheet" type="text/css" media="all" href="bizzar-basic-style.css" />
</head>

<body>
<div id="wrapper">
<a href="virtualhost-generator.php"><h1>Virtualhost Generator</h1></a>
<form method="post" action="virtualhost-generator.php">

<input type="text" name="domain" value="<?php echo $domain; ?>"><br/>
<input type="submit" value="Create"> <input type="reset" value="Reset">
</form>

<br/><br/>

<?php

if(isset($_POST) && count($_POST)>0){
  echo "Creating virtualhost entry for <strong>".$domain."</strong>.";
  echo "<pre>";
  $i = '
  <VirtualHost *:80>
    ServerAdmin bderstine@gmail.com
    DocumentRoot /var/www/wp/derstinetree/
    ServerName www.derstinetree.com
    ServerAlias derstinetree.com *.derstinetree.com
    ErrorLog /var/log/httpd/derstinetree_error_log
    CustomLog /var/log/httpd/derstinetree_access_log combined

    Alias /joysbook/ "/var/www/apps/derstinetree-joysbook/"

    <Directory "/var/www/apps/derstinetree-joysbook/">
        Options Indexes MultiViews FollowSymLinks
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>

  </VirtualHost>';
  echo htmlentities($i);
  echo "</pre>";

} ?>
</div>
</body>
</html>

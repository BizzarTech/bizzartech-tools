<html>
<head>
<title>BizzarTech .htpasswd Generator</title>
</head>

<body>
<h1>BizzarTech .htpasswd Generator</h1>

<form method="post" action="htaccesspw.php">
<table>
<tr><td>Username</td><td><input type="text" name="username" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>"></td></tr>
<tr><td>Password</td><td><input type="password" name="password" ></td></tr>
<tr><td></td><td><input type="submit" value="Generate"></td></tr>

</table>

</form>


<?php
if(isset($_POST['username']) && $_POST['username']!=""){

// Password to be encrypted for a .htpasswd file
  $username = $_POST["username"];
  $clearTextPassword = $_POST["password"];
  // Encrypt password
  $password = crypt($clearTextPassword, base64_encode($clearTextPassword));
  // Print encrypted password

?>

<h4>.htaccess</h4>
<textarea name="samplehtaccess" cols="40" rows="10">
AuthUserFile /path/to/.htpasswd
AuthType Basic
AuthName "My Files"
Require valid-user
</textarea>
<br/>

<h4>.htpasswd</h4>
<textarea name="samplehtpasswd" cols="40" rows="3">
<?php echo $username.":".$password; ?>
</textarea>

<?php } ?>
</body>
</html>

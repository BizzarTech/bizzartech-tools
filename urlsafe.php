<html>
<head>
<title>BizzarTech Safe URL String</title>
</head>

<body>
<h1>BizzarTech Safe URL String</h1>
<?php
if(isset($_POST["srcstr"])){
   $strvalue = $_POST["srcstr"];
   $strsafe = urlencode($strvalue);
} else {
   $strvalue = "";
}
?>
<form method="post" action="urlsafe.php">
<input type="text" name="srcstr" size="50" max="255" value="<?php echo $strvalue; ?>"><br/>
<input type="submit" value="Convert URL"><br/><br/>
</form>

<?php
if(isset($_POST["srcstr"])){ ?>
<?php echo $strsafe; ?>
<?php } ?>
</body>
</html>
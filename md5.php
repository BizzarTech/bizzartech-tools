<html>
<head>
<title>MD5 Encryption Creation</title>
<link rel="stylesheet" type="text/css" media="all" href="bizzar-basic-style.css" />

</head>

<body>
<div id="wrapper">
<a href="md5.php"><h1>MD5 Encryption Creation</h1></a>
<?php
if(isset($_POST) && isset($_POST["c"]) && $_POST["c"]!=""){
  //var_dump($_POST);
  $c = $_POST["c"];
} else {
  $c = "";
}
?>
<form method="post" action="md5.php">
<table>
<input type="password" name="c" value="<?php echo $c; ?>"><br/>
<input type="submit" value="Convert">
</table>
</form>

<?php
if(isset($_POST) && isset($_POST["c"]) && $_POST["c"]!=""){ ?>
<div style="padding:20px;border:1px solid blue;">
Output:<br/>
<?php echo md5($c); ?>
</div>

<?php } ?>
</div>
</body>
</html>
<form method="get" action="timestamp-validate.php">
<input type="text" name="timestamp"><br/>
<input type="submit" value="Convert">
</form>

<?php
if(isset($_REQUEST["timestamp"])){
  $ts = $_REQUEST["timestamp"];
  echo date("F j, Y, g:i a",$ts);
}

?>
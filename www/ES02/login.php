<?php
$username = $_GET['username'];
$passwd = $_GET['password'];


if($username=="Mario" && $passwd=="123") 
{
  $msg = "CIAO benvenuto $username nel mio sito!";
} else {
  $msg = "Credenziali sbagliate";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Accesso a pagina riservata</title>
</head>
<body>
  <h3>Pagina di Accesso</h3>
  
  <?=$msg?>

</body>
</html>
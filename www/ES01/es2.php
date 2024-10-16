[15:00, 16/10/2024] PIENO DI COZZE: <?php
$username = $_GET['username'];
$password = $_GET['password'];


if($username=="marie" && $password=="ugo") {
  $msg = "Credenziali sbagliate";
} else {
  $msg = "Benvenuto\a $username nella pagina riservata del mio sito!";
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
[15:00, 16/10/2024] PIENO DI COZZE: <?php
$username_corretta = "marie";
$password_corretta = "ugo";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST["username"]) && isset($_POST["password"])) 
    {
        $username_inserito = $_POST["username"];
        $password_inserita = $_POST["password"];

        if ($username_inserito == $username_corretta && $password_inserita == $password_corretta) 
        {
           echo "<h2>Accesso riuscito! Benvenuto, $username_inserito! </h2>";
        } else {
            echo "<h2>Username o password errati! Riprova.</h2>";
            //dati errati rivisualizzare il form
            visualizza_form();
               }
    }else {
        //i campinon sono stati mandati rivisualizza il form
        visualizza_form();
          }
}else {
    //prima accesso alla pagina e visualizza il form
    visualizza_form();
      }

//funzione per visualizzare il form
function visualizza_form() 
{
  echo '
  <form action="" method="post">
   <label for="name">Username:</label>
   <input type="text" id="username" name="username" placeholder= "nome"><br>
   <label for="password">Password:</label>
   <input type="password" id="password" name="password" placeholder = "password"><br>
   <input type="submit" value="invia">
   </form>';  
}

?>
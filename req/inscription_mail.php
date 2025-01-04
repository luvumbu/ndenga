<?php
session_start();
require_once '../Class/DatabaseHandler.php'; 
require_once '../Class/dbCheck.php'; 


$databaseHandler = new DatabaseHandler($dbname, $username);

$username__ = $_POST["username"] ; 
 
 
 $databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM `$dbname` WHERE nom_user ='$username__' ";

$databaseHandler->getListOfTables_Child($dbname);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

$id_projet_dynamic_1 = $dynamicVariables['nom_user'];


 




 

 



if(count($id_projet_dynamic_1)==0){


$time = time() ; 

    $databaseHandler_ = new DatabaseHandler($dbname, $username);
   
 
    $databaseHandler_->action_sql("INSERT INTO `$dbname` (nom_user,password_user) VALUES ('$username__','$time')");








echo count($id_projet_dynamic_1) ;


$SERVER_NAME = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'nom_du_site_par_defaut';

$to = $username__; // Adresse e-mail cible
$subject = 'Confirmation de la validation de votre inscription sur ' . $SERVER_NAME;

$message = '
<html>
<head>
  <title>Confirmation d\'inscription</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
    .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; }
    .header { background: #000; color: #fff; padding: 10px; text-align: center; }
    .btn { padding: 10px 20px; background: #000; color: #fff; text-decoration: none; border-radius: 5px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Bienvenue sur ' . htmlspecialchars($SERVER_NAME) . '</h1>
    </div>
    <p>Bonjour,</p>
    <p>Nous avons le plaisir de vous informer que votre inscription sur <strong>' . htmlspecialchars($SERVER_NAME) . '</strong> a été validée avec succès.</p>
    <p>Votre mot de passe provisoir est  '.$time.'</p>
  </div>
</body>
</html>';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: support@' . $SERVER_NAME . "\r\n";
$headers .= 'Reply-To: support@' . $SERVER_NAME . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo '<div class="notification">E-mail envoyé avec succès.</div>';
} else {
    echo '<div class="notification">Échec de l\'envoi de l\'e-mail.</div>';
}


}
?>

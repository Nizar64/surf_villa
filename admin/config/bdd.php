<?php 

$dsn = "mysql:dbname=surfvilla;host=localhost";
$user = "surfvilla";
$pw = "[NxMM0Yyoo2C7)4B";

try {
    $bdd = new PDO ($dsn, $user, $pw);
} catch (PDOException $error) {
    var_dump($error);
    die;
}

?>
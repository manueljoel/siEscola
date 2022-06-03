
<?php


if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require './Models/PDOConnection.php';
    require './Models/Usuario.php';

    $u = new Usuario();

    $login = addslashes($_POST['email']);
    $login = addslashes($_POST['senha']);
} else {
    header("location: index.php");
}
?>


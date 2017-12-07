<?php
/**
 * Created by PhpStorm.
 * User: technohehl
 * Date: 07.12.17
 * Time: 23:13
 */
$username = $_POST['username'];
$passwort = $_POST['passwort'];

$pass = password_hash($passwort, PASSWORD_DEFAULT);

if (password_verify($passwort, $pass)) {
    echo "Success";
} else {
    echo "Failed";
}
?>
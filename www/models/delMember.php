<?php
require "../moduls/conDB.php";

$email = $_POST['email'];

try {
    $sql = "DELETE FROM tb_member WHERE email = '$email' ";
    $mysqli = $mysqli->query($sql);
} catch (Exception $e) {
    $e->getMessage();
}

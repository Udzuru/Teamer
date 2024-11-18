<?php
include "settings.php";
$conn = new mysqli($url, $user, $password,$db);
$conn->query("DELETE FROM users");
$conn->query("ALTER TABLE users AUTO_INCREMENT = 0;");
echo "Все почищенно!";
?>
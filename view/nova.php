<?php
$username = "";

if (!(preg_match('/^[a-zA-Z]+/', $username))) {
    echo "Username tem caracteres inválidos...";
}
else {
    echo "Username Ok!";
}
?>
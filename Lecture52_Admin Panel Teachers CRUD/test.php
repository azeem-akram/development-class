<?php

$password = "abc123";

$enc_password = password_hash($password, PASSWORD_DEFAULT);

echo $enc_password;


?>
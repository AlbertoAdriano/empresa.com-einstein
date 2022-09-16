<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "sistema";
$banco = new mysqli($host, $user, $password, $database);

if ($banco->connect_errno) {
      echo "Erro ao conectar";
} else {
      echo "Boa";
}

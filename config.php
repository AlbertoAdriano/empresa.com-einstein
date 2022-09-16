<?php
session_start();
include_once('conectar.php');

$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'Género', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'Data_de_nascimento', FILTER_SANITIZE_STRING);
$departamento = filter_input(INPUT_POST, 'Departamento', FILTER_SANITIZE_STRING);

$comando_sgl = "INSERT INTO cadastro(Nome, email,Telefone,Género,	Data_de_nascimento,Departamaneto) VALUES('$Nome','$email','$telefone','$genero','$data','$departamento')";

mysqli_query($banco, $comando_sgl);

if (mysqli_insert_id($banco)) {
      $_SESSION['msg'] = "<p style = 'color:green'>Usuário cadastrado com sucesso</p>";
      header("location:formulario01.php");
} else {
      $_SESSION['msg'] =
            "<p style = 'color:red'>Erro ao cadastrar</p>";
      header("location:formulario01.php");
}

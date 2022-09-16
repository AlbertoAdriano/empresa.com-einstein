session_start();
<?php

if (isset($_POST['submit'])) {

      //print_r('Nascimento:' . $_POST['da_nascimento']);
      //print_r(' <br>');
      //print_r('Sexo:' . $_POST['genero']);
      //print_r(' <br>');
      //print_r('telefone:' . $_POST['telefone']);
      //print_r(' <br>');
      include_once('conectar.php');
      $Nome = $_POST['Nome'];
      $email = $_POST['email'];
      $Telefone = $_POST['Telefone'];
      $Género = $_POST['Género'];
      $data = $_POST['Data_de_nascimento'];
      $Departamento = $_POST['Departamento'];

      $comando_sql = "INSERT INTO cadastro(Nome,email,Telefone,Género,Data_de_nascimento,Departamaneto) VALUES('$Nome','$email','$Telefone','$Género','$data','$Departamento')";
      mysqli_query($banco, $comando_sql);


      if (mysqli_insert_id($banco)) {
            $_SESSION['msg'] = "Cadastro realizado com sucesso";
            header("location:formulario01.php");
      } else {
            header("location:formulario01.php");
      }
}


?>

<?php
if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
}


?>
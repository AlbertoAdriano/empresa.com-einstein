<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sistema de cadastro</title>
      <link rel="stylesheet" href="estilo_formulario01.css">
</head>

<body>
      <nav>

            <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
            </ul>
      </nav>
      <form action="config.php" method="POST">

            <h1>SISTEMA DE CADASTRO</h1>
            <br>
            <?php
            if (isset($_SESSION['msg'])) {
                  echo  $_SESSION['msg'];
                  unset($_SESSION['msg']);
            }



            ?>
            <div>
                  <label for="Nome">Nome</label>
                  <input type="text" name="Nome" id="nome" required>
            </div>

            <div>
                  <br>
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" required>
                  <br>
            </div>

            <div>
                  <br>
                  <label for="Telefone">Telefone</label>
                  <input type="tel" name="Telefone" id="Telefone" required>
                  <br>
            </div>

            <label for="Género">Género</label><br>
            <select name="Género" required>
                  <option></option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>

            </select>


            <br>
            <br>
            <label for="Data_de_nascimento">Data de nascimento</label><br>
            <input type="date" name="Data_de_nascimento" id="Date_de_nascimento" class="center" required>
            <br>
            <br>
            <label for="Departamaneto">Departamento</label><br>
            <select name="Departamento" id="Departamento" required>
                  <option></option>
                  <option value="Contablidade">Contablidade</option>
                  <option value="TI">TI</option>
                  <option value="RH">RH</option>
                  <option value="Atendimento">Atendimento</option>
                  <option value="Chefe_de_cozinha">Chefe de cozinha</option>
                  <option value="chefe_de_limpeza">Chefe de limpeza</option>
                  <option value="Motoristra">Motoristra</option>
                  <option value="Estatística">Estatística</option>
                  <option value="Market_digital">Market digital</option>

            </select>

            <br>
            <br>
            <input type="submit" name="submit" value="Enviar" class="centro">
            <br>
      </form>
</body>

</html>
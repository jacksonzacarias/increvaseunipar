<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visita na Unipar</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

  <input type="checkbox" id="toggle">
  <label for="toggle" class="show-btn">Show Modal</label>
  <div class="wrapperFather">
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">
      <header>Faça sua inscrição</header>
      <p>Inscreva-se para realizar a visita na UNIPAR - UNIVERSIDADE PARANAENSE.</p>
    </div>
    <form action="index.php" method="POST">
        <img src="5188362.png"  alt="Imagem" class="img"  >
    <?php 
    $userEmail = "";
    if(isset($_POST['Inscreve-se'])){
      $userEmail = $_POST['email'];
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
        $subject = "Obrigado por se inscrever";
        $message = "Obrigado por se inscrever, Na vita para Unipar, aparti daqui você começa uma nova vida na areá da tecnologia.";
        $sender = "From: jackson.savoldi@escola.pr.gov.br";
        //php function to send mail
        if(mail($userEmail, $subject, $message, $sender)){
          ?>

          <div class="alert success-alert">
            <?php echo "Obrigado por se inscrever!" ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>

          <div class="alert error-alert">
          <?php echo "Falha ao enviar seu email!" ?>
          </div>
          <?php
        }
      }else{
        ?>

        <div class="alert error-alert">
          <?php echo "$userEmail Email não é um endereço de email válido!" ?>
        </div>
        <?php
      }
    }
    ?>
      <div class="field">
        <input type="text" class="email" name="email" placeholder="Email" required value="<?php echo $userEmail ?>">
          <input type="text" class="nome" name="nome" placeholder="Nome" required value="">
          <label for="serie"></label>
          <select name="serie" id="serie" required>
              <option value="Desenvolvimento de Jogos">1º Desenvolvimento de Jogos</option>
              <option value="Desenvolvimento de Sistemas">2º Desenvolvimento de Sistemas</option>
              <option value="Técnico em Informática">3º Técnico em Informática</option>
              <option value="Técnico em Informática">4º Técnico em Informática</option>
              <option value="Outra Série">Outra Série</option> <!-- Adicione quantas opções desejar -->
          </select>
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Inscreva-se</button>
      </div>
    </form>
    <div class="text">Nós não compartilhamos suas informações.</div>
  </div>
</div>

  <div class="canvas-background">
      <canvas id="canvas1"></canvas>
  </div>
  <script type="text/javascript" src="./main.js"></script>
</body>
</html>

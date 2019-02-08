<?php
include 'connection.php';

session_start();

if(!isset($_SESSION['login'])){

  include 'logout.php';

} else {

  $login = $_SESSION['login'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
  <meta http-equiv="Content-Type" content="text/html; charset=uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
  <?php
  $sql = "SELECT * FROM usuario WHERE login='$login';";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  while($row){
    ?>

    <div class="user">
      <div class="headusertxt">
        <div class="deslog">
          <a href="logout.php">
            <img width="50px" height="50px" src="assets/logout.png"></a>
        </div>
        <div class="txt">
          Bem vindo <b><?php echo $_SESSION['login']; ?></b>.
        </div>

      <div id=tabela3> 
       <div id=cabtab3> 
         Nome completo
       </div> 
       <div id=corpotab3> 
        <?php  echo $row['nome']; ?>
      </div> 
</div> 
 <div id=tabela3> 
 <div id=cabtab3> 
   Nome da Mãe
 </div> 
 <div id=corpotab3> 
   <?php  echo $row['nomeMae']; ?> 
 </div> 
</div> 
<div id=tabela3> 
 <div id=cabtab3> 
   Nome do Pai
 </div> 
 <div id=corpotab3> 
   <?php  echo $row['nomePai']; ?> 
 </div> 
</div> 

<div id=tabela3> 
 <div id=cabtab3> 
   Login
 </div> 
 <div id=corpotab3> 
   <?php  echo $row['login']; ?> 
 </div> 
</div> 
<div id=tabela3> 
       <div id=cabtab3> 
         CPF
       </div> 
       <div id=corpotab3> 
        <?php  echo $row['cpf']; ?>
      </div> 
</div>
<div id=tabela3> 
 <div id=cabtab3> 
   Data de Nascimento
 </div> 
 <div id=corpotab3> 
   <?php  echo $row['aniversario']; ?> 
 </div> 
</div> 
<div class="btn">
  <a href="editar.php"><button>Editar dados</button></a>
</div>
</div>

<?php   $row = $result->fetch_assoc();
} ?>

</body>
</html>
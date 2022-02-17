<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <title>Alterar</title>
    <meta charset="utf-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>

  <header>
  
  <nav>

    <a href="#"><img src="../img/logof.png" height="38px" width="auto" style="margin-top: 50px;"></a>

    <ul class="nav-list">

      <li><a href="../index.html">Home</a></li>
      <li><a href="cadastrar.php">Cadastro</a></li>
      <li><a href="excluir.php">Excluir</a></li>
      <li><a href="consultar_pesq.php">Pesquisar</a></li>
      <li><a href="listar.php">Listas</a></li>
      <li><a href="consultar_alt.php">Alteração</a></li>

    </ul>

  </nav>

</header>

<center><font face="Century Gothic" size="6"><b>Alteração de Carros</b><font size="4">
    <font face="Century Gothic" size="3"><br>

<fieldset>
    <legend><b>Gustavo Grorossi Muniz</b></legend>

    <?php
    $txtidcarro=$_POST["txtidcarro"];
    include_once 'Conexao.php';
    $p = new tbcarros();
    $p->setIdCarro($txtidcarro);
    $pro_bd=$p->alterar();
    ?>
    <br><form name="cliente2" method="POST" action="" >
    <?php
        foreach($pro_bd as $pro_mostrar)
        {
    ?>

        <input type="hidden" name="txtidcarro" size="3" value='<?php echo $pro_mostrar[0] ?>'>
        <b> <?php echo "ID do Carro: " . $pro_mostrar[0];?></b>
        <br><br> <b><?php  echo "Fabricante: " ?></b>
        <input type="text" name="txtfabricante" size="30" value='<?php echo $pro_mostrar[1] ?>'>
        <br><br> <b><?php  echo "Modelo: " ?></b>
        <input type="text" name="txtmodelo" size="20" value='<?php echo $pro_mostrar[2] ?>'>
        <br><br> <b><?php  echo "Ano: " ?></b>
        <input type="text" name="txtano" size="4" value='<?php echo $pro_mostrar[3] ?>'>
        <br><br> <b><?php  echo "Placa: " ?></b>
        <input type="text" name="txtplaca" size="7" value='<?php echo $pro_mostrar[4] ?>'>
        <br><br> <b><?php  echo "Cor: " ?></b>
        <input type="text" name="txtcor" size="20" value='<?php echo $pro_mostrar[5] ?>'>
        <br><br> <b><?php  echo "Comentarios: " ?></b>
        <input type="text" name="txtcomentarios" size="30" value='<?php echo $pro_mostrar[6] ?>'>
        <br><br><br><center>
        <input name="btnalterar" type="submit" value="Alterar">

        <?php
        }
        ?>
</form>
</fieldset>

<?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnalterar))
    {
      include_once 'Conexao.php';
      $pro = new tbcarros();
      $pro->setFabricante($txtfabricante);
      $pro->setModelo($txtmodelo);
      $pro->setAno($txtano);
      $pro->setPlaca($txtplaca);
      $pro->setCor($txtcor);
      $pro->setComentarios($txtcomentarios);
      $pro->setIdCarro($txtidcarro);
      echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
      header("location:consultar_alt.php");
    }
?>

<center> <br><br><br><br>
<button class="voltar"><a href="../index.html"> Voltar </a><button>

  
  
  </body>
</html>
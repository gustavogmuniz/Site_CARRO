<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastrar</title>
    <meta charset="utf-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>
  <main class="main">
  <section class="back">

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
    <center>
        <form name="cliente" method="POST" action="" class="form-register">
                <h4>Cadastro de Carros</h4>
                    <input class="controls" type="text" name="txtidcarro" id="nomes" maxlength="3" placeholder="ID do Carro">
                    <input class="controls" type="text" name="txtfabricante" id="apellidos" maxlength="30" placeholder="Fabricante">
                    <input class="controls" type="text" name="txtmodelo" id="correo" maxlength="20" placeholder="Modelo">
                    <input class="controls" type="text" name="txtano" id="correo" maxlength="4" placeholder="Ano">
                    <input class="controls" type="text" name="txtplaca" id="correo" maxlength="7" placeholder="Placa">
                    <input class="controls" type="text" name="txtcor" id="correo" maxlength="20" placeholder="Cor">
                    <input class="controls" type="text" name="txtcomentarios" id="correo" maxlength="30" placeholder="Comentários">
                        <input name="btnenviar" class="botons" type="submit" value="Registrar">
                        <input name="limpar" class="botons" type="reset" value="Limpar">
        
        
        <br><br>
 

<?php 
extract($_POST, EXTR_OVERWRITE);
if(isset($btnenviar))
{
    include_once 'Conexao.php';
    $pro=new tbcarros();
    $pro->setIdCarro($txtidcarro);
    $pro->setFabricante($txtfabricante);
    $pro->setModelo($txtmodelo);
    $pro->setAno($txtano);
    $pro->setPlaca($txtplaca);
    $pro->setCor($txtcor);
    $pro->setComentarios($txtcomentarios);
    echo "<h3><br><br>" . $pro->salvar() . "</h3>";
}

?>




</form>
<br>


</center>
</section>
</main>

  





  </body>
</html>
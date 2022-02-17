<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <title>Excluir</title>
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
        <h4>Excluir o Cadastro</h4>
        <input class="controls" type="text" name="txtidcarro" id="nomes" maxlength="3" placeholder="ID do Carro">
        <input name="btnenviar" class="botons" type="submit" value="Excluir">
        <input name="limpar" class="botons" type="reset" value="Limpar">
     
<br>

<?php 
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        include_once 'Conexao.php';
        $p = new tbcarros();
        $p->setIdCarro($txtidcarro);
        echo "<h3>" . $p->exclusao() . "</h3>";
    }
?>

<br>

</form>

  <br>


<button class="voltar"><a href="../index.html"> Voltar </a><button>



</center>
  </section>
  </main>
  </body>
</html>
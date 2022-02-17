<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Pesquisar</title>
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
            <h4>Pesquisar Carro</h4>
                <input class="controls" type="text" name="txtidcarro" id="nomes" maxlength="3" placeholder="ID do Carro">
                <input name="btnenviar" class="botons" type="submit" value="Pesquisar">
                <input name="limpar" class="botons" type="reset" value="Limpar">
        

		<?php
		extract($_POST, EXTR_OVERWRITE);
		if(isset($btnenviar))
		{
			include_once 'Conexao.php';
			$p = new tbcarros();
			$p-> setIdCarro($txtidcarro. '%'); 
			$pro_bd=$p->consultar();
			foreach($pro_bd as $pro_mostrar)
				{
				 ?> <br>
				 <br> <?php echo "IdCarro: " . $pro_mostrar[0];?></br> &nbsp;&nbsp;&nbsp;&nbsp;
				 <br> <?php echo "Fabricante: " . $pro_mostrar[1];?></br> &nbsp;&nbsp;&nbsp;&nbsp;
				 <br> <?php echo "Modelo: " . $pro_mostrar[2];?></br> 
                 <br> <?php echo "Ano: " . $pro_mostrar[3];?></br> 
                 <br> <?php echo "Placa: " . $pro_mostrar[4];?></br> 
                 <br> <?php echo "Cor: " . $pro_mostrar[5];?></br> 
                 <br> <?php echo "Comentarios: " . $pro_mostrar[6];?></br> 
				 <?php
 				}
		}
?>


</form>



<br>





</center>
  </section>
    </main>

   </body>
</html>	
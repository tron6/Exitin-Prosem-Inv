	<?php
		if (isset($title))
		{
	?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class='glyphicon glyphicon-fire' style="color:red"></i><font color="black"><FONT COLOR="white"><b> SI<font color="red">SE</font></b></FONT></font></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="stock.php"><i class='glyphicon glyphicon-qrcode'></i><font color="#2ECC71"> (E) de Productos</font></a></li>
        <li><a href="index2.php"><i class='glyphicon glyphicon-barcode'></i><font color="#2ECC71"> Presupuestos</font></a></li>
        <li class=""><a href="clientes.php"><i class='glyphicon glyphicon-link'></i><font color="#2ECC71">clientes</font></a></li>
        <li class=""><a href="pdf/REPORTE DE REVISION.pdf" download="Formato Reporte de Revisiòn"><i class='glyphicon glyphicon-download-alt'></i><font color="#2ECC71">Reporte de revisiòn</font></a></li>



		<li class="<?php if (isset($active_categoria)){echo $active_categoria;}?>"><a href="categorias.php"><i class='glyphicon glyphicon-equalizer'></i><font color="#2ECC71"> Categorías</font></a></li>
    <li class="<?php if (isset($active_categoria)){echo $active_categoria;}?>"><a href="recarga.php"><i class='glyphicon glyphicon-refresh'></i><font color="#2ECC71">Recargas Ext</font></a></li>
    <li class="<?php if (isset($active_categoria)){echo $active_categoria;}?>"><a href="recarga.php"><i class='glyphicon glyphicon-list-alt'></i><font color="#2ECC71">Certificados</font></a></li>

		<li class="<?php if (isset($active_usuarios)){echo $active_usuarios;}?>"><a href="usuarios.php"><i  class='glyphicon glyphicon-user'></i><font color="#2ECC71">Usuarios</font></a></li>
    <li class="<?php if (isset($active_usuarios)){echo $active_usuarios;}?>"><a href="cobranza.php"><i  class='glyphicon glyphicon-usd
'></i> (S)Cobranza</a></li>

       </ul>
      <ul class="nav navbar-nav navbar-right">
		<li class="<?php if (isset($active_productos)){echo $active_productos;}?>"> <a href="login.php?logout"><i class='glyphicon glyphicon-off'></i>Salir</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<?php
		}
	?>   
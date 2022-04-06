﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Usuarios</title>
		<link href="../../favicon.ico" rel="shortcut icon" type="image/x-icon" />	

		<link href="../fonts/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap -->	
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/zeus.css" rel="stylesheet">
		<link href="../css/bootstrap-dialog.min.css" rel="stylesheet">
		<!-- Materialize -->
		<link href="../css/checkbox.css" rel="stylesheet">
		<link href="../css/btn_floating.css" rel="stylesheet">
		<link href="./css/estilos.css" rel="stylesheet">
		
		<link href="../css/footable-0.1.css" rel="stylesheet" type="text/css" />		
		<link href="../css/footable.paginate.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>
	<header>
		<nav class="navbar navbar-dark navbar-fixed-top">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			<?php include_once '../logo-black.php'; ?>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li class ="btn-dark" id="logout"><a href="../session.php?logout=true" class="btn-dark"><i class="fa fa-power-off fa-2x">&nbsp;</i>Salir</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->		  
		  </div><!-- /.container-fluid -->
		</nav>	
	</header>

	
	<div class="container">
		<div id="content">
			<?php include_once ($view->contentTemplate);?>
        </div>
	</div> <!-- Container -->

	<!-- Modal de Formulario de usuario-->
	<div class="modal fade" tabindex="-1" role="dialog" id="FormUsuario"> </div><!-- /.modal-dialog -->
		
	<!-- Modal de confirmación para eliminar-->
	<div class="modal fade" id="confirma" role="dialog" tabindex="-1"></div>

	<!-- Btn nuevo usuario-->
	<a id="btn_fltn" class="btn-floating fixed-action-btn btn-large waves-effect modal-tr" data-toggle="modal"  title="Nuevo usuario" data-target="#FormUsuario">
		<i style="font-size:24px" class="material-icons fa fa-user-plus" >&nbsp;</i> 
	</a>

    <script src="../js/jquery-2.2.2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-dialog.min.js"></script>
    <script src="./js/functions.js"></script>
	
		<script src="../js/footable/footable.js"></script>
		<script src="../js/footable/footable.sortable.js"></script>
		 
		<script type="text/javascript">
			$(function() {
			  $('table').footable();
			});
		</script>
	
</body>
</html>
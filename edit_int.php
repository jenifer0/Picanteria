<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<?php include('header.html');?>
	<script type="text/javascript" ></script> 
</head>

<body>
<center>
<div class="container" po>
		
		
		<form class="form-horizontal" action="edit.php" method="post">
			<?php 
				require_once("connect.php");

				$id =  $_GET['id'];
				$condicion = array("_id" => new  MongoId($id));
				if($c_platos->count($condicion) == 1){
					$platos = $c_platos->findOne($condicion);
				}
				$namePlato = $platos['tipo'];
			?>
		  	<div class="control-group">
		    	<label class="control-label" for="inputNamePlato">Platillo: </label>
		    	<div class="controls">
		      		<input type="text" name="namePlato" id="inputNamePlato" class="input-xlarge" placeholder="Nombre del Plato" value="<?php echo $platos['nombre'] ?>"/>
		    	</div>
		  	</div>



			<div class="control-group">
		    	<label class="control-label" for="inputTipo">Tipo</label>
		    	<div class="controls">
		      		<input type="text" name="tipo" rows="6" class="input-xlarge" value="<?php echo $platos['tipo'] ?>" />
		    	</div>
		  	</div>



		  	<div class="control-group">
		    	<label class="control-label" for="inputPrecio">Precio</label>
		    	<div class="controls">
		      		<input type="text" name="precio" rows="6" class="input-xlarge" value="<?php echo $platos['precio'] ?>" />
		    	</div>
		  	</div>

		  	<div class="control-group">
		    	<div class="controls">
		    		<input type="hidden" name="id" value="<?php echo $id ?>" />
		      		<button type="submit" class="btn btn-large btn-primary"><i class="icon-book icon-white"></i> Guardar</button>
		    	</div>
		  	</div>
		</form>
	</div>
</center>

  <?php include('footer.html');?>
</body>
</html>

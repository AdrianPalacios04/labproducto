<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos del Producto</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h4 style="margin-top: 50px">Lista de Productos</h4>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM productos WHERE id='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM productos WHERE id='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

			<form class="form-inline" method="get">
				<div class="form-group col-sm-3">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">--Listado por Categoria--</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<option value="1" <?php if($filter == 'Primera Categoria'){ echo 'selected'; } ?>>Primera Categoria</option>
						<option value="2" <?php if($filter == 'Segunda Categoria'){ echo 'selected'; } ?>>Segunda Categoria</option>
                        <option value="3" <?php if($filter == 'Tercara Categoria'){ echo 'selected'; } ?>>Tercera Categoria</option>
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover" id="tabla">
				<thead>
				<tr>
                    <th>No</th>
					<th>Nombre</th>
                    <th>Precio</th>
					<th>Stock</th>
					<th>Categoria</th>
                    <th>Acciones</th>
				</tr>
				</thead>
				<tbody>
				<?php
				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM productos WHERE idcat='$filter' ORDER BY id ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM productos ORDER BY id ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nombre'].'</td>
                            <td>'.$row['precio'].'</td>
							<td>'.$row['stock'].'</td>
							<td>';
							if($row['idcat'] == '1'){
								echo '<span class="label label-success">Primera Categoria</span>';
							}
                            else if ($row['idcat'] == '2' ){
								echo '<span class="label label-info">Segunda Categoria</span>';
							}
                            else if ($row['idcat'] == '3' ){
								echo '<span class="label label-warning">Tercera Categoria</span>';
							}
						echo '
							</td>
							<td>
							<a href="edit.php?nik='.$row['id'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="productos.php?aksi=delete&nik='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#tabla').dataTable({
				"paging": false,
				"ordering":false,
				"info":false
			})
		})
	</script>

</body>
</html>
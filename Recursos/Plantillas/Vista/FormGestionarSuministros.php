<?php
include_once("Plantilla/cabezera.php");
?>
<nav class=" full-width NavBar-Nav">
			<div class="full-width NavBar-Nav-bg hidden-md hidden-lg show-menu-mobile"></div>
			<ul class="list-unstyled full-width menu-mobile-c">
				<li>
					<button  class="btn btn-primary btn-sm" type="submit">
						Agotados
					</button>
				</li>
			</ul>
		</nav>
<section class="full-width section">
<div class="modal-body row">
     <div class="col-md-6">
	 <div class="full-width bar-info-user">
		<i class="	fa fa-book" aria-hidden="true"></i>
		<div>Listado de Suministros </div>		
		</div>
		
		<label>Buscar : </label> <input type="text" name="busqueda">
		<form action="get.php" method="POST">
		<button type="submit" ></button>
		</form>
     <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	 
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad</th>
				<th>Detalle</th>
				<th colspan="2">
				<form action="get.php" method="POST"> 
				<center><button type="submit">Nuevo</button></center>
				</form>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                    <td></td>
					<td>
					<form action="get.php" method="POST"> 
						<center><button type="submit"> Editar </button></center>
					</form>
					</td>
                    <td>
					<form action="get.php" method="POST"> 
						<center><button type="submit" onclick="return confirm('¿Realmente quiere eliminar el Suministro')">Eliminar</submit></center>
					</form>
					</td>
				</tr>
		</tbody>
	</table>
</div>
     </div>
     <div class="col-md-6">
	 <div class="full-width bar-info-user">
		<i class="	fa fa-book" aria-hidden="true"></i>
		<div>Listado de Herramientas </div>
		</div>
	   <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Nombre</th>
                <th>Cantidad</th>
				<th>Detalle</th>
				<th colspan="2">
				<form action="get.php" method="POST"> 
				<center><button type="submit">Nuevo</button></center>
				</form>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
					<td>
					<form action="get.php" method="POST"> 
						<center><button type="submit"> Editar </button></center>
					</form>
					</td>
                    <td>
					<form action="get.php" method="POST"> 
						<center><button type="submit" onclick="return confirm('¿Realmente quiere eliminar el Suministro')">Eliminar</submit></center>
					</form>
					</td>
				</tr>
		</tbody>
	</table>
</div>
     </div>
</div>
</section>
<!--Pie de pagina-->
<?php
include_once("Plantilla/pie.php");
?>
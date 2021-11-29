<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Artículos</h1>
			</div>
			<div class="articulo">
				<article>
                <form action="/action_page.php">
					<?php include ("crud_articulos/index.php"); ?>
                </form>
				</article>
			</div>
			<a target="_blank" href="crud_articulos/registro.php" class="ingresar">Agregar registro</a>
		</div>
	</section>
<?php include('footer.php'); ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



	

	
	
	<div class="container">

		<nav class="navbar-expand-lg navbar navbar-dark bg-primary">
		<a class="navbar-brand" href="#"><i class="material-icons my-2">people</i></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Home </a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>cadastro">Cadastro </a></li>
			</ul>
			<form method="POST" action="<?php echo base_url() ?>buscar" class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" name="busca" placeholder="Estou procurando por..." aria-label="Buscar">
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
			</form>
		</div>
		</nav>

	</div>






	





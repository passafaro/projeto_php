<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome to CodeIgniter</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<style>
		#caixaPessoas button {
		}
	</style>

</head>
<body>

<div id="container">
	

	
	
	<div class="container">

		<nav class="navbar-expand-lg navbar navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Home </a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Cadastro </a></li>
			</ul>
			<form method="POST" action="<?php echo base_url() ?>" class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" name="busca" placeholder="Estou procurando por..." aria-label="Buscar">
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
			</form>
		</div>
		</nav>

	</div>






	<div class="container">

		<div class="row">
			<div class="col-12 col-sm-6 col-md-3 col-lg-3"   >

				<form method="POST" action="<?php echo $_SERVER['REQUEST_URI'] ?>" class="mt-3">

					<div class="form-group">
						<select name="ordenacao" class="form-control"  onchange="this.form.submit()">
						<?php if(isset($this->session->userdata[SESSION_ORDENACAO])){ ?>
							<option value="<?php echo $this->session->userdata[SESSION_ORDENACAO]['tipo_de_ordem']; ?>"><?php echo $this->session->userdata[SESSION_ORDENACAO]['descricao_campo_input']; ?></option>
							<option value="">-------------------</option>
						<?php } else { ?>
							<option>Ordenar</option>
						<?php } ?>
						
						<option value="1">Ordem A - Z</option>
						<option value="2">Ordem Z - A</option>
						<option value="3">Menor Salário</option>
						<option value="4">Maior Salário</option>
						</select>
					</div>

				</form>		

			</div>

			<div class="col-12 col-sm-6 col-md-9 col-lg-9 "  >


				<?php if($busca){ ?>
					<div class="mt-3 p-2 float-right navbar-dark" >
						<small>Busca por: </small><b><?php echo $busca ?> </b>	
					</div>
				<?php } else { ?>
				<nav aria-label="..." >
					<ul class="pagination float-right mt-3">

						<li class="page-item <?php if($pagina_atual==1){ echo "disabled"; } ?>"><a class="page-link" href="<?php echo base_url() . "pagina/" . ($pagina_atual-1) ?>">Previous</a></li>
						
						<?php for($i=$pagina_inicio; $i<=$pagina_fim; $i++){ ?>
							
							<?php 
								$active = NULL;
								if($pagina_atual==$i)
									$active = "active";
							?>
							<li class="page-item <?php echo $active ?>"><a class="page-link" href="<?php echo base_url() . "pagina/" . $i ?>"><?php echo $i; ?></a></li>
						
						<?php } ?>

						<li class="page-item <?php if($pagina_atual==$total_de_paginas){ echo "disabled"; } ?>"><a class="page-link" href="<?php echo base_url() . "pagina/" . ($pagina_atual+1) ?>">Next</a></li>

					</ul>
				</nav>
				<?php } ?>				


			</div>
		</div>
	</div>
		
	<div id="caixaPessoas" class="container">
			<div class="list-group-item"  >
				<div class="row"  >
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"  >Id</div>
					<div class="col-3 col-sm-3 col-md-3 col-lg-3" >Nome</div>
					<div class="col-3 col-sm-3 col-md-3 col-lg-3" >Empresa</div>
					<div class="col-2 col-sm-2 col-md-2 col-lg-2" >Salário</div>
					<div class="col-3 col-sm-3 col-md-3 col-lg-3" ></div>
				</div>
			</div>
			<?php foreach($lista_pessoas as $pessoa){ ?>				
			<div class="list-group-item"  >


				<div>
					<div class="row"  >
						<div class="col-1 col-sm-1 col-md-1 col-lg-1"  ><span class="badge badge-primary badge-pill"><?php echo $pessoa->getId() ?></span></div>
						<div class="col-1 col-sm-3 col-md-3 col-lg-3" ><?php echo $pessoa->getNome() .' '. $pessoa->getSobrenome() ?> </div>
						<div class="col-1 col-sm-3 col-md-3 col-lg-3" ><?php echo $pessoa->getEmpresa() ?></div>
						<div class="col-1 col-sm-2 col-md-1 col-lg-2" ><?php echo $pessoa->getSalario() ?></div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-2" ></div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1" ><button class="btn btn-primary float-right"  data-toggle="collapse" data-target="#collapseExample<?php echo $pessoa->getId() ?>" type="submit">+</button></div>
					</div>
					<div class="row collapse" id="collapseExample<?php echo $pessoa->getId() ?>"  >
						<div class="col-1 col-sm-2 col-md-2 col-lg-10 offset-lg-1 bg-primary text-white"  >
							<small>Cidade:</small> <?php echo $pessoa->getCidade() ?><br/>
							<small>País:</small> <?php echo $pessoa->getPais() ?><br/>
							<small>Email:</small> <?php echo $pessoa->getEmail() ?><br/>
							<small>Gênero:</small> <?php echo $pessoa->getGenero() ?><br/>
						</div>
					</div>
				</div>


			</div>
			<?php } ?>






	</div>




</div>

<script>
  $(function () {
    $('#list-group div:last-child').tab('show')
  })
</script>


   <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 

	
</body>
</html>

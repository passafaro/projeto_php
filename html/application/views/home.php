<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>





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
					<div class="col-4 col-sm-3 col-md-3 col-lg-3" ><?php echo $pessoa->getNome() .' '. $pessoa->getSobrenome() ?> </div>
					<div class="d-none d-sm-block col-sm-3 col-md-3 col-lg-3" ><?php echo $pessoa->getEmpresa() ?></div>
					<div class="col-4 col-sm-4 col-md-4 col-lg-4" ><?php echo $pessoa->getSalario() ?></div>
					<div class="col-2 col-sm-1 col-md-1 col-lg-1" ><button class="btn btn-primary float-right"  data-toggle="collapse" data-target="#collapseExample<?php echo $pessoa->getId() ?>" type="submit">+</button></div>
				</div>
				<div class="row collapse" id="collapseExample<?php echo $pessoa->getId() ?>"  >
					<div class="col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-10 offset-lg-1 bg-info text-white"  >
						<hr>
						<small>Cidade:</small> <?php echo $pessoa->getCidade() ?><br/>
						<small>País:</small> <?php echo $pessoa->getPais() ?><br/>
						<small>Email:</small> <?php echo $pessoa->getEmail() ?><br/>
						<small>Gênero:</small> <?php echo $pessoa->getGeneroAjustado() ?><br/>
						<a class="btn btn-danger mt-2 mb-0" href="<?php echo base_url() ?>cadastro/deletar/<?php echo $pessoa->getId() ?>"><i class="material-icons">delete</i><br/>Deletar</a>
						<a class="btn btn-primary mt-2 mb-0" href="<?php echo base_url() ?>cadastro/atualizar/<?php echo $pessoa->getId() ?>"><i class="material-icons">change_circle</i><br/>Atualizar</a>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>




<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-8  offset-lg-2"   >
				<form method="POST" action="<?php echo base_url() ?>cadastro/deletar_confirma" class="mt-3">

					<input type="hidden" class="form-control" id="campoNome" placeholder="Digite o nome" name="id" value="<?php echo $pessoa->getId();  ?>">

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoNome">Nome</label>
							<input type="text" class="form-control" id="campoNome"  name="nome" value="<?php echo $pessoa->getNome();  ?>" readonly >
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoSobrenome">Sobrenome</label>
							<input type="text" class="form-control" id="campoSobrenome"  name="sobrenome" value="<?php  echo $pessoa->getSobrenome();  ?>"readonly  >
						</div>
					</div>

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoEmpresa">Empresa</label>
							<input type="text" class="form-control" id="campoEmpresa"  name="empresa" value="<?php  echo $pessoa->getEmpresa();  ?>" readonly >
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoSalario">Salário</label>
							<input type="text" class="form-control" id="campoSalario"  name="salario" value="<?php  echo $pessoa->getSalario();  ?>" readonly >
						</div>
					</div>

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoCidade">Cidade</label>
							<input type="text" class="form-control" id="campoCidade"  name="cidade" value="<?php  echo $pessoa->getCidade();  ?>" readonly >
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoPais">País</label>
							<input type="text" class="form-control" id="campoPais"  name="pais" value="<?php  echo $pessoa->getPais();  ?>" readonly >
						</div>
					</div>

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoEmail">Email</label>
							<input type="email" class="form-control" id="campoEmail"  name="email" value="<?php echo $pessoa->getEmail();  ?>" readonly>
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoGenero">Gênero</label>
							<input type="text" class="form-control" id="campoGenero"  name="genero" value="<?php  echo $pessoa->getGeneroAjustado();  ?>" readonly >
						</div>
					</div>

					<button type="submit" class="btn btn-danger">Deletar</button>

				</form>	
			</div>
		</div>
	</div>







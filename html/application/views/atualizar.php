<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-8  offset-lg-2"   >
				<form method="POST" action="<?php echo base_url() ?>cadastro/atualizar_confirma" class="mt-3">

					<input type="hidden" class="form-control" id="campoNome" placeholder="Digite o nome" name="id" value="<?php echo $pessoa->getId();  ?>">

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoNome">Nome</label>
							<input type="text" class="form-control" id="campoNome" placeholder="Digite o nome" name="nome" value="<?php if(validation_errors()){ echo set_value('nome'); } else { echo $pessoa->getNome(); } ?>">
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoSobrenome">Sobrenome</label>
							<input type="text" class="form-control" id="campoSobrenome" placeholder="Digite o sobrenome" name="sobrenome" value="<?php if(validation_errors()){ echo set_value('sobrenome'); } else { echo $pessoa->getSobrenome(); } ?>">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoEmpresa">Empresa</label>
							<input type="text" class="form-control" id="campoEmpresa" placeholder="Qual empresa" name="empresa" value="<?php if(validation_errors()){ echo set_value('empresa'); } else { echo $pessoa->getEmpresa(); } ?>">
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoSalario">Salário</label>
							<input type="text" class="form-control" id="campoSalario" placeholder="Digite o salário" name="salario" value="<?php if(validation_errors()){ echo set_value('salario'); } else { echo $pessoa->getSalario(); } ?>">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoCidade">Cidade</label>
							<input type="text" class="form-control" id="campoCidade" placeholder="Digite a cidade" name="cidade" value="<?php if(validation_errors()){ echo set_value('cidade'); } else { echo $pessoa->getCidade(); } ?>">
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoPais">País</label>
							<select class="form-control" id="campoPais" name="pais">							
								<?php if(validation_errors()  and set_value('pais')!= NULL ){  ?>
									<option><?php echo set_value('pais'); ?></option>
									<option value=''>------------</option>
								<?php } else { ?>
									<option><?php echo $pessoa->getPais(); ?></option>
									<option value=''>------------</option>
								<?php } ?>	
								<?php foreach($paises as $pais){ ?>						
								<option><?php echo $pais['nome_pais'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="campoEmail">Email</label>
							<input type="email" class="form-control" id="campoEmail" placeholder="name@example.com" name="email" value="<?php if(validation_errors()){ echo set_value('email'); } else { echo $pessoa->getEmail(); } ?>">
						</div>

						<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
							<label for="exampleFormControlSelect1">Gênero</label>
							<select class="form-control" id="exampleFormControlSelect1" name="genero">
							
								<?php if(validation_errors() and set_value('genero')!= NULL ){  
									if(set_value('genero')=='M'){ ?>
										<option value="M">Masculino</option>
										<option value="F">Feminino</option>	
									<?php } else { ?>
										<option value="F">Feminino</option>	
										<option value="M">Masculino</option>
									<?php } ?>
								<?php } else { ?>	
									<?php if($pessoa->getGenero()=='M'){ ?>
										<option value="M">Masculino</option>
										<option value="F">Feminino</option>	
									<?php } else { ?>
										<option value="F">Feminino</option>	
										<option value="M">Masculino</option>
									<?php } ?>
								<?php } ?>

							</select>
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Atualizar</button>

				</form>	
			</div>
		</div>
	</div>







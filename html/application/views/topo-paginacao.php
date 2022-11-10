<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



	

	
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
			


			</div>
		</div>
	</div>



	





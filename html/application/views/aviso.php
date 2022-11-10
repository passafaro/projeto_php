<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



	<div class="container">
	<div class="alert alert-danger" role="alert">
		<?php 
			echo validation_errors(); 
			if(isset($mensagem)){ 
				echo $mensagem ; 
			}
		?>
	</div>
	</div>







<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


   <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!-- Mascara moeda -->
    <script type="text/javascript" src="<?php echo base_url() ?>application/views/js/jquery.js" ></script>
    <script type="text/javascript" src="<?php echo base_url() ?>application/views/js/jquery.mask.money.js" ></script>
    <script type="text/javascript">
        $(document).ready(function(){
              $("#campoSalario").maskMoney({showSymbol:true, symbol:"R$ ", decimal:",", thousands:"."});
        });
    </script>



</body>
</html>

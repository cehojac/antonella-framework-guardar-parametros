<?php
    namespace PCP;
          
    class ParametrosController
    {
    
        public function __construct()
        {
    
        }

        public function MostrarMenu()
        {
            $valor1= get_option('valor1');
            $html = <<<EOT

<form method="POST">
<h1>Guardar Parámetros</h1>
<div class="form-group">

<label for="valor1">Valor1</label>

<input type="text" class="form-control" id="valor1" name="valor1" value="{$valor1}">

<small id="emailHelp" class="form-text text-muted">Puedes poner aqui tu valor</small>

</div>

<button type="submit" name="guardar_parametros" class="btn btn-primary">Submit</button>

</form>

EOT;

            return $html;
        }

        function GuardarParametros()
        {
            foreach($_POST as $key=>$data)
            {
                update_option($key,strip_tags($data));
            }
        }
    }
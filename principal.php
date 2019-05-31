
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head>
        <title>Pagina_principal</title>
        <link rel="stylesheet" type="text/css" href="css/principal.css"/>
      </head>
      <body>
        <div class="cabezera">
            <div class="imagen">
           <img class="logo" src="imagen/imagen1.jpg">
            </div>
            
          </div>
        <div class="contenedor">

			<div class="principal">
			
			<?php
			 
				ini_set('display_errors', '1');
				error_reporting(E_ALL);
				
			   $reglas = new DOMDocument();
			   $reglas->load("xslt/Pagina_principal.xslt");

			   $datos = new DOMDocument();
			   $datos->load("elorrieta.xml");
				/*
				Generamos un "motor" para aplicar esas reglas.
				Le cargamos las reglas de transformación
				Aplicamos dichas reglas al documento
				*/
			   $proc = new XSLTProcessor();
			   $proc->importStylesheet($reglas);
			  
			   echo $proc->transformToXML($datos);
			?>
			</div>
          </div>
</body>
</html>
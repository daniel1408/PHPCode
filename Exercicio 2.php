	<html> 
    <head> 
        <title>Exercicio 2</title> 
    </head> 
 
    <body> 
        <form method="get">
 
            Entre com o número:
            <input name="numero" type="text" /> 
            <br />

           	<input type="submit" value="submeter" />     
            <br>
        </form> 

        <?php
			$entradaUser = $_GET["numero"];
			fibonacci($entradaUser);
			
			function fibonacci($entradaUser) {
			    $aux1 = 0;
			    $aux2 = 1;
			    $aux3 = 1;
			    for ($i = 1; $i < $entradaUser ; $i++) { 
			        $aux3 = $aux1 + $aux2;

			        $aux1 = $aux2;
			        $aux2 = $aux3;
			    }
			    echo "O fibonacci do número ".($entradaUser).(" é: ").($aux3);
			    echo "<br>";
			}
		php?>		

    </body> 
</html>
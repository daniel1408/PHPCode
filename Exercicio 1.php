	<html> 
    <head> 
        <title>Exercicio 1</title> 
    </head> 
 
    <body> 
        <form>
            Entre com o número:
            <input name="numero" type="text" /> 
            <br />

            <input type="submit" value="submeter" />     
            <br>
            
        </form> 

        <?php
			$entradaUser = $_GET["numero"];
			tabuada($entradaUser);
			

			function tabuada($numero){
				if ($numero == "") {
					echo "Entre com um numero válido";
				}else{
					for ($i=1; $i <= 10; $i++) { 
						echo $numero." x ".($i)." = ".($numero*$i);
						echo "<br>";
					}
				}
			}
		php?>
		

    </body> 
</html>
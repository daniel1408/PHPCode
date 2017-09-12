	<html> 
    <head> 
        <title>Exercicio 3</title> 
    </head> 
 
    <body> 
        <form>
            Entre com o número:
            <input name="numero" type="text" /> 
            <br>
			
			Entre com o segundo número:
            <input name="numero2" type="text" /> 
            <br>

            Entre com a operação (soma, sub, div ou mult):
            <input name="operacao" type="text" /> 
            <br>

            <input type="submit" value="submeter" />     
            <br>

        </form> 

        <?php
			$entradaUser1 = $_GET["numero"];
			$entradaUser2 = $_GET["numero2"];
			$operacao = $_GET["operacao"];		
			
			$calculadora = new Calculadora();
			echo $calculadora -> $operacao($entradaUser1, $entradaUser2);


			class Calculadora
			{
				function soma($num1, $num2)
				{
					return $num1+$num2;
				}
				
				function sub($num1, $num2)
				{
					return $num1-$num2;
				}
				
				function div($num1, $num2)
				{
					if ($num2 == 0) {
						return "não é possível dividir por zero";
					}else{
						return $num1/$num2;	
					}					
				}
				
				function mult($num1, $num2)
				{
					return $num1*$num2;
				}
			}
		php?>		

    </body> 
</html>
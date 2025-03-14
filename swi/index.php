<?php
	$a = 123;
	$b = 1233;
	$c = "Não sei";
	$d = $a > $b;
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>exemplo PHP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="SW, PHP">
		<meta name="author" content="Derik limas, thiago_istrupilson">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<?php
			echo "<h1>Seja bem-vindo</h1>";
			echo "<p>Como vai?</p>\n";
			echo "<p>Número " . number_format($b, 2, ",", ".") . " </p>";
			echo "<p>Valor total " . $a . "!</p>";
		?>
		<br>
		
		<h1>Exemplo de variáveis</h1>
		<?php
			echo "<p>Variável inteira</p>";
			var_dump($a);
			echo "<p>Variável float (double)</p>";
			var_dump($b);
			echo "<p>Variável string</p>";
			var_dump($c);
			echo "<p>Variável booleana</p>";
			var_dump($d);

            $cars = array("Volve", "fiat", "Mc Laren");
            var_dump($cars);
		?>
		<br><br>

        <h1>Carro</h1>
        <?php

            $meucarro = new Carro("Marrom", "Touro");
            echo "<p>" . $meucarro->mensagem() . "</p>";
            echo "<p>Via var_dump</p>";
            var_dump($meucarro);
        ?>
		<br><br>
			<h1>objeto</h1>	
	<?php
            class Carro {
                public $modelo;
                public $cor;
                
                public function __construct($modelo, $cor) {
                  $this->cor = $cor;
                  $this->modelo = $modelo;
                }
                
                public function mensagem() {
                  return "Meu carro é um " . $this->modelo . " " . $this->cor . "!";
                }
            }
			echo "\t\t<p>carro1</p>\n";
            $meucarro = new Carro("Volvo", "Vermelho"); 
            var_dump($meucarro);
			echo "\t\t<p>carro2</p>\n";
			$carro = new Carro("Volvo", "Preto"); 
            var_dump($carro);
			echo "\t\t<p></p>\n";
	?>
	<br>

	<h1>exemplo vetor</h1>
	<?php
		$vetor = array(12, 34.7, "texto");
		$vetor1 = [12, 34,7, "texto"];
		echo "\t\t<p>vetor</p>\n";
		var_dump($vetor);
		echo "\t\t<p>outro vetor</p>\n";
		var_dump($vetor1);
	?>
	<br><br>

	<h1>escrevendo vetor</h1>
	<?php
		$vetor[] = "outro texto";
		echo "\t\t<p>o 2° valor de vetor e $vetor[0]</p>\n";
		for($x=0;$x < count($vetor);$x++){
			echo "\t\t<p>o ". ($x + 1)."°valor de vetor e $vetor[$x]</p>\n";
		}
		echo "\t\t<p>vetor completo</p>\n";
		$x = 0;
		while($x < count($vetor)){
			echo "\t\t<p>o ". ($x + 1)."°valor de vetor e $vetor[$x]</p>\n";
			$x++;
		}
	?>
	<br>

	<h1>exemplo vetor associativo</h1>
	<?php
		$vet = array("int"=>12, "real"=>34.7, "texto"=>"palavra");
		echo "\t\t<p>vetor</p>\n";
		var_dump($vet);
		echo "\t\t<p>O 3° elemento vetor e {$vet["real"]}</p>\n";
		$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

		foreach ($vet as $x => $y) {
			echo "\t\t<p>Valor  $x: $y</p>";
		}
	?>
	<br>

	<h1>Exemplo Constante</h1>
	<?php
	define("TESTE", "Mensagem de texto");
	echo "O valor de teste é ->" . TESTE;
	?>
	<br>
	
	<h1>Exemplo de repetição FOR em php</h1>
	<?php
	$vet2[] = "Novo";
	for ($x = 0; $x < count($vet2); $x++){
		echo "<p>0 " . ($x + 1) . "° elemento do vetor vet é : $vet2[$x]</p>";
	}
	?>
	<br>
	<h1>Exemplo de repetição FOREACH em php</h1>
	<?php
	array_push($vet2, 24, 69, 102, "Exemplo");
	$x = 0;
	foreach ($vet2 as $teste){
		echo "<p>0 " . ($x + 1 ) . "° Elemento de Vetor vet é : $teste</p>";
		$x++;
	}
	?>
	<br><br><br><br><br><br>
	<a href="index2.php">Page 2 --></a>
	</body>
</html>

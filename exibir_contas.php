<html>
	<head>
		<meta charset="utf-8">
	</head>

	<header>
		<?php include("includes/topo.php");?>
	</header>

	<body>

	<?php

	/*
	criando contas no pagar-me

	  require("pagarme-php/Pagarme.php");
	    Pagarme::setApiKey("ak_test_bxTzgRSb04iMviJfDHCEUiqvrB0mrA");

	    $account = new Pagarme_Bank_Account(array(
	        "bank_code" => "036",
	        "agencia" => "0345",
	        "agencia_dv" => "6",
	        "conta" => "12475",
	        "conta_dv" => "9",
	        "document_number" => "15220793000121",
	        "legal_name" => "JR DOMINGUES LTDA"
	    ));
	    $account->create();
	*/

	header('Content-type: text/html; charset=ISO-8859-1');

	$contas =  file_get_contents("https://api.pagar.me/1/bank_accounts?api_key=ak_test_bxTzgRSb04iMviJfDHCEUiqvrB0mrA");
	$json_contas = json_decode($contas);

	foreach($json_contas as $conta) {
		echo "<p><b>ID: </b>" .$conta->id . "<br></p>";
		echo "<p><b>Banco: </b> " .$conta->bank_code ."<br></p>";
		echo "<p><b> Agência: </b> " .$conta->agencia ."<br></p>";
		echo "<p><b>Dígito da Agência: </b>" .$conta->agencia_dv ."<br></p>";
		echo "<p><b>Conta: </b>" .$conta->conta ."<br></p>";
		echo "<p><b>Dígito da Conta: </b>" .$conta->conta_dv ."<br></p>";
		echo "<p><b>Tipo de documento: </b>" .$conta->document_type ."<br></p>";
		echo "<p><b>Nº do Documento: </b>" .$conta->document_number ."<br></p>";
		echo "<p><b>Nome do Titular da conta: </b>" .$conta->legal_name ."<br><br></p>";
		
	}

	//print_r($json_contas[0]);

	?>

	</body>
</html>


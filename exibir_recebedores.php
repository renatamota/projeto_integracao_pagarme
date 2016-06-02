   
   <html>
    <head>
        <meta charset="utf-8">
    </head>

    <header>
        <?php include("includes/topo.php");?>
    </header>

    <body>
   <?php

   /*criando recebedor 1
    require("pagarme-php/Pagarme.php");
    Pagarme::setApiKey("ak_test_bxTzgRSb04iMviJfDHCEUiqvrB0mrA");

    $recipient = new PagarMe_Recipient(array(
        "transfer_interval" => "weekly",
        "transfer_day" => 5,
        "transfer_enabled" => true,
        "automatic_anticipation_enabled" => true,
        "anticipatable_volume_percentage" => 85,
        "bank_account_id" => '13538365'
    ));
    $recipient->create(); 

    */


   /*criando recebedor 2
    require("pagarme-php/Pagarme.php");
    Pagarme::setApiKey("ak_test_bxTzgRSb04iMviJfDHCEUiqvrB0mrA");

    $recipient = new PagarMe_Recipient(array(
        "transfer_interval" => "monthly",
        "transfer_day" => 20,
        "transfer_enabled" => true,
        "automatic_anticipation_enabled" => true,
        "anticipatable_volume_percentage" => 60,
        "bank_account_id" => '13910326'
    ));
    $recipient->create(); 

    */

header('Content-type: text/html; charset=ISO-8859-1');

$recebedores =  file_get_contents("https://api.pagar.me/1/recipients?api_key=ak_test_bxTzgRSb04iMviJfDHCEUiqvrB0mrA");
$json_recebedores = json_decode($recebedores);

foreach ($json_recebedores as $recebedor) {
    echo "<p><b>ID: </b>" .$recebedor->id . "<br></p>";
    echo "<p><b>Dia da transferencia:  </b>" .$recebedor->transfer_day . "<br></p>";
    echo "<p><b>Transferencia ativada:  </b>" .$recebedor->transfer_enabled . "<br></p>";
    echo "<p><b>Ultima transferencia: </b>" .$recebedor->last_transfer . "<br></p>";
    echo "<p><b>Intervalo de transferencia:  </b>" .$recebedor->transfer_interval  . "<br></p>";
    echo "<p><b>Dia da transferencia:  </b>" .$recebedor->transfer_day . "<br></p>";
    echo "<p><b>Transferencia automatica para antecipacao:  </b>" .$recebedor->automatic_anticipation_enabled . "<br></p>";
    echo "<p><b>Porcentagem da antecipacao:  </b>" .$recebedor->anticipatable_volume_percentage . "<br></p><br>";
}

if ($recebedor->transfer_interval = 'weekly') { echo "semanal"; }
elseif ($recebedor->transfer_interval = 'daily') { echo "diário"; }
else { echo "mensal"; }

?>

</body>
</html>
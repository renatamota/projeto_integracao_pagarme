<?php

require_once __DIR__.'/../vendor/autoload.php';

// Inicializar objeto PagarMe
$pagarme = new  \PagarMe\PagarMe('ak_test_bxTzgRSb04iMviJfDHCEUiqvrB0mrA');

// Obter balanço da conta
$balance = $pagarme->balance->getBalance();

// Mostrar resultados
print_r($balance);

?>
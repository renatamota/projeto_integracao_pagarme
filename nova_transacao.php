<?php
    require("pagarme-php/Pagarme.php");

    Pagarme::setApiKey("ak_test_bxTzgRSb04iMviJfDHCEUiqvrB0mrA");

    $transaction = new PagarMe_Transaction(array(
        'amount' => 1500,
        'split_rules' => array(
        array(
            'recipient_id' => 're_cioxrb4ch00r2qs6dlcgctvxj',
            'charge_processing_fee' => true,
            'liable' => true,
           ),

        array(
            'recipient_id' => 're_cioxo1gsc00r5r86edcdny4hv',
            'amount' => 1000,
            'charge_processing_fee' => true,
            'liable' => false,
        )
        )
    ));

    $transaction->charge();

    $status = $transaction->status; // status da transação
?>

?>
<?php

/**
 * Ganipara Web Kancasını Yakala Örneği
 * 
 */
 
$webhookContent = "";

$webhook = fopen('php://input' , 'rb');
while (!feof($webhook)) {
    $webhookContent .= fread($webhook, 4096);
}
fclose($webhook);

// Veriyi göster
var_dump($webhook);
?>
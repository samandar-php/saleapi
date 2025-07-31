<?php
header('Content-Type: application/json');
$apiKey    = "<YOUR_API_KEY>"; // Tokenni @SaleAPibot orqali oling
$region    = 10;
$subRegion = 10245;
$account   = "0208045";

$url = "https://deapi.uz/ws/uzelectric_api/index.php?region={$region}&subRegion={$subRegion}&account={$account}";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
]);

$response = curl_exec($ch);
curl_close($ch);
echo $response;

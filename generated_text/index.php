<?php

$apiKey = "<YOUR_API_KEY>"; // Tokenni @SaleAPibot orqali oling
$text   = "Salom";

$url = "https://deapi.uz/ws/generated_text/index.php?text=" . urlencode($text);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
]);

$response  = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
echo $response;

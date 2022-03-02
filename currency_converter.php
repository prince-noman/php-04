<?php
//Switch Case

$amount = 100;
$currency = "CAD(Canadian Dollar)";

switch ($currency) {
    case "USD(US Dollar)" :
        $rate = 84;
        break;
    case "INR(Indian Rupee)" :
        $rate = 1.25;
        break;
    case "GBP(Great British Pound)" :
        $rate = 113;
        break;
    case "CAD(Canadian Dollar)" :
        $rate = 66;
        break;
    case "SGD(Singapore Dollar)" :
        $rate = 62;
        break;
    case "AUD(Australian Dollar)" :
        $rate = 61;
        break;
    case "NZD(New Zealand Dollar)" :
        $rate = 57;
        break;
    case "BTC(Bitcoin)" :
        $rate = 3318910;
        break;
    case "KRW(Korean Won)" :
        $rate = 0.07;
        break;
    case "DKK(Danish Krone)" :
        $rate = 12.68;
        break;
    default:
        $rate = 0;
        break;
}

$total_amount = $amount * $rate;
echo "<h1>$amount $currency = $total_amount BDT</h1>";
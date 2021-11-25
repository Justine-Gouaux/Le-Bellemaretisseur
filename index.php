<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Le Bellemartisseur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
<?php

function getConvertedAmount($amount, $currency)
{
    $rates = [
        'FR' => 1,
        'EUR' => 0.15,
        'USD' => 1.13,
        'GBP' => 0.84,
        'INR' => 83.90,
        'CAD' => 1.43,
        'CHF' => 1.05,
        'JPY' => 129.48,
        'SEK' => 10.18,
        'RUB' => 83.74
    ];
    
    $convertedAmount = $amount * $rates[$currency];

    return $convertedAmount;  
}

$amount = 595;

if (!empty($_GET['currency'])) {
    $currency = $_GET['currency'];

    $convertedAmount = getConvertedAmount($amount, $currency);

} else {
    $currency = 'FR';

    $convertedAmount = $amount;
};

?>

<form id="form" action="" method="get">
    <div class="form-row">
        <p>Tu veux savoir combien ça fait <strong>595 francs</strong> en    
            <select id="currency" name="currency">
                <option value="FR">choisir</option>
                <option value="EUR">Euros - €</option>
                <option value="USD">Dollars américain - &#36;</option>
                <option value="GBP">Livre brittanique - &#163;</option>
                <option value="INR">Roupie indienne - &#8377;</option>
                <option value="CAD">Dollars canadiens - &#36;</option>
                <option value="CHF">Francs suisses - CHF</option>
                <option value="JPY">Yen japonais - &#165;</option>
                <option value="SEK">Couronne suédoise - SEK</option>
                <option value="RUB">Rouble russe - &#8381;</option>
            </select>
        ?</p>
    </div>

    <button id="submit-form" type="submit">Oh oui Pierre!</button>

</form>
 
<p id="answer">Et bien ça fait <strong><?=' '.$convertedAmount.' '.$currency?></strong> .</p>

</body>

</html>
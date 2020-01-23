<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2>Your transaction finished successfully</h2>
    <p>Transaction info:
    <ul>
        <li>Foreign currency: <?php
//            var_dump($data['currency_id']); die;
            if ($data['currency_id'] == 1) {
                echo 'Japanese Yen (JPY)';
            }
            if ($data['currency_id'] == 2) {echo 'Great Britain Pound (GBP)';}
            if ($data['currency_id'] == 3) {echo 'Euro (EUR)';}
            ?>
        </li>
        <li>Exchange rate: <?php echo round($data["exchange_rate"],4) ?> for 1 USD</li>
        <li>Amount of foreign currency purchased: <?php echo round($data["amount_purchased"],2) ?></li>
        <li>Surcharge: <?php echo round($data["surcharge_amount"], 2) ?></li>
        <li>Discount: <?php echo round($data["discount_amount"], 2) ?></li>
        <li>Total: <?php echo round($data["amount_payed"], 2) ?></li>


    </ul>


    </p>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency Trader</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <form action="/store" method="post">
        <div class="container">
            <h1>Confirmation page</h1>
            <p>Please check if provided data is correct...</p>
            <hr>
            <div id="info">
                <p>Amount of <?php echo $data['currency'] ?> to purchase is: <span class="bold"><?php echo $data['amount'] ?></span></p>
                <hr>
                <h3>Transaction information</h3>
                <hr>
                <p>Value in American Dollars: <span class="bold"><?php echo $data['calculatedAmount'] ?></span></p>
                <p>Surcharge: <span class="bold"><?php echo $data['surcharge'] ?></span></p>
                <p>Total: <span class="bold"><?php echo $data['total_amount'] ?></span></p>
                <input
                    type="hidden"
                    name="currency"
                    value="<?php echo $data['currency'] ?>"
                >
                <br>
                <input
                    type="hidden"
                    name="amount"
                    value="<?php echo $data['amount'] ?>"
                >
                <br>
                <input
                    type="hidden"
                    name="calculated_amount"
                    value="<?php echo $data['calculatedAmount'] ?>"
                >
                <br>
                <input
                    type="hidden"
                    name="surcharge"
                    value="<?php echo $data['surcharge'] ?>"
                >

                <br>
                <input
                    type="hidden"
                    name="total_amount"
                    value="<?php echo $data['total_amount'] ?>"
                >
                <br>
            </div>

            <button type="submit" class="submitbtn">Purchase</button>
        </div>
    </form>
</div>
</body>
</html>
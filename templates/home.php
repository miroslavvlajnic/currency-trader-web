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
<form action="/confirm" method="post">
    <div class="container">
        <h1>Welcome</h1>
        <a href="/update-rates">Update Exchange Rates</a>
        <p>Please fill in this form...</p>
        <hr>
        <label for="currency"><b>Please select currency/country</b></label>
        <select name="currency" id="currency">
            <?php foreach ($data['codes'] as $currencyCode) { ?>
                <option value="<?php echo $currencyCode ?>"><?php echo $currencyCode ?></option>
            <?php } ?>
        </select>

        <label for="amount"><b>Amount</b></label>
        <input id="amount" type="text" placeholder="Please enter amount of currency..." name="amount">
        <p id="empty" class="hidden">Amount field is required</p>
        <p id="not-number" class="hidden">You must enter a number</p>
        <hr>
        <button id="calculate" type="submit">Calculate</button>
    </div>
</form>

<button id="btn-exchange-rates">Get Exchange Rates</button>
<div id="exchange-rates"></div>
<script src="scripts.js"></script>
</body>
</html>

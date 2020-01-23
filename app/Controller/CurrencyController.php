<?php

namespace App\Controller;

use Core\Request;

class CurrencyController {

    public function updateRates() {
        $request = new Request();
        $response = $request->send('GET', 'http://api.currencylayer.com/live?access_key=' . CURRENCY_LAYER_API_KEY . '&currencies=GBP,JPY,EUR');
        $latestRates = json_decode($response, true)['quotes'];
        $request->send('POST', API_BASE_URL . '/refresh-rates', $latestRates);
        header('Location: /');
    }
}
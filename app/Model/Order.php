<?php

namespace App\Model;

use Core\Request;

class Order {

    public function preCalculate($currency, $amount) {
        $request = new Request();
        $response = $request->send('POST', API_BASE_URL . '/calculate', ['currency' => $currency, 'amount' => $amount]);
        return json_decode($response, true);
    }

    public function store($params) {
        $request = new Request();
        return $request->send('POST', API_BASE_URL . '/order', $params);
    }

    public function getLastEntry() {
        $request = new Request();
        return $request->send('GET', API_BASE_URL . '/last-entry');
    }
}

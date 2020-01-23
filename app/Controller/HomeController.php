<?php

namespace App\Controller;

use Core\Request;
use Core\View;

class HomeController {

    public function index() {
      $request = new Request();
      $currencyCodes = $request->send('GET', API_BASE_URL . '/currencies/codes');
      $codes = json_decode($currencyCodes, true);
      View::render('home', ['codes' => $codes]);
    }
}
<?php

namespace App\Controller;

use App\Model\Order;
use Core\View;

class OrderController {

  private $order;

  public function __construct() {
    $this->order = new Order;
  }

  public function calculate() {
    $calculated = $this->order->preCalculate($_POST['currency'], $_POST['amount']);

    View::render('calculated', [
        'currency' => $_POST['currency'],
        'amount' => $_POST['amount'],
        'calculatedAmount' => $calculated['calculated_amount'],
        'surcharge' => $calculated['surcharge'],
        'total_amount' => $calculated['total_amount']
    ]);
  }

    public function store() {
      $response = $this->order->store($_POST);
      if ($response) {
          $lastEntry = $this->order->getLastEntry();
          $data = json_decode($lastEntry, true);
          View::render('success', $data);
      } else {
          View::render('fail');
      }
    }
}
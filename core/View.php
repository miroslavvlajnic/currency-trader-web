<?php

namespace Core;

class View {

    public static function render($viewName, array $data = array()) {
      $fileToRender = TEMPLATE_DIR . $viewName . '.php';

      if (!file_exists($fileToRender)) {
        return "Error loading template file ($fileToRender).";
      }
    
      $output = include($fileToRender);
      echo $output;
  }

}
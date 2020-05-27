<?php

if (!function_exists('generate_mask')) {
  function generate_mask($min = 1111, $max = 9999999)
  {
    return rand((int) $min, (int) $max);
  }
}

if (!function_exists('in_production')) {
  function inProduction()
  {
    return strtolower(env('APP_ENV')) == 'production' ? true : false;
  }
}

if (!function_exists('public_path')) {
  function public_path($path = '')
  {
    return env('PUBLIC_PATH', base_path('public')) . ($path ? '/' . $path : $path);
  }
}

if (!function_exists('get_contract_type_name')) {
  function get_contract_type_name($type)
  {
    $t = "";
    switch ((int) $type) {
      case 1:
        $t = "Short stay";
        break;
      case 2:
        $t = "Rent";
        break;

      default:
        $t = "For sale";
        break;
    }

    return $t;
  }
}

if (!function_exists('get_contract_type')) {
  function get_contract_type($type)
  {
    $t = "";
    switch ((string) $type) {
      case "short stay":
        $t = 1;
        break;
      case "rent":
        $t = 2;
        break;

      default:
        $t = 3;
        break;
    }

    return $t;
  }
}

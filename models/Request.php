<?php

/**
 * Request class
 */
class Request
{
  public static function uri()
  {
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  }

  public static function method()
  {
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function redirect($url, $status_code = 303)
  {
    header("Location: $url", true, $status_code);
    die();
  }
}

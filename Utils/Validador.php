<?php
class Validador{

      public static function existeCampoGet(string|int $key) {

        return isset($_GET[$key]);
      }
}
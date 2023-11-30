<?php

namespace App;

class Config
{
     public function __construct()
     {

          if (session_id() == "") {
               session_start();
          }
          date_default_timezone_set("Asia/Jakarta");

          define("URL", "http://localhost/MhdRizkyWibowo_Pertemuan 10");
          define("AST", URL . "/layouts/assets");

          define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);
     }
}

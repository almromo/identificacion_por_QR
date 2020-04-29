<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Utilidades extends Controller
{
  public static function encryptQR($string){
    $ciphering = "AES-128-CTR"; //Método de encriptacion
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121'; //Vector Inicializado no nulo
    $encryption_key = "rootPasword"; //Contraseña para encriptar CAMBIAR!!
    $encryption = openssl_encrypt($string, $ciphering,
    $encryption_key, $options, $encryption_iv);

    return $encryption;
  }

  public static function decryptQR($string){
    $decryption_iv = '1234567891011121';
    $decryption_key = "rootPasword";
    $decryption=openssl_decrypt ($string, $ciphering,
    $decryption_key, $options, $decryption_iv);

    return $decryption;
  }
}

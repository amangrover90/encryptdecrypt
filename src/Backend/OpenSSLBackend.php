<?php

namespace Drupal\encryptdecrypt\Backend;

use Drupal\encryptdecrypt\Backend\BackendInterface;

class OpenSSLBackend implements BackendInterface {

  public function encrypt($text)
  {
    // TODO: Implement encrypt() method.
    $cipher_text = openssl_encrypt($text, "", "", "", "");
    return base64_encode($cipher_text);
  }

  public function decrypt($text)
  {
    // TODO: Implement decrypt() method.
    $text_decode = base64_decode($text);
    return openssl_decrypt($text_decode, "", "", "", "");
  }

}

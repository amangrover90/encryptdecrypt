<?php

namespace Drupal\encryptdecrypt\Backend;

use Drupal\encryptdecrypt\Backend\BackendInterface;

class McryptBackend implements BackendInterface {

  public function encrypt($text)
  {
    // TODO: Implement encrypt() method.
    $cipher_text = mcrypt_encrypt("", "", $text, "", "");
    return base64_encode($cipher_text);
  }

  public function decrypt($text)
  {
    // TODO: Implement decrypt() method.
    $text_decode = base64_decode($text);
    return mcrypt_decrypt("", "", $text_decode, "", "");
  }

}

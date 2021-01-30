<?php

namespace Drupal\encryptdecrypt\Backend;

use Drupal\encryptdecrypt\Backend\BackendInterface;

class McryptBackend implements BackendInterface {

  private $key;
  private $iv;

  /**
   * McryptBackend constructor.
   */
  public function __construct() {
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $this->key = md5( "encrypt_decrypt", true);
    $this->iv = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM);
  }


  public function encrypt($text) {
    // TODO: Implement encrypt() method.
    $cipher_text = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $this->key, $text, MCRYPT_MODE_CBC, $this->iv);
    return base64_encode($cipher_text);
  }

  public function decrypt($text)
  {
    // TODO: Implement decrypt() method.
    $text_decode = base64_decode($text);
    return mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->key, $text_decode, MCRYPT_MODE_CBC, $this->iv);
  }

}

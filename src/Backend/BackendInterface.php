<?php
namespace Drupal\encryptdecrypt\Backend;
/**
 * EncryptionRepository interface
 */
interface BackendInterface {

  // To encypt
  public function encrypt($text);

  // To decrypt
  public function decrypt($text);

}

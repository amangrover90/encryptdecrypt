<?php

namespace Drupal\encryptdecrypt\Client;

use Drupal\encryptdecrypt\Backend\McryptBackend;
use Drupal\encryptdecrypt\Backend\OpenSSLBackend;

class EncryptDecryptFactory {

  public function getClient($name = 'openssl') {
    return $name == 'openssl' ? new CallClient (new OpenSSLBackend()) : new CallClient (new McryptBackend());
  }

}

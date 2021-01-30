<?php

namespace Drupal\encryptdecrypt\Client;

use Drupal\encryptdecrypt\Backend\BackendInterface;

/**
 * Class CallClient
 * @package Drupal\encryptdecrypt\Factory
 */
class CallClient implements  BackendInterface{
  /**
   * @var BackendInterface
   */
  private $encryptionLibrary;

  /**
   * CallClient constructor.
   * @param BackendInterface $encryption_library
   */
  public function __construct(BackendInterface $encryption_library) {
    $this->encryptionLibrary = $encryption_library;
  }

  /**
   * @return BackendInterface
   */
  public function getEncryptionLibrary(): BackendInterface {
    return $this->encryptionLibrary;
  }

  /**
   * @param BackendInterface $encryptionLibrary
   */
  public function setEncryptionLibrary(BackendInterface $encryptionLibrary) {
    $this->encryptionLibrary = $encryptionLibrary;
  }

  public function encrypt($text)
  {
    // TODO: Implement encrypt() method.
    return $this->encryptionLibrary->encrypt($text);
  }

  public function decrypt($text)
  {
    // TODO: Implement decrypt() method.
    return $this->encryptionLibrary->decrypt($text);
  }
}

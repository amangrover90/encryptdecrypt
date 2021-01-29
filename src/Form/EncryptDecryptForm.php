<?php

namespace Drupal\encryptdecrypt\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class EncryptDecryptForm extends FormBase {

  public function getFormId()
  {
    // TODO: Implement getFormId() method.
    return "encrypt_decrypt_form";
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    // TODO: Implement buildForm() method.
    $form['ed_string'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Enter text'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Encrypt'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    // TODO: Implement submitForm() method.
  }
}

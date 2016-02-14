<?php

/**
 * @file custom.admin.inc
 * TODO: Enter file description here.
 */

/**
 * Form builder.
 */
function custom_settings_form($form, &$form_state) {
  $form['custom_variable_foo'] = array(
    '#type' => 'textfield',
    '#title' => t('Foo'),
    '#default_value' => variable_get('custom_variable_foo', 42),
    '#required' => TRUE,
  );
  
  // TODO! You probably don't need validation or submit handlers if using system_settings_form().
  return system_settings_form($form);
}

/**
 * Form validate handler.
 */
function custom_settings_form_validate($form, &$form_state) {
  if ($form_state['values']['element'] != 'hello') {
    form_set_error('element', t('Please say hello?'));
  }
}

/**
 * Form submit handler.
 */
function custom_settings_form_submit($form, &$form_state) {

}

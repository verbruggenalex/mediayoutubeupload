<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
 * Implementation of hook_theme().
 */
function myu_theme(&$existing, $type, $theme, $path) {

  $hook_theme = array(
    'myu_textfield_login_name' => array(
      'render element' => 'element',
    ),
    'myu_textfield_login_pass' => array(
      'render element' => 'element',
    ),
  );

  return $hook_theme;
}

/**
 * Theme function implementation for myu_textfield_login_name.
 */

function myu_myu_textfield_login_name($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'text';
  element_set_attributes($element, array('id', 'name', 'value', 'size', 'maxlength'));
  _form_set_class($element, array('form-text'));

  $output = '<label class="control-label visible-ie8 visible-ie9">Username</label><div class="input-icon"><i class="fa fa-user"></i>';
  $output .= '<input' . drupal_attributes($element['#attributes']) . ' />';
  $output .= '</div>';

  return $output;
}

/**
 * Theme function implementation for myu_textfield_login_pass.
 */

function myu_myu_textfield_login_pass($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'password';
  element_set_attributes($element, array('id', 'name', 'value', 'size', 'maxlength'));
  _form_set_class($element, array('form-text'));

  $output = '<label class="control-label visible-ie8 visible-ie9">Username</label><div class="input-icon"><i class="fa fa-lock"></i>';
  $output .= '<input' . drupal_attributes($element['#attributes']) . ' />';
  $output .= '</div>';

  return $output;
}

function myu_form_user_login_block_alter(&$form, &$form_state, $form_id) {
  // Replace textfield titles with placeholders.
  $form['name']['#attributes']['placeholder'] = $form['name']['#title'];
  unset($form['name']['#title']);
  $form['pass']['#attributes']['placeholder'] = $form['pass']['#title'];
  unset($form['pass']['#title']);
  // Iconize our textfields.
  $form['name']['#theme'] = array('myu_textfield_login_name');
  $form['pass']['#theme'] = array('myu_textfield_login_pass');
  // Add the facebook login button.
  $form['actions']['facebook'] = array(
    '#type' => 'markup',
    '#markup' => '<a id="facebook-login"  href="/user/simple-fb-connect"><i class="fa fa-facebook"></i><span>Login with Facebook</span></a>',
  );
}


<?php
/**
 * @file
 * Stub file for "page" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function myu_preprocess_page(&$variables) {
  // Language dropdown
  $variables['language_dropdown'] = _myu_language_dropdown();
  $variables['user_dropdown'] = _myu_user_dropdown();
  $variables['user_login'] = _myu_user_login();
}

function _myu_language_dropdown($type = 'language') {
  if (drupal_multilingual()) {
    global $language_url;
    $path = drupal_is_front_page() ? '<front>' : $_GET['q'];
    //$type = 'language_url';
    $languages = language_negotiation_get_switch_links($type, $path);
    $items = array();

    foreach ($languages->links as $lang_code => $lang_options) {
      if ($lang_options['language']->language === $language_url->language) {
        // Icon for the selected language
        if (module_exists('languageicons')) {
          $icon = theme('languageicons_icon', array(
            'language' => (object) array('language' => $lang_code),
            'title' => $language_url->native,
          ));
        }
        $active_language_text = $icon . '<span class="langname">' . strtoupper($language_url->language) . '</span><i class="fa fa-angle-down"></i>';
        $active_language_link = l($active_language_text, 'javascript:;', array('html' => TRUE, 'external' => TRUE, 'attributes' => array('class' => 'dropdown-toggle', 'data-close-others' => 'true', 'data-hover' => 'dropdown', 'data-toggle' => 'dropdown')));
      }
      else {
        if (!isset($lang_options['query'])) {
          $lang_options['query'] = drupal_get_query_parameters();
        }
        $items[] = l($lang_options['title'], $lang_options['href'], $lang_options);
      }
    }
    $language_flag_list = theme('item_list', array('items' => $items, 'type' => 'ul', 'attributes' => array('class' => 'dropdown-menu dropdown-menu-default')));


    return '<ul class="menu nav navbar-nav language"><li class="dropdown dropdown-language">' . $active_language_link . $language_flag_list . '</li></ul>';
  }
}

function _myu_user_dropdown() {
  global $user;
  global $language;
  $items = array();

  if ($user->uid === 0) {
    $login_link = l('<span>' . t('Login') . '</span>', '', array('attributes' => array('class' => 'login dropdown-toggle', 'data-toggle' => 'modal'), 'fragment' => 'login', 'external' => TRUE, 'html' => TRUE));
    return '<ul class="menu nav navbar-nav user"><li class="dropdown dropdown-user">' . $login_link . '</li></ul>';
  }
  else {
    $username = '';

    if (!empty($user->picture)) {
      $fid = $user->picture;
      $file = file_load($fid);
      $username = theme('image_style', array('path' => $file->uri, 'style_name' => '29x29', 'attributes' => array('class' => 'img-circle')));
    }
    $username.= '<span class="username username-hide-on-mobile">' . format_username($GLOBALS['user']) . '</span><i class="fa fa-angle-down"></i>';
    $username_link = l($username, 'javascript:;', array('html' => TRUE, 'language' => $language, 'external' => TRUE, 'attributes' => array('class' => 'dropdown-toggle', 'data-close-others' => 'true', 'data-hover' => 'dropdown', 'data-toggle' => 'dropdown')));

    $user_menu = menu_tree('user-menu');
    foreach($user_menu as $menu_link) {
      if (isset($menu_link['#original_link'])) {
        $items[] = l($menu_link['#original_link']['title'], $menu_link['#original_link']['href'], array('language' => $language));
      }
    }
    $user_menu_list = theme('item_list', array('items' => $items, 'type' => 'ul', 'attributes' => array('class' => 'dropdown-menu dropdown-menu-default')));

    return '<ul class="menu nav navbar-nav user"><li class="dropdown dropdown-user">' . $username_link . $user_menu_list . '</li></ul>';
  }
}

function _myu_user_login() {
  // Get login form block.
  $login_form = drupal_get_form('user_login_block');

  $login_modal = '<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="login" class="modal fade" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content login content">
        <div class="modal-body">
          <button class="login-close" data-dismiss="modal"><i class="fa fa-close"></i></button>
          <h3 class="form-title">Login to your account</h3>
          ' . drupal_render($login_form) . '
        </div>
      </div>
    </div>
  </div>';

  return $login_modal;
}


<?php

/**
 * @file
 * Administrative functions for Environmental admin menu.
 */

/**
 * Form definition; admin settings form.
 */
function admin_menu_environmental_settings_form($form, &$form_state) {
  $path = drupal_get_path('module', 'admin_menu_environmental');
  // Add environmental admin menu javascript.
  $form['#attached']['js'][] = $path . '/js/admin_menu_environmental.js';
  // Add stylesheet for settings form.
  $form['#attached']['css'][] = $path . '/css/form.css';

  // Vertical tabs container.
  $form['environmental'] = array(
    '#type' => 'vertical_tabs',
    '#title' => t('Environmental'),
  );
  // Tab for environments.
  $form['environments'] = array(
    '#type' => 'fieldset',
    '#title' => t('Environments'),
    '#group' => 'environmental',
  );
  // Store all different environments in the same variable.
  $form['environments']['#tree'] = TRUE;
  // Set the theming function to ours instead of the system_settings_form's.
  $form['environments']['#theme'] = 'admin_menu_environmental_environments_form';
  // Add the submit function to save our variables.
  $form['#submit'] = array('admin_menu_environmental_settings_form_submit');
  // Get the environments.
  $admin_menu_environmental = variable_get('admin_menu_environmental', array());
  // Build the form for each stored environment + one to save a new environment.
  for ($i = 0; $i < count($admin_menu_environmental) + 1; $i++) {
    // Textfield for the name, will be used instead of admin menu Home text.
    $form['environments']['admin_menu_environmental'][$i]['name'] = array(
      '#title' => t('Name'),
      '#title_display' => 'invisible',
      '#type' => 'textfield',
      '#default_value' => (!empty($admin_menu_environmental[$i]['name'])) ? $admin_menu_environmental[$i]['name'] : NULL,
      '#size' => 30,
    );
    // Domain will be used to check what environment is active.
    $form['environments']['admin_menu_environmental'][$i]['domain'] = array(
      '#title' => t('Domain'),
      '#title_display' => 'invisible',
      '#type' => 'textfield',
      '#default_value' => (!empty($admin_menu_environmental[$i]['domain'])) ? $admin_menu_environmental[$i]['domain'] : NULL,
      '#size' => 30,
    );
    // Color will be used to change the admin menu bar's color.
    $form['environments']['admin_menu_environmental'][$i]['color'] = array(
      '#title' => t('Color'),
      '#title_display' => 'invisible',
      '#type' => 'select',
      '#default_value' => (!empty($admin_menu_environmental[$i]['color'])) ? $admin_menu_environmental[$i]['color'] : NULL,
      '#options' => admin_menu_environmental_get_available_colors(),
      '#empty_option' => t('Choose color'),
    );
    // Last row doesn't need a delete checkbox, it's only used for existing
    // values.
    if ($i !== count($admin_menu_environmental)) {
      $form['environments']['admin_menu_environmental'][$i]['delete'] = array(
        '#type' => 'checkbox',
        '#title' => t('Delete'),
        '#title_display' => 'invisible',
        '#default_value' => 0,
      );
    }
  }

  // Tab for colors.
  $form['colors'] = array(
    '#type' => 'fieldset',
    '#title' => t('Colors'),
    '#group' => 'environmental',
  );
  // Get current color or set default.
  $color = isset($form_state['values']['colors']['admin_menu_environmental_color_select']) ? $form_state['values']['colors']['admin_menu_environmental_color_select'] : 'black';

  // Color preview checkbox. Feature in the works. Not functional yet.
  /* $form['colors']['admin_menu_environmental_color_preview'] = array(
  '#type' => 'checkbox',
  '#title' => t('Live preview'),
  '#default_value' => '',
  );*/
  // Selectbox for the colors.
  $form['colors']['admin_menu_environmental_color_select'] = array(
    '#type' => 'select',
    '#title' => t('Select a scheme'),
    '#options' => admin_menu_environmental_get_available_colors(),
    '#empty_option' => t('- new color -'),
    '#empty_value' => '_new_color',
    '#default_value' => $color,
    '#ajax' => array(
      'callback' => 'admin_menu_environmental_load_color',
      'wrapper' => 'admin-menu-environmental-color',
    ),
  );

  // Store all different environments in the same variable.
  $form['colors']['#tree'] = TRUE;
  // Get the variable.
  $admin_menu_environmental_colors = variable_get('admin_menu_environmental_colors', array());
  // Unset the input to allow for ajax to change the default value.
  unset($form_state['input']['admin_menu_environmental_colors']);
  // See if we can use the colorpicker.
  $fieldtype = module_exists('jquery_colorpicker') ? 'jquery_colorpicker' : 'textfield';
  // Also add a class to style according to the type.
  $wrapper_class = $fieldtype == 'textfield' ? 'class ="textfields"' : 'class="colorpickers"';
  // Only show label for textfields.
  $label_visibility = $fieldtype == 'textfield' ? 'before' : 'attribute';
  $field_prefix = $fieldtype == 'textfield' ? '#' : '';
  $fields = array(
    'bar_dark' => t('Bar dark'),
    'bar_light' => t('Bar light'),
    'bar_hover' => t('Bar hover'),
    'bar_active' => t('Bar active'),
    'dropdown_empty' => t('Dropdown empty'),
    'dropdown_container' => t('Dropdown container'),
    'dropdown_hover' => t('Dropdown hover'),
    'dropdown_border' => t('Dropdown border'),
  );
  // Build the color fields.
  foreach ($fields as $field_key => $field_title) {
    $form['colors']['admin_menu_environmental_colors'][$color][$field_key] = array(
      '#type' => $fieldtype,
      '#title' => check_plain($field_title),
      '#title_display' => $label_visibility,
      '#default_value' => isset($admin_menu_environmental_colors[$color][$field_key]) ? $admin_menu_environmental_colors[$color][$field_key] : '',
      '#size' => 7,
      '#field_prefix' => $field_prefix,
    );
  }
  if ($color == '_new_color') {
    // Textfield for new colors.
    $form['colors']['admin_menu_environmental_colors'][$color]['name'] = array(
      '#type' => 'textfield',
      // TODO: validate lowercase, underscore only?
      '#title' => t('Scheme name'),
      '#description' => t('Enter a name for the color combination.'),
      '#required' => TRUE,
      '#weight' => -10,
    );
  }
  $form['colors']['admin_menu_environmental_colors'][$color]['#prefix'] = '<div id="admin-menu-environmental-color" ' . $wrapper_class . '>';
  $form['colors']['admin_menu_environmental_colors'][$color]['#suffix'] = '</div>';

  // Tab for environments.
  $form['icons'] = array(
    '#type' => 'fieldset',
    '#title' => t('Icons'),
    '#group' => 'environmental',
  );

  return system_settings_form($form);
}

/**
 * Validate callback; admin settings form.
 */
function admin_menu_environmental_settings_form_validate($form, &$form_state) {
  foreach ($form_state['values']['environments']['admin_menu_environmental'] as $key => $environment) {
    // If environment is marked for deletion get rid of it.
    if (isset($environment['delete']) && $environment['delete'] == 1) {
      unset($form_state['values']['environments']['admin_menu_environmental'][$key]);
    }
    // If we dont need to delete the record.
    else {
      if (!array_filter($form_state['values']['environments']['admin_menu_environmental'][$key])) {
        // If no values are set on delete the record.
        unset($form_state['values']['environments']['admin_menu_environmental'][$key]);
      }
      // If we are missing a value set an error on the element.
      else {
        foreach ($form_state['values']['environments']['admin_menu_environmental'][$key] as $name => $value) {
          if (empty($value) && $name !== 'delete') {
            $element_name = implode('][', $form['environments']['admin_menu_environmental'][$key][$name]['#parents']);
            form_set_error($element_name, t('@title for environment number @number is required.', array(
              '@title' => $form['environments']['admin_menu_environmental'][$key][$name]['#title'],
              '@number' => $key + 1,
              )
            ));
          }
        }
      }
    }
  }
  $form_state['values']['environments']['admin_menu_environmental'] = array_values($form_state['values']['environments']['admin_menu_environmental']);
}

/**
 * Submit callback; admin settings form.
 */
function admin_menu_environmental_settings_form_submit($form, &$form_state) {
  global $user;
  $uid = $user->uid;
  if (!empty($form_state['values']['environments']['admin_menu_environmental'])) {
    variable_set('admin_menu_environmental', $form_state['values']['environments']['admin_menu_environmental']);
  }
  else {
    variable_del('admin_menu_environmental');
  }
  if (!empty($form_state['values']['colors']['admin_menu_environmental_color_select'])) {
    $colors = variable_get('admin_menu_environmental_colors');
    $selected = $form_state['values']['colors']['admin_menu_environmental_color_select'] !== '_new_color' ? $form_state['values']['colors']['admin_menu_environmental_color_select'] : $form_state['values']['colors']['admin_menu_environmental_colors']['_new_color']['name'];
    $colors[$selected] = $form_state['values']['colors']['admin_menu_environmental_colors'][$form_state['values']['colors']['admin_menu_environmental_color_select']];
    variable_set('admin_menu_environmental_colors', $colors);
    $current_color = array($selected => $form_state['values']['colors']['admin_menu_environmental_colors'][$form_state['values']['colors']['admin_menu_environmental_color_select']]);
    admin_menu_environmental_save_css_color_file($current_color);
  }
  // Flush admin menu caches so we can update the title.
  $cid = 'admin_menu:';
  // Flush cached output of admin_menu.
  cache_clear_all($cid, 'cache_menu', TRUE);
  // db_table_exists() required for SimpleTest.
  if (db_table_exists('cache_admin_menu')) {
    cache_clear_all(isset($uid) ? $cid : '*', 'cache_admin_menu', TRUE);
  }
}

/**
 * Transforms the environments form into a table.
 */
function theme_admin_menu_environmental_environments_form($variables) {
  // Get the form.
  $form = $variables['form'];
  // Set table headers.
  $header = array(
    t('Name'),
    t('Domain'),
    t('Color'),
    array(
      'data' => t('Delete'),
      'class' => array('checkbox'),
    ),
  );
  // Put form elements into rows.
  $rows = array();
  foreach (element_children($form['admin_menu_environmental']) as $key) {
    $element = &$form['admin_menu_environmental'][$key];
    $row = array('data' => array());
    $row['data']['name'] = drupal_render($element['name']);
    $row['data']['domain'] = drupal_render($element['domain']);
    $row['data']['color'] = drupal_render($element['color']);
    $row['data']['delete'] = drupal_render($element['delete']);
    $rows[] = $row;
  }
  // Return a table.
  $output = t('Every environmental administration menu exists of a name, domain and color. These three fields are required.') . ' ';
  $output .= t('To delete a previous entry tick the delete checkbox and save the configuration.');
  $output .= theme('table', array('header' => $header, 'rows' => $rows));
  $output .= drupal_render_children($form);

  return $output;
}

/**
 * Helper function to load color.
 */
function admin_menu_environmental_load_color($form, $form_state) {
  return $form['colors']['admin_menu_environmental_colors'][$form_state['values']['colors']['admin_menu_environmental_color_select']];
}

/**
 * Helper function to save colors.
 */
function admin_menu_environmental_save_css_color_file($colors = array()) {
  if (!empty($colors)) {
    // Replace colors and save files for each color scheme.
    foreach ($colors as $color_name => $color) {
      // Get the color scheme file.
      $filename = drupal_get_path('module', 'admin_menu_environmental') . '/css/scheme.css';
      $file_content = file_get_contents($filename);
      // Replace our tokens with the variable color codes.
      foreach ($color as $key => $color_code) {
        $file_content = str_replace("[[$key]]", "#$color_code", $file_content);
      }
      // If there is a token unchanged make it stand out.
      $file_content = preg_replace('/(\[\[[A-Za-z0-9_-]+\]\])/', 'magenta', $file_content);
      // Save the file.
      $directory = 'public://admin_menu_environmental';
      file_prepare_directory($directory, FILE_CREATE_DIRECTORY);
      file_save_data($file_content, $directory . '/' . $color_name . '.css', FILE_EXISTS_REPLACE);
    }
  }
}

/**
 * Helper function to get available colors.
 */
function admin_menu_environmental_get_available_colors() {
  // Get the variable.
  $variable = variable_get('admin_menu_environmental_colors', array());
  if (!empty($variable)) {
    // Get color keys keyed by key.
    $colors = array_combine(array_keys($variable), array_keys($variable));
    return $colors;
  }
  else {
    return FALSE;
  }
}

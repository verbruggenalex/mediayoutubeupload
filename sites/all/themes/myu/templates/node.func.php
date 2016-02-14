<?php
/**
 * @file
 * Stub file for myu_node().
 */

function myu_preprocess_node(&$vars) {
  if($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';   
  }
}

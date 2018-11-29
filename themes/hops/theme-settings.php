<?php

/**
 * @file
 * Add custom theme settings to the Hops theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function hops_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $styleguide_path = base_path() . drupal_get_path('theme', 'hops') . '/styleguide/index.html';
  $form['hops_styleguide'] = [
    '#title'         => '&#9733; ' . t('Styleguide'),
    '#description' => t('A <a href="@link">living style guide</a> generated from the theme stylesheet. Developers, use it for finding components markup and modifiers. Themers, use it for styling and maintaining custom components.', ['@link' => $styleguide_path]),
    '#type'          => 'fieldset',
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
    '#weight' => -20,
  ];

  $form['hops_typekit'] = [
    '#type' => 'fieldset',
    '#title'         => '&#3845; ' . t('Typekit'),
  ];

  $form['hops_typekit']['typekit_id'] = [
    '#type'          => 'textfield',
    '#title'         => t('Typekit ID'),
    '#description'   => t('E.g. http://use.typekit.com/XXX.js (the typekit codes will be included only if this field is filled)'),
    '#default_value' => theme_get_setting('typekit_id'),
    '#size' => 8,
  ];

  // Cool Stuff.
  $form['stuff'] = [
    '#type'          => 'fieldset',
    '#title'         => '&#9996; ' . t('Stuff'),
    '#description'   => '',
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#weight' => -17,
  ];

  $form['stuff']['meta_theme_color'] = [
    '#type'          => 'textfield',
    '#title'         => t('Theme color meta tag'),
    '#attributes'   => ['placeholder' => ['#ccc']],
    '#description'   => t('Use the <a href="@link">theme-color</a> meta tag to set the toolbar color (starting in version 39 of Chrome for Android on Lollipop)', ['@link' => 'http://updates.html5rocks.com/2014/11/Support-for-theme-color-in-Chrome-39-for-Android']),
    '#default_value' => theme_get_setting('meta_theme_color'),
  ];
}

<?php
/**
 * @file
 * theme-settings.php
 *
 * Provides theme settings for hhs themes when admin theme is not.
 *
 * 
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function hhs_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
  // Alter theme settings form.
  $form['hhs'] = array (
    '#type' => 'vertical_tabs',
    '#prefix' => '<h2><small>' . t('hhs Settings') . '</small></h2>',
    '#weight' => -8
  );
  $form['hhs_settings']['style'] = array(
    '#type' => 'fieldset',
    '#title' => t('Style Switcher'),
    '#group' => 'hhs'
  );
  
  $form['hhs_settings']['style']['page_style'] = array(
    '#type' =>'select', 
    '#title' => t('Page Style'),
    '#options' => array(
      'wide' => t('Wide'),
      'boxed' => t('boxed'),
     ),
    '#default_value' => theme_get_setting('page_style')?theme_get_setting('page_style'):'wide',
  );
  $form['hhs_settings']['style']['bgpattern']= array(
    '#type' => 'fieldset',
    '#title' => t('Background pattern for boxed'),
    '#collapsible' => TRUE, 
    '#collapsed' => FALSE,  
    '#prefix' => '<div class="color-switcher" id="choose_color"> ',
    '#suffix' => '</div>',
    '#group' => 'style'
  );
  $form['hhs_settings']['style']['bgpattern']['bgstyle'] = array(
    '#type' => 'hidden',
    '#title' => t('Background Partern'),
    '#default_value' => theme_get_setting('bgstyle')?theme_get_setting('bgstyle'):'bg-patterns1',
    '#prefix' => '<div class="theme-patterns">
      <p>Choose BG Pattern</p>
      <ul>
        <li><a href="#" class="bg-patterns1" onClick="return bgpattern(this,\'bg-patterns1\');"></a></li>
        <li><a href="#" class="bg-patterns2" onClick="return bgpattern(this,\'bg-patterns2\');"></a></li>
        <li><a href="#" class="bg-patterns3" onClick="return bgpattern(this,\'bg-patterns3\');"></a></li>
        <li><a href="#" class="bg-patterns4" onClick="return bgpattern(this,\'bg-patterns4\');"></a></li>
        <li><a href="#" class="bg-patterns5" onClick="return bgpattern(this,\'bg-patterns5\');"></a></li>
        <li><a href="#" class="bg-patterns6" onClick="return bgpattern(this,\'bg-patterns6\');"></a></li>
        <li><a href="#" class="bg-patterns7" onClick="return bgpattern(this,\'bg-patterns7\');"></a></li>
        <li><a href="#" class="bg-patterns8" onClick="return bgpattern(this,\'bg-patterns8\');"></a></li>
        <li><a href="#" class="bg-patterns9" onClick="return bgpattern(this,\'bg-patterns9\');"></a></li>
        <li><a href="#" class="bg-patterns10" onClick="return bgpattern(this,\'bg-patterns10\');"></a></li>
        <li><a href="#" class="bg-patterns11" onClick="return bgpattern(this,\'bg-patterns11\');"></a></li>
        <li><a href="#" class="bg-patterns12" onClick="return bgpattern(this,\'bg-patterns12\');"></a></li>        
      </ul> ',
    '#suffix' => '</div>'
  );

  if($bgstyle = theme_get_setting('bgstyle')){
    drupal_add_js("jQuery(function() { 
      jQuery('.theme-patterns .".$bgstyle."').addClass('active-pattern'); 
    });"
    ,'inline');
  } else {
    drupal_add_js("jQuery(function() { 
      jQuery('.theme-patterns .bg-patterns1').addClass('active-pattern'); 
    });"
    ,'inline');
  }  

  drupal_add_js("
    function bgpattern(oBj, pattern){
      jQuery('input[name=\"bgstyle\"]').val(pattern);
      jQuery(oBj).parent().parent().find('a').removeClass('active-pattern');
      jQuery(oBj).addClass('active-pattern');
      return false;
    }"    
  ,'inline');

  $theme_path = drupal_get_path('theme', 'hhs');
  drupal_add_css($theme_path . '/css/admin-settings.css');
  $form['hhs_settings']['map'] = array(
    '#type' => 'fieldset',
    '#title' => t('Map Information'),
    '#group' => 'hhs'
  );    

  return $form;
}
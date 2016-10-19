<?php


function kgtech_preprocess_page(&$vars, $hook) {
  global $user;
  kgtech_process_tabs($vars);

  if(isset($user->roles[6])){
    $vars['tabs'] = array();
  }
}

function kgtech_preprocess_html(&$variables) {
  drupal_add_css('https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css', array('type' => 'external'));
}


function kgtech_menu_alter(&$items) {
    // Change the title of user profile pages to the user's name.  Gak.
    $items['user/%user']['title callback'] = 'kgtech_user_page_title';
}

function kgtech_user_page_title() {
    if (arg(0) == 'user') {
        $user_data = user_load(arg(1));
        $output = $user_data->field_name['und'][0]['value'];
    }
    // Fallback to username if no fields are present
    if (empty($output)) {
        $output = $user->name;
    }
    return $output;
}


function kgtech_process_tabs(&$vars) {
  $types = array('#primary', '#secondary');
  foreach ($types as $type) {
    if (is_array($vars['tabs'][$type])) {
      foreach ($vars['tabs'][$type] as $key => $tab) {
        $vars['tabs'][$type][$key]['#link']['localized_options']['attributes']['class'][] = drupal_clean_css_identifier($vars['tabs'][$type][$key]['#link']['path']);
      }
    }
  }
}


function kgtech_field_dataname(){
  $fields = array();
  $tags = module_exists('misc') ? misc_tags() : array('product','market','business','innovative','financial');
  foreach ($tags as $key => $value) {
    $fields[] = "field_".$value;
  }
  return $fields;
}

function kgtech_menu_tree__menu_leftmenu($variables) {
  return '<ul class="menu list-group">' . $variables['tree'] . '</ul>';
}
function kgtech_menu_tree__menu_leftmenu_mentor($variables) {
  return '<ul class="menu list-group">' . $variables['tree'] . '</ul>';
}

function kgtech_menu_link__menu_leftmenu($variables) {
//add class for li
   //$variables['element']['#attributes']['class'][] = 'list-group-item';
   $variables['element']['#localized_options']['attributes']['class'][] = 'list-group-item';

  return theme_menu_link($variables);
}
function kgtech_menu_link__menu_leftmenu_mentor($variables) {
   $variables['element']['#localized_options']['attributes']['class'][] = 'list-group-item';

  return theme_menu_link($variables);
}

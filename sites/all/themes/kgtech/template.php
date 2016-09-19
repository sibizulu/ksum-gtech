<?php


function kgtech_preprocess_page(&$vars, $hook) {
global $user;

  if(arg(0)=='user' && arg(1)== 'register'){
    $vars['title'] = t('Mentors Registration');

  }
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

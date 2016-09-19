<?php


function kgtech_preprocess_page(&$vars, $hook) {
global $user;

  if(arg(0)=='user' && arg(1)== 'register'){
    $vars['title'] = t('Mentors Registration');

  }
}

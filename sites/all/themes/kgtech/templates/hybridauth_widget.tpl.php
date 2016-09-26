<?php
$output = array();
foreach($providers as $val){
      $output[] = array("data" => $val,"class" => "connect-ksum");
  }
$providers = $output;
  ?>

<!-- <div class="hybridauth-widget-wrapper"> --><?php
  print theme('item_list',
    array(
      'items' => $providers,
      #'title' => $element['#title'],
      'type' => 'ul',
      'attributes' => array('class' => array('hybridauth-widget menu nav navbar-nav secondary')),
    )
  );
?><!-- </div> -->

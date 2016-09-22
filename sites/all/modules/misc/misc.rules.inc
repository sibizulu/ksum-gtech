<?php

 /**
  * @file
  * Example rules module to create actions, events, and conditions
  */

/**
 * Implement hook_rules_action_info()

 * Declare any meta data about actions for Rules
 */

function misc_rules_action_info() {
    $actions = array(
        'misc_actions_update_rating' => array(
            'label' => t('Update total rating'),
            'group' => t('Custom Rules'),
            'parameter' => array(
                'node' => array(
                    'type' => 'node',
                    'label' => t('Node'),
                    ),
                ),
            ),
        );

return $actions;
}


/**
 * The action function for rules_example_action_hello_user
 */

function misc_actions_update_rating($node) {

 $rating = array();

 foreach ( misc_tags() as $key => $value) {
   $votes = votingapi_select_results(
    array(
      'entity_id' => $node->nid,
      'tag' => $value,
      'function' => 'average'
      )
    );
   if ( !empty($votes) )
    $rating[] = $votes[0]['value'];
 }

 $node->field_total_rating['und'][0]['value'] = (array_sum($rating) / count($rating))/10;
 node_save($node);
}


<?php
 // created: 2016-12-01 06:54:51

$dictionary['Contact']['fields']['pay']=array(
      'required' => false,
      'name' => 'pay',
      'vname' => 'LBL_PAY',
      'type' => 'int',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => 40000,
      'max' => 60000,
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
        'max' => 200000,
      ),
);
?>
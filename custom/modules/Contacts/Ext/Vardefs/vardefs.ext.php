<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-12-01 06:54:51
$dictionary['Contact']['fields']['vip']=array(
      'required' => false,
      'name' => 'vip',
      'vname' => 'LBL_VIP',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
      'no_default' => false,
      'comments' => 'vip',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
);
$dictionary['Contact']['fields']['social_net']=array(
      'required' => false,
      'name' => 'social_net',
      'vname' => 'LBL_SOCIAL_NET',
      'type' => 'url',
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
      'len' => '100',
      'size' => '20',
      'dbType' => 'varchar',
      'gen' => '',
      'link_target' => '_self',
);

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
      'min' => 0,
      'max' => 200000,
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
        'max' => 200000,
      ),
);
$dictionary['Contact']['fields']['category']=array(
      'required' => false,
      'name' => 'category',
      'vname' => 'LBL_CATEGORY',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '0',
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
      'len' => 100,
      'size' => '20',
      'options' => 'contact_category_list',
      'studio' => 'visible',
      'dependency' => false,
);
$dictionary['Contact']['fields']['position']=array(
      'required' => false,
      'name' => 'position',
      'vname' => 'LBL_POSITION',
      'type' => 'dynamicenum',
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
      'len' => 100,
      'size' => '20',
      'options' => 'contact_position_list',
      'studio' => 'visible',
      'dbType' => 'enum',
      'parentenum' => 'category',
);	  



 // created: 2016-12-01 06:54:51
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2016-12-01 06:54:51
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2016-12-01 06:54:51
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2016-12-01 06:54:51
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>
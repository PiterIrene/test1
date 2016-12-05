<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2016-11-24 11:04:21
$dictionary['Contact']['fields']['category']= array (
	   'required' => false,
      'name' => 'category',
      'vname' => 'LBL_CATEGORY',
      'type' => 'enum',
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
      'options' => 'contact_category_list',
      'studio' => 'visible',
      'dependency' => false,
												 
    );
 

 // created: 2016-11-24 11:04:21
$dictionary['Contact']['fields']['position']= array (
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

 

 // created: 2016-12-05 07:52:11
$dictionary['Contact']['fields']['pay']['options']='numeric_range_search_dom';
$dictionary['Contact']['fields']['pay']['enable_range_search']='1';
$dictionary['Contact']['fields']['pay']['min']=0;
$dictionary['Contact']['fields']['pay']['max']=200000;

 
?>
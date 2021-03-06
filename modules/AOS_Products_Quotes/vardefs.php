<?php
/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 *
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

$dictionary['AOS_Products_Quotes'] = array(
    'table' => 'aos_products_quotes',
    'audited' => true,
    'fields' => array(
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'type' => 'text',
            'link' => true,
            'unified_search' => true,
            'required' => true,
            'importable' => 'required',
        ),
        'currency_id' => array(
            'required' => false,
            'name' => 'currency_id',
            'vname' => 'LBL_CURRENCY',
            'type' => 'id',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'reportable' => false,
            'len' => 36,
            'size' => '20',
            'studio' => 'visible',
            'function' =>
                array(
                    'name' => 'getCurrencyDropDown',
                    'returns' => 'html',
                ),
            ),
        'part_number' => array(
            'required' => false,
            'name' => 'part_number',
            'vname' => 'LBL_PART_NUMBER',
            'type' => 'varchar',
            'massupdate' => '0',
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id' => 'AOS_Products_Quotespart_number',
         ),
        'item_description' => array(
            'name' => 'item_description',
            'vname' => 'LBL_PRODUCT_DESCRIPTION',
            'type' => 'text',
            'comment' => '',
            'rows' => 6,
            'cols' => 80,
         ),
        'number' => array(
            'required' => false,
            'name' => 'number',
            'vname' => 'LBL_LIST_NUM',
            'type' => 'int',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 0,
            'reportable' => true,
            'len' => '11',
            'disable_num_format' => '',
         ),
        'product_qty' => array(
            'required' => false,
            'name' => 'product_qty',
            'vname' => 'LBL_PRODUCT_QTY',
            'type' => 'decimal',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'len' => '18',
            'size' => '20',
            'enable_range_search' => false,
            'precision' => '4',
         ),
        'product_cost_price' => array(
            'required' => false,
            'name' => 'product_cost_price',
            'vname' => 'LBL_PRODUCT_COST_PRICE',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 0,
            'reportable' => true,
            'len' => '26,6',
         ),
        'product_cost_price_usdollar' => array(
            'name' => 'product_cost_price_usdollar',
            'vname' => 'LBL_PRODUCT_COST_PRICE_USDOLLAR',
            'type' => 'currency',
            'group' => 'product_cost_price',
            'disable_num_format' => true,
            'duplicate_merge' => '0',
            'audited' => true,
            'comment' => '',
            'studio' => array(
                'editview' => false,
                'detailview' => false,
                'quickcreate' => false,
            ),
            'len' => '26,6',
         ),
        'product_list_price' => array(
            'required' => false,
            'name' => 'product_list_price',
            'vname' => 'LBL_PRODUCT_LIST_PRICE',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
         ),
        'product_list_price_usdollar' => array(
            'name' => 'product_list_price_usdollar',
            'vname' => 'LBL_PRODUCT_LIST_PRICE_USDOLLAR',
            'type' => 'currency',
            'group' => 'product_list_price',
            'disable_num_format' => true,
            'duplicate_merge' => '0',
            'audited' => true,
            'comment' => '',
            'studio' => array(
                'editview' => false,
                'detailview' => false,
                'quickcreate' => false,
            ),
            'len' => '26,6',
         ),
        'product_discount' => array(
            'required' => false,
            'name' => 'product_discount',
            'vname' => 'LBL_PRODUCT_DISCOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
         ),
        'product_discount_usdollar' => array(
            'name' => 'product_discount_usdollar',
            'vname' => 'LBL_PRODUCT_DISCOUNT_USDOLLAR',
            'type' => 'currency',
            'group' => 'product_discount',
            'disable_num_format' => true,
            'duplicate_merge' => '0',
            'audited' => true,
            'comment' => '',
            'studio' => array(
                'editview' => false,
                'detailview' => false,
                'quickcreate' => false,
            ),
            'len' => '26,6',
         ),
        'product_discount_amount' => array(
            'required' => false,
            'name' => 'product_discount_amount',
            'vname' => 'LBL_PRODUCT_DISCOUNT_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
         ),
        'product_discount_amount_usdollar' => array(
            'name' => 'product_discount_amount_usdollar',
            'vname' => 'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR',
            'type' => 'currency',
            'group' => 'product_discount_amount',
            'disable_num_format' => true,
            'duplicate_merge' => '0',
            'audited' => true,
            'comment' => '',
            'studio' => array(
                'editview' => false,
                'detailview' => false,
                'quickcreate' => false,
            ),
            'len' => '26,6',
         ),
        'discount' => array(
            'required' => false,
            'name' => 'discount',
            'vname' => 'LBL_DISCOUNT',
            'type' => 'enum',
            'massupdate' => 0,
            'default' => 'Percentage',
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => 255,
            'options' => 'discount_list',
            'studio' => 'visible',
         ),

        'product_unit_price' => array(
            'required' => '1',
            'name' => 'product_unit_price',
            'vname' => 'LBL_PRODUCT_UNIT_PRICE',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
         ),
        'product_unit_price_usdollar' => array(
            'name' => 'product_unit_price_usdollar',
            'vname' => 'LBL_PRODUCT_UNIT_PRICE_USDOLLAR',
            'type' => 'currency',
            'group' => 'product_unit_price',
            'disable_num_format' => true,
            'duplicate_merge' => '0',
            'audited' => true,
            'comment' => '',
            'studio' => array(
                'editview' => false,
                'detailview' => false,
                'quickcreate' => false,
            ),
            'len' => '26,6',
         ),
        'vat_amt' => array(
            'required' => '1',
            'name' => 'vat_amt',
            'vname' => 'LBL_VAT_AMT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
         ),
        'vat_amt_usdollar' => array(
            'name' => 'vat_amt_usdollar',
            'vname' => 'LBL_VAT_AMT_USDOLLAR',
            'type' => 'currency',
            'group' => 'vat_amt',
            'disable_num_format' => true,
            'duplicate_merge' => '0',
            'audited' => true,
            'comment' => '',
            'studio' => array(
                'editview' => false,
                'detailview' => false,
                'quickcreate' => false,
            ),
            'len' => '26,6',
         ),
        'product_total_price' => array(
            'required' => '1',
            'name' => 'product_total_price',
            'vname' => 'LBL_PRODUCT_TOTAL_PRICE',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
         ),
        'product_total_price_usdollar' => array(
            'name' => 'product_total_price_usdollar',
            'vname' => 'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR',
            'type' => 'currency',
            'group' => 'product_total_price',
            'disable_num_format' => true,
            'duplicate_merge' => '0',
            'audited' => true,
            'comment' => '',
            'studio' => array(
                'editview' => false,
                'detailview' => false,
                'quickcreate' => false,
            ),
            'len' => '26,6',
         ),
        'vat' => array(
            'required' => false,
            'name' => 'vat',
            'vname' => 'LBL_VAT',
            'type' => 'enum',
            'massupdate' => 0,
            'default' => '5.0',
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 0,
            'reportable' => true,
            'len' => 100,
            'options' => 'vat_list',
            'studio' => 'visible',
         ),
        'parent_name' => array(
            'required' => false,
            'source' => 'non-db',
            'name' => 'parent_name',
            'vname' => 'LBL_FLEX_RELATE',
            'type' => 'parent',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => 0,
            'len' => 25,
            'options' => 'product_quote_parent_type_dom',
            'studio' => 'visible',
            'type_name' => 'parent_type',
            'id_name' => 'parent_id',
            'parent_type' => 'record_type_display',
         ),
        'parent_type' => array(
            'required' => false,
            'name' => 'parent_type',
            'vname' => 'LBL_PARENT_TYPE',
            'type' => 'parent_type',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => 0,
            'reportable' => 0,
            'len' => 100,
            'dbType' => 'varchar',
            'studio' => 'hidden',
         ),
        'parent_id' => array(
            'required' => false,
            'name' => 'parent_id',
            'vname' => 'LBL_PARENT_ID',
            'type' => 'id',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => 0,
            'reportable' => 0,
            'len' => 36,
         ),
        'product_id' => array(
            'required' => false,
            'name' => 'product_id',
            'vname' => '',
            'type' => 'id',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => 0,
            'reportable' => 0,
            'len' => 36,
         ),
        'group_name' => array(
            'name' => 'group_name',
            'rname' => 'name',
            'vname' => 'LBL_GROUP_NAME',
            'type' => 'relate',
            'reportable' => false,
            'source' => 'non-db',
            'table' => 'aos_line_item_groups',
            'id_name' => 'group_id',
            'module' => 'AOS_Line_Item_Groups',
            'duplicate_merge' => 'disabled',
         ),
        'group_id' => array(
            'required' => false,
            'name' => 'group_id',
            'vname' => '',
            'type' => 'id',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => 0,
            'reportable' => 0,
            'len' => 36,
         ),
        'aos_products' => array(
            'name' => 'aos_products',
            'type' => 'link',
            'relationship' => 'aos_product_quotes_aos_products',
            'module' => 'AOS_Products',
            'bean_name' => 'AOS_Products',
            'source' => 'non-db',
         ),
        'aos_contracts' => array(
            'name' => 'aos_contracts',
            'type' => 'link',
            'relationship' => 'aos_contracts_aos_products_quotes',
            'module' => 'AOS_Contracts',
            'bean_name' => 'AOS_Contracts',
            'source' => 'non-db',
         ),
        'aos_quotes' => array(
            'name' => 'aos_quotes',
            'type' => 'link',
            'relationship' => 'aos_quotes_aos_product_quotes',
            'module' => 'AOS_Quotes',
            'bean_name' => 'AOS_Quotes',
            'source' => 'non-db',
         ),
        'aos_invoices' => array(
            'name' => 'aos_invoices',
            'type' => 'link',
            'relationship' => 'aos_invoices_aos_product_quotes',
            'module' => 'AOS_Invoices',
            'bean_name' => 'AOS_Invoices',
            'source' => 'non-db',
        ),
    ),
    'indices' => array(
        array(
            'name' => 'idx_aospq_par_del',
            'type' => 'index',
            'fields' => array(
                'parent_id',
                'parent_type',
                'deleted'
            ),
        ),
    ),
    'relationships' => array(
        'aos_product_quotes_aos_products' => array(
            'lhs_module' => 'AOS_Products',
            'lhs_table' => 'aos_products',
            'lhs_key' => 'id',
            'rhs_module' => 'AOS_Products_Quotes',
            'rhs_table' => 'aos_products_quotes',
            'rhs_key' => 'product_id',
            'relationship_type' => 'one-to-many',
        ),
    ),
    'optimistic_lock' => true,
);
require_once('include/SugarObjects/VardefManager.php');
VardefManager::createVardef('AOS_Products_Quotes', 'AOS_Products_Quotes', array('basic', 'assignable'));

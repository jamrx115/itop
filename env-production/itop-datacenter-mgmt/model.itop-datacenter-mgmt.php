						<?php
//
// File generated by ... on the 2018-04-06T14:05:07-0500
// Please do not edit manually
//

/**
 * Classes and menus for itop-datacenter-mgmt (version 2.2.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



class Rack extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name'),
			'db_table' => 'rack',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-datacenter-mgmt/images/rack.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeInteger("nb_u", array("allowed_values"=>null, "sql"=>'nb_u', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("device_list", array("linked_class"=>'DatacenterDevice', "ext_key_to_me"=>'rack_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDONLY, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("enclosure_list", array("linked_class"=>'Enclosure', "ext_key_to_me"=>'rack_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDONLY, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'nb_u',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
  13 => 'description',
  14 => 'contacts_list',
  15 => 'documents_list',
  16 => 'enclosure_list',
  17 => 'device_list',
  18 => 'providercontracts_list',
  19 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'nb_u',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'nb_u',
));

	}


}


class Enclosure extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'enclosure',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-datacenter-mgmt/images/enclosure.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("rack_id", array("targetclass"=>'Rack', "allowed_values"=>null, "sql"=>'rack_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("rack_name", array("allowed_values"=>null, "extkey_attcode"=>'rack_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeInteger("nb_u", array("allowed_values"=>null, "sql"=>'nb_u', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("device_list", array("linked_class"=>'DatacenterDevice', "ext_key_to_me"=>'enclosure_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDONLY, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'rack_id',
  6 => 'brand_id',
  7 => 'model_id',
  8 => 'nb_u',
  9 => 'serialnumber',
  10 => 'asset_number',
  11 => 'move2production',
  12 => 'purchase_date',
  13 => 'end_of_warranty',
  14 => 'description',
  15 => 'contacts_list',
  16 => 'documents_list',
  17 => 'device_list',
  18 => 'providercontracts_list',
  19 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));

	}


	/**
	 * Placeholder for backward compatibility (iTop <= 2.1.0)
	 * in case an extension attempts to redefine this function...	 
	 */
	public static function GetRelationQueries($sRelCode){return parent::GetRelationQueries($sRelCode);} 
	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'datacenterdevice' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'Enclosure',
  'sNeighbour' => 'datacenterdevice',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'device_list',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


abstract class PowerConnection extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'powerconnection',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-datacenter-mgmt/images/power-connection.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
  12 => 'description',
  13 => 'contacts_list',
  14 => 'documents_list',
  15 => 'providercontracts_list',
  16 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'finalclass',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
));

	}


	/**
	 * Placeholder for backward compatibility (iTop <= 2.1.0)
	 * in case an extension attempts to redefine this function...	 
	 */
	public static function GetRelationQueries($sRelCode){return parent::GetRelationQueries($sRelCode);} 
	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'datacenterdevice' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'PowerConnection',
  'sNeighbour' => 'datacenterdevice',
  'sQueryDown' => 'SELECT DatacenterDevice WHERE powerA_id = :this->id OR powerB_id = :this->id',
  'sQueryUp' => 'SELECT PowerConnection WHERE id = :this->powerA_id OR id = :this->powerB_id',
  'sAttribute' => NULL,
),
				'pdu' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'PowerConnection',
  'sNeighbour' => 'pdu',
  'sQueryDown' => 'SELECT PDU WHERE powerstart_id = :this->id',
  'sQueryUp' => 'SELECT PowerConnection WHERE id = :this->powerstart_id',
  'sAttribute' => NULL,
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class PowerSource extends PowerConnection
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'powersource',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-datacenter-mgmt/images/power-connection.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("pdus_list", array("linked_class"=>'PDU', "ext_key_to_me"=>'powerstart_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDONLY, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
  12 => 'description',
  13 => 'pdus_list',
  14 => 'contacts_list',
  15 => 'documents_list',
  16 => 'providercontracts_list',
  17 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));

	}


}


class PDU extends PowerConnection
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'pdu',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-datacenter-mgmt/images/pdu.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("rack_id", array("targetclass"=>'Rack', "allowed_values"=>new ValueSetObjects("SELECT Rack WHERE location_id= :this->location_id"), "sql"=>'rack_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('location_id'), "allow_target_creation"=>false, "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("rack_name", array("allowed_values"=>null, "extkey_attcode"=>'rack_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("powerstart_id", array("targetclass"=>'PowerConnection', "allowed_values"=>new ValueSetObjects("SELECT PowerConnection WHERE id != :this->id AND location_id = :this->location_id"), "sql"=>'powerstart_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('location_id'), "allow_target_creation"=>false, "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("powerstart_name", array("allowed_values"=>null, "extkey_attcode"=>'powerstart_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'rack_id',
  6 => 'powerstart_id',
  7 => 'brand_id',
  8 => 'model_id',
  9 => 'serialnumber',
  10 => 'asset_number',
  11 => 'move2production',
  12 => 'purchase_date',
  13 => 'end_of_warranty',
  14 => 'description',
  15 => 'contacts_list',
  16 => 'documents_list',
  17 => 'providercontracts_list',
  18 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'powerstart_id',
  6 => 'brand_id',
  7 => 'model_id',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));

	}


	/**
	 * Placeholder for backward compatibility (iTop <= 2.1.0)
	 * in case an extension attempts to redefine this function...	 
	 */
	public static function GetRelationQueries($sRelCode){return parent::GetRelationQueries($sRelCode);} 

}
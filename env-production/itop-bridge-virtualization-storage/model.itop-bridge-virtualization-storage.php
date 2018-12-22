						<?php
//
// File generated by ... on the 2018-12-22T16:22:23-0500
// Please do not edit manually
//

/**
 * Classes and menus for itop-bridge-virtualization-storage (version 2.3.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



class lnkVirtualDeviceToVolume extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,configmgmt',
			'key_type' => 'autoincrement',
			'is_link' => true,
			'name_attcode' => array('volume_id'),
			'state_attcode' => '',
			'reconc_keys' => array(''),
			'db_table' => 'lnkvirtualdevicetovolume',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("volume_id", array("targetclass"=>'LogicalVolume', "allowed_values"=>null, "sql"=>'volume_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("volume_name", array("allowed_values"=>null, "extkey_attcode"=>'volume_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("virtualdevice_id", array("targetclass"=>'VirtualDevice', "allowed_values"=>null, "sql"=>'virtualdevice_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("virtualdevice_name", array("allowed_values"=>null, "extkey_attcode"=>'virtualdevice_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("size_used", array("allowed_values"=>null, "sql"=>'size_used', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'volume_id',
  1 => 'virtualdevice_id',
  2 => 'size_used',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'volume_id',
  1 => 'virtualdevice_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'volume_id',
  1 => 'virtualdevice_id',
  2 => 'size_used',
));

	}


}
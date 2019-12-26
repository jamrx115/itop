						<?php
//
// File generated by ... on the 2019-12-26T08:53:49-0500
// Please do not edit manually
//

/**
 * Classes and menus for portal-categories-filter (version 1.0.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



class PortalServiceFamily extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('sf_name'),
			'state_attcode' => '',
			'reconc_keys' => array('sf_name'),
			'db_table' => 'portalservicefamily',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("id_sf", array("targetclass"=>'ServiceFamily', "allowed_values"=>null, "sql"=>'id_sf', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("sf_name", array("allowed_values"=>null, "sql"=>'sf_name', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'id_sf',
  1 => 'sf_name',
));

	}


}
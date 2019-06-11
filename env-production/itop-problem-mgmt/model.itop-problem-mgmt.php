						<?php
//
// File generated by ... on the 2019-06-10T23:50:04+0200
// Please do not edit manually
//

/**
 * Classes and menus for itop-problem-mgmt (version 2.3.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


/**
 * Persistent classes for a CMDB
 *
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
class Problem extends Ticket
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable,problemmgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('ref'),
			'state_attcode' => 'status',
			'reconc_keys' => array('ref'),
			'db_table' => 'ticket_problem',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-problem-mgmt/images/problem.png',
			'order_by_default' => array('ref' => false),
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeEnum("status", array("allowed_values"=>new ValueSetEnum("new,assigned,resolved,closed"), "display_style"=>'list', "sql"=>'status', "default_value"=>'new', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("service_id", array("targetclass"=>'Service', "allowed_values"=>new ValueSetObjects("SELECT Service"), "sql"=>'service_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('org_id'), "allow_target_creation"=>false, "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("service_name", array("allowed_values"=>null, "extkey_attcode"=>'service_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("servicesubcategory_id", array("targetclass"=>'ServiceSubcategory', "allowed_values"=>new ValueSetObjects("SELECT ServiceSubcategory WHERE service_id = :this->service_id"), "sql"=>'servicesubcategory_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('service_id'), "allow_target_creation"=>false, "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("servicesubcategory_name", array("allowed_values"=>null, "extkey_attcode"=>'servicesubcategory_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("product", array("allowed_values"=>null, "sql"=>'product', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("impact", array("allowed_values"=>new ValueSetEnum("1,2,3"), "display_style"=>'list', "sql"=>'impact', "default_value"=>'1', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("urgency", array("allowed_values"=>new ValueSetEnum("1,2,3,4"), "display_style"=>'list', "sql"=>'urgency', "default_value"=>'1', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("priority", array("allowed_values"=>new ValueSetEnum("1,2,3,4"), "display_style"=>'list', "sql"=>'priority', "default_value"=>'1', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("related_change_id", array("targetclass"=>'Change', "allowed_values"=>new ValueSetObjects("SELECT Change WHERE status != \"closed\""), "sql"=>'related_change_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("related_change_ref", array("allowed_values"=>null, "extkey_attcode"=>'related_change_id', "target_attcode"=>'ref', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("assignment_date", array("allowed_values"=>null, "sql"=>'assignment_date', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("resolution_date", array("allowed_values"=>null, "sql"=>'resolution_date', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("knownerrors_list", array("linked_class"=>'KnownError', "ext_key_to_me"=>'problem_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDONLY, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("related_request_list", array("linked_class"=>'UserRequest', "ext_key_to_me"=>'parent_problem_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDREMOVE, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("related_incident_list", array("linked_class"=>'Incident', "ext_key_to_me"=>'parent_problem_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDREMOVE, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));

		// Lifecycle (status attribute: status)
		//
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_assign", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_reassign", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_resolve", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_close", array()));
		MetaModel::Init_DefineState(
			"new",
			array(
				"attribute_inherit" => '',
				"attribute_list" => array(
					'ref' => OPT_ATT_READONLY,
					'org_id' => OPT_ATT_MUSTPROMPT,
					'team_id' => OPT_ATT_HIDDEN,
					'agent_id' => OPT_ATT_HIDDEN,
					'description' => OPT_ATT_MUSTPROMPT,
					'start_date' => OPT_ATT_READONLY,
					'last_update' => OPT_ATT_READONLY,
					'close_date' => OPT_ATT_HIDDEN,
					'service_id' => OPT_ATT_NORMAL,
					'servicesubcategory_id' => OPT_ATT_NORMAL,
					'product' => OPT_ATT_NORMAL,
					'impact' => OPT_ATT_MUSTPROMPT,
					'urgency' => OPT_ATT_MUSTPROMPT,
					'priority' => OPT_ATT_READONLY,
					'related_change_id' => OPT_ATT_NORMAL,
					'assignment_date' => OPT_ATT_HIDDEN,
					'resolution_date' => OPT_ATT_HIDDEN,
				),
			)
		);
		MetaModel::Init_DefineTransition("new", "ev_assign", array("target_state"=>"assigned", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "assignment_date")))), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"assigned",
			array(
				"attribute_inherit" => 'new',
				"attribute_list" => array(
					'title' => OPT_ATT_NORMAL,
					'team_id' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
					'agent_id' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
					'assignment_date' => OPT_ATT_READONLY,
					'service_id' => OPT_ATT_NORMAL,
					'servicesubcategory_id' => OPT_ATT_NORMAL,
					'product' => OPT_ATT_NORMAL,
					'impact' => OPT_ATT_NORMAL,
					'urgency' => OPT_ATT_NORMAL,
					'related_change_id' => OPT_ATT_NORMAL,
				),
			)
		);
		MetaModel::Init_DefineTransition("assigned", "ev_reassign", array("target_state"=>"assigned", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("assigned", "ev_resolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date")))), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"resolved",
			array(
				"attribute_inherit" => 'assigned',
				"attribute_list" => array(
					'caller_id' => OPT_ATT_READONLY,
					'service_id' => OPT_ATT_MANDATORY,
					'servicesubcategory_id' => OPT_ATT_MUSTPROMPT,
					'product' => OPT_ATT_MUSTPROMPT,
					'impact' => OPT_ATT_READONLY,
					'urgency' => OPT_ATT_READONLY,
					'org_id' => OPT_ATT_READONLY,
					'team_id' => OPT_ATT_READONLY,
					'agent_id' => OPT_ATT_READONLY,
					'title' => OPT_ATT_READONLY,
					'description' => OPT_ATT_READONLY,
				),
			)
		);
		MetaModel::Init_DefineTransition("resolved", "ev_reassign", array("target_state"=>"assigned", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("resolved", "ev_close", array("target_state"=>"closed", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "close_date")))), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"closed",
			array(
				"attribute_inherit" => 'resolved',
				"attribute_list" => array(
					'private_log' => OPT_ATT_READONLY,
					'related_change_id' => OPT_ATT_READONLY,
					'close_date' => OPT_ATT_READONLY,
					'service_id' => OPT_ATT_READONLY,
					'servicesubcategory_id' => OPT_ATT_READONLY,
					'product' => OPT_ATT_READONLY,
				),
			)
		);


		MetaModel::Init_SetZListItems('details', array (
  0 => 'functionalcis_list',
  1 => 'contacts_list',
  2 => 'knownerrors_list',
  3 => 'workorders_list',
  4 => 'related_request_list',
  5 => 'related_incident_list',
  'col:col1' => 
  array (
    'fieldset:Ticket:baseinfo' => 
    array (
      0 => 'ref',
      1 => 'title',
      2 => 'org_id',
      3 => 'status',
      4 => 'priority',
      5 => 'pais_ticket',
      6 => 'sales_model',
      7 => 'id_instalador',
      8 => 'nombre_instalador',
      9 => 'san',
      10 => 'fso',
      11 => 'beam',
      12 => 'service_id',
      13 => 'servicesubcategory_id',
      14 => 'product',
    ),
    'fieldset:Ticket:moreinfo' => 
    array (
      0 => 'impact',
      1 => 'urgency',
      2 => 'description',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Ticket:date' => 
    array (
      0 => 'start_date',
      1 => 'last_update',
      2 => 'assignment_date',
      3 => 'resolution_date',
      4 => 'close_date',
    ),
    'fieldset:Ticket:contact' => 
    array (
      0 => 'caller_id',
      1 => 'team_id',
      2 => 'agent_id',
    ),
    'fieldset:Ticket:relation' => 
    array (
      0 => 'related_change_id',
    ),
  ),
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'ref',
  1 => 'title',
  2 => 'org_id',
  3 => 'start_date',
  4 => 'status',
  5 => 'operational_status',
  6 => 'service_id',
  7 => 'servicesubcategory_id',
  8 => 'product',
  9 => 'impact',
  10 => 'urgency',
  11 => 'priority',
  12 => 'caller_id',
  13 => 'team_id',
  14 => 'agent_id',
  15 => 'close_date',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'title',
  1 => 'org_id',
  2 => 'start_date',
  3 => 'status',
  4 => 'service_id',
  5 => 'priority',
));

	}


	/**
	 * To be deprecated: use SetCurrentDate() instead
	 * @return void
	 */
        public function SetAssignedDate($sStimulusCode)
        {
                $this->Set('assignment_date', time());
                return true;
        }

	/**
	 * To be deprecated: use SetCurrentDate() instead
	 * @return void
	 */
        public function SetResolveDate($sStimulusCode)
        {
                $this->Set('resolution_date', time());
                return true;
        }

	/**
	 * To be deprecated: use SetCurrentDate() instead
	 * @return void
	 */
        public function SetClosureDate($sStimulusCode)
        {
                $this->Set('close_date', time());
                return true;
        }

	/** Compute the priority of the ticket based on its impact and urgency
         * @return integer The priority of the ticket 1(high) .. 3(low)
         */
        public function ComputePriority()
        {
                // priority[impact][urgency]
                $aPriorities = array(
                        // single person
                        1 => array(
                                        1 => 1,
                                        2 => 1,
                                        3 => 2,
                                        4 => 4,
                        ),
                        // a group
                        2 => array(
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                        ),
                        // a departement!
                        3 => array(
                                        1 => 2,
                                        2 => 3,
                                        3 => 3,
                                        4 => 4,
                        ),
                );
                $iPriority = 1;
                if (isset($aPriorities[(int)$this->Get('impact')][(int)$this->Get('urgency')]))
                {
                        $iPriority = $aPriorities[(int)$this->Get('impact')][(int)$this->Get('urgency')];
                }
                return $iPriority;              
        }


	public function ComputeValues()
	{
		// Compute the priority of the ticket
		$this->Set('priority', $this->ComputePriority());
	}


	protected function OnInsert()
	{
		$this->Set('start_date', time());
		$this->Set('last_update', time());
	}


	protected function OnUpdate()
	{
		$this->Set('last_update', time());
	}

}
//
// Menus
//
class MenuCreation_itop_problem_mgmt extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['ProblemManagement'] = new MenuGroup('ProblemManagement', 42);
		$__comp_menus__['Problem:Overview'] = new DashboardMenuNode('Problem:Overview', dirname(__FILE__).'/problem_overview_dashboard_menu.xml', $__comp_menus__['ProblemManagement']->GetIndex(), 0);
		$__comp_menus__['NewProblem'] = new NewObjectMenuNode('NewProblem', 'Problem', $__comp_menus__['ProblemManagement']->GetIndex(), 1);
		$__comp_menus__['SearchProblems'] = new SearchMenuNode('SearchProblems', 'Problem', $__comp_menus__['ProblemManagement']->GetIndex(), 2);
		$__comp_menus__['Problem:Shortcuts'] = new TemplateMenuNode('Problem:Shortcuts', '', $__comp_menus__['ProblemManagement']->GetIndex(), 5);
		$__comp_menus__['Problem:MyProblems'] = new OQLMenuNode('Problem:MyProblems', "SELECT Problem WHERE agent_id = :current_contact_id AND status NOT IN (\"closed\", \"resolved\")", $__comp_menus__['Problem:Shortcuts']->GetIndex(), 1, false, null);
		$__comp_menus__['Problem:OpenProblems'] = new OQLMenuNode('Problem:OpenProblems', "SELECT Problem WHERE status IN (\"new\", \"assigned\", \"resolved\")", $__comp_menus__['Problem:Shortcuts']->GetIndex(), 2, true, null);
	}
} // class MenuCreation_itop_problem_mgmt

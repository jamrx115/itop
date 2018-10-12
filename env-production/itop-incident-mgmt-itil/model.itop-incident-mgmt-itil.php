						<?php
//
// File generated by ... on the 2018-10-12T16:28:43-0500
// Please do not edit manually
//

/**
 * Classes and menus for itop-incident-mgmt-itil (version 2.3.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
define('PORTAL_INCIDENT_PUBLIC_LOG', 'public_log');
define('PORTAL_INCIDENT_USER_COMMENT', 'user_comment');
define('PORTAL_INCIDENT_FORM_ATTRIBUTES', 'title,description,impact,urgency');
define('PORTAL_INCIDENT_TYPE', '');
define('PORTAL_INCIDENT_LIST_ZLIST', 'finalclass,title,start_date,status,servicesubcategory_id,priority,caller_id');
define('PORTAL_INCIDENT_CLOSED_ZLIST', 'title,start_date,close_date,servicesubcategory_id');
define('PORTAL_INCIDENT_DETAILS_ZLIST', '{"col:left":["ref","caller_id","servicesubcategory_id","title","description","solution"],"col:right":["status","priority","start_date","resolution_date","last_update","agent_id"]}');
define('PORTAL_INCIDENT_DISPLAY_QUERY', 'SELECT Incident WHERE org_id = :contact->org_id AND caller_id = :contact->id');
define('PORTAL_INCIDENT_DISPLAY_POWERUSER_QUERY', 'SELECT Incident WHERE org_id = :contact->org_id');


/**
 * Persistent classes for a CMDB
 *
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
class Incident extends Ticket
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable,requestmgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('ref'),
			'state_attcode' => 'status',
			'reconc_keys' => array('ref'),
			'db_table' => 'ticket_incident',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-incident-mgmt-itil/images/incident.png',
			'order_by_default' => array('ref' => false),
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeEnum("status", array("allowed_values"=>new ValueSetEnum("new,assigned,pending,escalated_tto,escalated_ttr,resolved,closed"), "display_style"=>'list', "sql"=>'status', "default_value"=>'new', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>true)));
		MetaModel::Init_AddAttribute(new AttributeEnum("impact", array("allowed_values"=>new ValueSetEnum("2"), "display_style"=>'list', "sql"=>'impact', "default_value"=>'2', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("priority", array("allowed_values"=>new ValueSetEnum("1,2"), "display_style"=>'list', "sql"=>'priority', "default_value"=>'2', "is_null_allowed"=>false, "depends_on"=>array('impact', 'urgency'), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("urgency", array("allowed_values"=>new ValueSetEnum("1,2"), "display_style"=>'list', "sql"=>'urgency', "default_value"=>'2', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("origin", array("allowed_values"=>new ValueSetEnum("mail,phone,portal,monitoring"), "display_style"=>'list', "sql"=>'origin', "default_value"=>'phone', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("service_id", array("targetclass"=>'Service', "allowed_values"=>new ValueSetObjects("SELECT s FROM Organization AS child JOIN Organization AS root ON child.parent_id BELOW root.id JOIN CustomerContract AS cc ON cc.org_id = root.id JOIN lnkCustomerContractToService AS l1 ON l1.customercontract_id = cc.id JOIN Service AS s ON l1.service_id = s.id WHERE child.id=:this->org_id"), "sql"=>'service_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('org_id'), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("service_name", array("allowed_values"=>null, "extkey_attcode"=>'service_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("servicesubcategory_id", array("targetclass"=>'ServiceSubcategory', "allowed_values"=>new ValueSetObjects("SELECT ServiceSubcategory WHERE service_id = :this->service_id AND request_type = 'incident' AND status != 'obsolete'"), "sql"=>'servicesubcategory_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('service_id'), "allow_target_creation"=>false, "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("servicesubcategory_name", array("allowed_values"=>null, "extkey_attcode"=>'servicesubcategory_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("escalation_flag", array("allowed_values"=>new ValueSetEnum("yes,no"), "display_style"=>'list', "sql"=>'escalation_flag', "default_value"=>'no', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("escalation_reason", array("allowed_values"=>null, "sql"=>'escalation_reason', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("assignment_date", array("allowed_values"=>null, "sql"=>'assignment_date', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("resolution_date", array("allowed_values"=>null, "sql"=>'resolution_date', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("last_pending_date", array("allowed_values"=>null, "sql"=>'last_pending_date', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeStopWatch("cumulatedpending", array("states"=>array("pending"), "goal_computing"=>'DefaultMetricComputer', "working_time_computing"=>'', "thresholds"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeStopWatch("tto", array("states"=>array("new", "escalated_tto"), "goal_computing"=>'ResponseTicketTTO', "working_time_computing"=>'ComputeWorkingHours', "thresholds"=>array(75 => array('percent' => 75,  'actions' => array()), 100 => array('percent' => 100,  'actions' => array())), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeStopWatch("ttr", array("states"=>array("escalated_tto", "assigned", "approved", "escalated_ttr"), "goal_computing"=>'ResponseTicketTTR', "working_time_computing"=>'ComputeWorkingHours', "thresholds"=>array(75 => array('percent' => 75,  'actions' => array()), 100 => array('percent' => 100,  'actions' => array())), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeSubItem("tto_escalation_deadline", array("target_attcode"=>'tto', "item_code"=>'100_deadline', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeSubItem("sla_tto_passed", array("target_attcode"=>'tto', "item_code"=>'100_passed', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeSubItem("sla_tto_over", array("target_attcode"=>'tto', "item_code"=>'100_overrun', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeSubItem("ttr_escalation_deadline", array("target_attcode"=>'ttr', "item_code"=>'100_deadline', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeSubItem("sla_ttr_passed", array("target_attcode"=>'ttr', "item_code"=>'100_passed', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeSubItem("sla_ttr_over", array("target_attcode"=>'ttr', "item_code"=>'100_overrun', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDuration("time_spent", array("allowed_values"=>null, "sql"=>'time_spent', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("resolution_code", array("allowed_values"=>new ValueSetEnum("assistance,other,software patch,training,hardware repair,system update,bug fixed,data modified,test drills,documented"), "display_style"=>'list', "sql"=>'resolution_code', "default_value"=>'assistance', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("solution", array("allowed_values"=>null, "sql"=>'solution', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("pending_reason", array("allowed_values"=>null, "sql"=>'pending_reason', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("parent_incident_id", array("targetclass"=>'Incident', "allowed_values"=>new ValueSetObjects("SELECT Incident WHERE id != :this->id AND status NOT IN ('resolved','closed')"), "sql"=>'parent_incident_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("parent_incident_ref", array("allowed_values"=>null, "extkey_attcode"=>'parent_incident_id', "target_attcode"=>'ref', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("parent_problem_id", array("targetclass"=>'Problem', "allowed_values"=>null, "sql"=>'parent_problem_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("parent_problem_ref", array("allowed_values"=>null, "extkey_attcode"=>'parent_problem_id', "target_attcode"=>'ref', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("parent_change_id", array("targetclass"=>'Change', "allowed_values"=>new ValueSetObjects("SELECT Change WHERE status != \"closed\""), "sql"=>'parent_change_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("parent_change_ref", array("allowed_values"=>null, "extkey_attcode"=>'parent_change_id', "target_attcode"=>'ref', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("related_request_list", array("linked_class"=>'UserRequest', "ext_key_to_me"=>'parent_incident_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDREMOVE, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("child_incidents_list", array("linked_class"=>'Incident', "ext_key_to_me"=>'parent_incident_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDREMOVE, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeCaseLog("public_log", array("allowed_values"=>null, "sql"=>'public_log', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("user_satisfaction", array("allowed_values"=>new ValueSetEnum("1,2,3,4,5"), "display_style"=>'list', "sql"=>'user_satisfaction', "default_value"=>'1', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("user_comment", array("allowed_values"=>null, "sql"=>'user_commment', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("external_id", array("allowed_values"=>null, "sql"=>'external_id', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));

		// Lifecycle (status attribute: status)
		//
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_assign", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_reassign", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_pending", array()));
		MetaModel::Init_DefineStimulus(new StimulusInternal("ev_timeout", array()));
		MetaModel::Init_DefineStimulus(new StimulusInternal("ev_autoresolve", array()));
		MetaModel::Init_DefineStimulus(new StimulusInternal("ev_autoclose", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_resolve", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_close", array()));
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_reopen", array()));
		MetaModel::Init_DefineState(
			"new",
			array(
				"attribute_inherit" => '',
				"attribute_list" => array(
					'ref' => OPT_ATT_READONLY,
					'org_id' => OPT_ATT_MANDATORY,
					'caller_id' => OPT_ATT_MANDATORY,
					'team_id' => OPT_ATT_HIDDEN,
					'agent_id' => OPT_ATT_HIDDEN,
					'priority' => OPT_ATT_READONLY,
					'start_date' => OPT_ATT_READONLY,
					'last_update' => OPT_ATT_READONLY,
					'close_date' => OPT_ATT_HIDDEN,
					'escalation_flag' => OPT_ATT_HIDDEN,
					'escalation_reason' => OPT_ATT_HIDDEN,
					'assignment_date' => OPT_ATT_HIDDEN,
					'resolution_date' => OPT_ATT_HIDDEN,
					'last_pending_date' => OPT_ATT_HIDDEN,
					'time_spent' => OPT_ATT_HIDDEN,
					'resolution_code' => OPT_ATT_HIDDEN,
					'solution' => OPT_ATT_HIDDEN,
					'pending_reason' => OPT_ATT_HIDDEN,
					'user_satisfaction' => OPT_ATT_HIDDEN,
					'user_comment' => OPT_ATT_HIDDEN,
					'tto_escalation_deadline' => OPT_ATT_READONLY,
					'sla_tto_passed' => OPT_ATT_HIDDEN,
					'sla_tto_over' => OPT_ATT_HIDDEN,
					'sla_ttr_passed' => OPT_ATT_HIDDEN,
					'ttr_escalation_deadline' => OPT_ATT_HIDDEN,
					'sla_ttr_over' => OPT_ATT_HIDDEN,
				),
			)
		);
		MetaModel::Init_DefineTransition("new", "ev_assign", array("target_state"=>"assigned", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "assignment_date")))), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("new", "ev_timeout", array("target_state"=>"escalated_tto", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("new", "ev_autoresolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date"))), array('verb' => 'SetElapsedTime', 'params' => array(array('type' => 'attcode', 'value' => "time_spent"), array('type' => 'attcode', 'value' => "start_date"), array('type' => 'string', 'value' => "DefaultWorkingTimeComputer"))), array('verb' => 'ResolveChildTickets', 'params' => array())), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"escalated_tto",
			array(
				"attribute_inherit" => 'new',
				'highlight' => array('code' => 'critical'),
				"attribute_list" => array(
					'team_id' => OPT_ATT_NORMAL,
				),
			)
		);
		MetaModel::Init_DefineTransition("escalated_tto", "ev_assign", array("target_state"=>"assigned", "actions"=>array(array('verb' => 'SetAssignedDate', 'params' => array(array('type' => 'reference', 'value' => 'sStimulusCode')))), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"assigned",
			array(
				"attribute_inherit" => 'new',
				"attribute_list" => array(
					'team_id' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
					'agent_id' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
					'assignment_date' => OPT_ATT_READONLY,
					'tto_escalation_deadline' => OPT_ATT_HIDDEN,
					'sla_tto_passed' => OPT_ATT_READONLY,
					'sla_tto_over' => OPT_ATT_READONLY,
					'ttr_escalation_deadline' => OPT_ATT_READONLY,
					'caller_id' => OPT_ATT_NORMAL,
					'escalation_flag' => OPT_ATT_NORMAL,
					'escalation_reason' => OPT_ATT_NORMAL,
				),
			)
		);
		MetaModel::Init_DefineTransition("assigned", "ev_pending", array("target_state"=>"pending", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "last_pending_date")))), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("assigned", "ev_resolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date"))), array('verb' => 'SetElapsedTime', 'params' => array(array('type' => 'attcode', 'value' => "time_spent"), array('type' => 'attcode', 'value' => "start_date"), array('type' => 'string', 'value' => "DefaultWorkingTimeComputer"))), array('verb' => 'ResolveChildTickets', 'params' => array())), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("assigned", "ev_reassign", array("target_state"=>"assigned", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("assigned", "ev_timeout", array("target_state"=>"escalated_ttr", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("assigned", "ev_autoresolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date"))), array('verb' => 'SetElapsedTime', 'params' => array(array('type' => 'attcode', 'value' => "time_spent"), array('type' => 'attcode', 'value' => "start_date"), array('type' => 'string', 'value' => "DefaultWorkingTimeComputer"))), array('verb' => 'ResolveChildTickets', 'params' => array())), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"escalated_ttr",
			array(
				"attribute_inherit" => 'assigned',
				'highlight' => array('code' => 'critical'),
				"attribute_list" => array(
				),
			)
		);
		MetaModel::Init_DefineTransition("escalated_ttr", "ev_pending", array("target_state"=>"pending", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "last_pending_date")))), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("escalated_ttr", "ev_resolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date"))), array('verb' => 'SetElapsedTime', 'params' => array(array('type' => 'attcode', 'value' => "time_spent"), array('type' => 'attcode', 'value' => "start_date"), array('type' => 'string', 'value' => "DefaultWorkingTimeComputer"))), array('verb' => 'ResolveChildTickets', 'params' => array())), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("escalated_ttr", "ev_reassign", array("target_state"=>"assigned", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("escalated_ttr", "ev_autoresolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date"))), array('verb' => 'SetElapsedTime', 'params' => array(array('type' => 'attcode', 'value' => "time_spent"), array('type' => 'attcode', 'value' => "start_date"), array('type' => 'string', 'value' => "DefaultWorkingTimeComputer"))), array('verb' => 'ResolveChildTickets', 'params' => array())), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"pending",
			array(
				"attribute_inherit" => 'assigned',
				"attribute_list" => array(
					'last_pending_date' => OPT_ATT_READONLY,
					'ttr_escalation_deadline' => OPT_ATT_HIDDEN,
					'sla_tto_passed' => OPT_ATT_HIDDEN,
					'sla_tto_over' => OPT_ATT_HIDDEN,
					'pending_reason' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
				),
			)
		);
		MetaModel::Init_DefineTransition("pending", "ev_assign", array("target_state"=>"assigned", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("pending", "ev_autoresolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date"))), array('verb' => 'SetElapsedTime', 'params' => array(array('type' => 'attcode', 'value' => "time_spent"), array('type' => 'attcode', 'value' => "start_date"), array('type' => 'string', 'value' => "DefaultWorkingTimeComputer"))), array('verb' => 'ResolveChildTickets', 'params' => array())), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"resolved",
			array(
				"attribute_inherit" => 'assigned',
				'highlight' => array('code' => 'closed'),
				"attribute_list" => array(
					'caller_id' => OPT_ATT_READONLY,
					'origin' => OPT_ATT_READONLY,
					'private_log' => OPT_ATT_NORMAL,
					'impact' => OPT_ATT_READONLY,
					'urgency' => OPT_ATT_READONLY,
					'service_id' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
					'servicesubcategory_id' => OPT_ATT_MUSTPROMPT,
					'escalation_flag' => OPT_ATT_READONLY,
					'escalation_reason' => OPT_ATT_READONLY,
					'parent_incident_id' => OPT_ATT_READONLY,
					'parent_change_id' => OPT_ATT_READONLY,
					'parent_problem_id' => OPT_ATT_READONLY,
					'title' => OPT_ATT_READONLY,
					'description' => OPT_ATT_READONLY,
					'org_id' => OPT_ATT_READONLY,
					'team_id' => OPT_ATT_READONLY,
					'agent_id' => OPT_ATT_READONLY,
					'resolution_date' => OPT_ATT_READONLY,
					'time_spent' => OPT_ATT_READONLY,
					'resolution_code' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
					'solution' => OPT_ATT_MANDATORY | OPT_ATT_MUSTPROMPT,
					'pending_reason' => OPT_ATT_READONLY,
					'sla_ttr_passed' => OPT_ATT_READONLY,
					'ttr_escalation_deadline' => OPT_ATT_HIDDEN,
					'sla_ttr_over' => OPT_ATT_READONLY,
				),
			)
		);
		MetaModel::Init_DefineTransition("resolved", "ev_close", array("target_state"=>"closed", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "close_date")))), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("resolved", "ev_reopen", array("target_state"=>"assigned", "actions"=>array(), "user_restriction"=>null));
		MetaModel::Init_DefineTransition("resolved", "ev_autoresolve", array("target_state"=>"resolved", "actions"=>array(array('verb' => 'SetCurrentDate', 'params' => array(array('type' => 'attcode', 'value' => "resolution_date"))), array('verb' => 'SetElapsedTime', 'params' => array(array('type' => 'attcode', 'value' => "time_spent"), array('type' => 'attcode', 'value' => "start_date"), array('type' => 'string', 'value' => "DefaultWorkingTimeComputer"))), array('verb' => 'ResolveChildTickets', 'params' => array())), "user_restriction"=>null));
		MetaModel::Init_DefineState(
			"closed",
			array(
				"attribute_inherit" => 'resolved',
				'highlight' => array('code' => 'closed'),
				"attribute_list" => array(
					'public_log' => OPT_ATT_READONLY,
					'functionalcis_list' => OPT_ATT_READONLY,
					'contacts_list' => OPT_ATT_READONLY,
					'private_log' => OPT_ATT_READONLY,
					'service_id' => OPT_ATT_READONLY,
					'servicesubcategory_id' => OPT_ATT_READONLY,
					'close_date' => OPT_ATT_READONLY,
					'resolution_code' => OPT_ATT_READONLY,
					'solution' => OPT_ATT_READONLY,
					'pending_reason' => OPT_ATT_READONLY,
					'user_satisfaction' => OPT_ATT_MUSTPROMPT,
					'user_comment' => OPT_ATT_MUSTPROMPT,
				),
			)
		);

		// Higlight Scale
		MetaModel::Init_DefineHighlightScale( array(
		    'warning' => array('rank' => 1, 'color' => HILIGHT_CLASS_WARNING, 'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-incident-mgmt-itil/images/incident-deadline.png'),
		    'critical' => array('rank' => 2, 'color' => HILIGHT_CLASS_CRITICAL, 'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-incident-mgmt-itil/images/incident-escalated.png'),
		    'closed' => array('rank' => 3, 'color' => HILIGHT_CLASS_NONE, 'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-incident-mgmt-itil/images/incident-closed.png'),
		));

		MetaModel::Init_SetZListItems('details', array (
  0 => 'functionalcis_list',
  1 => 'contacts_list',
  2 => 'child_incidents_list',
  3 => 'related_request_list',
  4 => 'workorders_list',
  'col:col1' => 
  array (
    'fieldset:Ticket:baseinfo' => 
    array (
      0 => 'org_id',
      1 => 'caller_id',
      2 => 'status',
      3 => 'origin',
      4 => 'title',
      5 => 'description',
      6 => 'pais_ticket',
      7 => 'id_instalador',
      8 => 'nombre_instalador',
      9 => 'san',
      10 => 'external_id',
    ),
    'fieldset:Ticket:moreinfo' => 
    array (
      0 => 'service_id',
      1 => 'servicesubcategory_id',
      2 => 'escalation_flag',
      3 => 'escalation_reason',
      4 => 'pending_reason',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Ticket:Type' => 
    array (
      0 => 'impact',
      1 => 'urgency',
      2 => 'priority',
    ),
    'fieldset:Ticket:contact' => 
    array (
      0 => 'team_id',
      1 => 'agent_id',
    ),
    'fieldset:Ticket:date' => 
    array (
      0 => 'start_date',
      1 => 'last_update',
      2 => 'assignment_date',
      3 => 'tto_escalation_deadline',
      4 => 'ttr_escalation_deadline',
      5 => 'last_pending_date',
      6 => 'resolution_date',
      7 => 'close_date',
    ),
  ),
  'col:col3' => 
  array (
    'fieldset:Ticket:relation' => 
    array (
      0 => 'parent_incident_id',
      1 => 'parent_problem_id',
      2 => 'parent_change_id',
    ),
    'fieldset:Ticket:resolution' => 
    array (
      0 => 'resolution_code',
      1 => 'solution',
      2 => 'time_spent',
      3 => 'user_satisfaction',
      4 => 'user_comment',
    ),
    'fieldset:Ticket:SLA' => 
    array (
      0 => 'sla_tto_passed',
      1 => 'sla_tto_over',
      2 => 'sla_ttr_passed',
      3 => 'sla_ttr_over',
    ),
  ),
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'ref',
  1 => 'org_id',
  2 => 'title',
  3 => 'description',
  4 => 'id_instalador',
  5 => 'pais_ticket',
  6 => 'nombre_instalador',
  7 => 'san',
  8 => 'start_date',
  9 => 'resolution_date',
  10 => 'close_date',
  11 => 'status',
  12 => 'operational_status',
  13 => 'caller_id',
  14 => 'origin',
  15 => 'impact',
  16 => 'urgency',
  17 => 'priority',
  18 => 'service_id',
  19 => 'servicesubcategory_id',
  20 => 'team_id',
  21 => 'agent_id',
  22 => 'escalation_flag',
  23 => 'resolution_code',
  24 => 'user_satisfaction',
  25 => 'sla_tto_passed',
  26 => 'sla_ttr_passed',
  27 => 'external_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'title',
  1 => 'org_id',
  2 => 'caller_id',
  3 => 'start_date',
  4 => 'status',
  5 => 'agent_id',
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
	public function SetLastPendingDate($sStimulusCode)
	{
		$this->Set('last_pending_date', time());
		return true;
	}

	/**
	 * To be deprecated: use SetCurrentDate() and SetElapsedTime() instead
	 * @return void
	 */
	public function SetResolveDate($sStimulusCode)
	{
		$this->Set('resolution_date', time());
                $iTimeSpent = time() - AttributeDateTime::GetAsUnixSeconds($this->Get('start_date'));
		$this->Set('time_spent', $iTimeSpent);
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


public function DoCheckToWrite()
  {
    parent::DoCheckToWrite();
    if (!$this->IsNew() && ($this->Get('parent_incident_id') == $this->GetKey()))
    {
      $this->m_aCheckIssues[] = Dict::Format('Class:Incident/Error:CannotAssignParentIncidentIdToSelf');
    }
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

		return parent::ComputeValues();
	}


	function DisplayBareRelations(WebPage $oPage, $bEditMode = false)
	{
		parent::DisplayBareRelations($oPage, $bEditMode);

		if (!$bEditMode)
		{
			if (MetaModel::IsValidClass('KnownError'))
			{
				//Search for known errors
				$oPage->SetCurrentTab(Dict::S('Class:UserRequest:KnownErrorList'));
				$iTicketID = $this->GetKey();;
				$oKnownErrorSet = new CMDBObjectSet(DBObjectSearch::FromOQL("SELECT KnownError AS ke JOIN lnkErrorToFunctionalCI AS l1 ON l1.error_id=ke.id JOIN FunctionalCI AS ci ON l1.functionalci_id=ci.id JOIN lnkFunctionalCIToTicket AS l2 ON l2.functionalci_id=ci.id WHERE l2.ticket_id=$iTicketID"));
				$iNumberKE=$oKnownErrorSet->count();
				if ($iNumberKE > 0)
				{
					$oPage->SetCurrentTab(Dict::S('Class:UserRequest:KnownErrorList')." ($iNumberKE)");
				}
				else
				{
					$oPage->SetCurrentTab(Dict::S('Class:UserRequest:KnownErrorList'));	
				}			
				self::DisplaySet($oPage, $oKnownErrorSet, array ('menu' => false));
			}
		}
	}

	/**
	 * To be deprecated: use ResolveChildTickets() instead
	 */
	public function resolveChilds($sStimulusCode)
	{
        if (MetaModel::IsValidClass('UserRequest'))
        {
    		$sOQL = "SELECT UserRequest WHERE parent_incident_id=:ticket";
    		$oChildRequestSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL),
    						array(),
    						array(
    							'ticket' => $this->GetKey(),
    							)
    						);
    		//automatically resolve child requests
    		while($oRequest = $oChildRequestSet->Fetch())
    		{
    			if ( $oRequest->Get('status') != 'resolved')
    			{
    				$oRequest->set('servicesubcategory_id',$this->Get('servicesubcategory_id'));
    				$oRequest->set('service_id',$this->Get('service_id'));		
    				$oRequest->set('team_id',$this->Get('team_id'));
    				$oRequest->set('agent_id',$this->Get('agent_id'));	
    				$oRequest->set('resolution_code',$this->Get('resolution_code'));
    				$oRequest->set('solution','Automatically resolved by incident:[[Incident:'.$this->Get('ref').']]');
    				$oRequest->ApplyStimulus('ev_autoresolve');
    				$oRequest->DBUpdate();
    			}
    		}
        }

		//automatically resolve child incidents
		$sOQL = "SELECT Incident WHERE parent_incident_id=:ticket";
		$oChildIncidentSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL),
						array(),
						array(
							'ticket' => $this->GetKey(),
							)
						);
		while($oIncident = $oChildIncidentSet->Fetch())
		{
			if ( $oIncident->Get('status') != 'resolved')
			{
				$oIncident->set('servicesubcategory_id',$this->Get('servicesubcategory_id'));
				$oIncident->set('service_id',$this->Get('service_id'));		
				$oIncident->set('team_id',$this->Get('team_id'));
				$oIncident->set('agent_id',$this->Get('agent_id'));	
				$oIncident->set('resolution_code',$this->Get('resolution_code'));
				$oIncident->set('solution','Automatically resolved by incident:[[Incident:'.$this->Get('ref').']]');
				$oIncident->ApplyStimulus('ev_autoresolve');
				$oIncident->DBUpdate();
			}
		}
		return true;

	}

	/**
	 * Cascade the resolution to child User Request and Incidents
	 * @return true (returning false would stop the ongoing transition)
	 */
	public function ResolveChildTickets()
	{
        static $aRequests = array(); // prevent infinite recursion
        static $Incidents = array(); // prevent infinite recursion
  
		if (MetaModel::IsValidClass('UserRequest'))
		{    		
    		// Automatically resolve child requests
    		$sOQL = "SELECT UserRequest WHERE parent_incident_id = :ticket AND status != 'resolved'";
    		$oChildRequestSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL), array(), array('ticket' => $this->GetKey()));
    		while($oRequest = $oChildRequestSet->Fetch())
    		{
    			if (!array_key_exists($oRequest->GetKey(), $aRequests))
    			{
    				$aRequests[$oRequest->GetKey()] = true;
    				$oRequest->ResolveFrom($this);
    			}
    		}
		}

		// Automatically resolve child incidents
		$sOQL = "SELECT Incident WHERE parent_incident_id = :ticket AND status != 'resolved'";
		$oChildIncidentSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL), array(), array('ticket' => $this->GetKey()));
		while($oIncident = $oChildIncidentSet->Fetch())
		{
            if (!array_key_exists($oIncident->GetKey(), $Incidents))
            {
                $Incidents[$oIncident->GetKey()] = true;
			    $oIncident->ResolveFrom($this);
            }
		}
		return true;
	}

	/**
	 * Resolve the ticket from another resolved ticket
	 * @return void
	 */
	public function ResolveFrom($oParentTicket)
	{
		if ($this->Get('status') != 'resolved')
		{
			$this->Set('servicesubcategory_id', $oParentTicket->Get('servicesubcategory_id'));
			$this->Set('service_id', $oParentTicket->Get('service_id'));		
			$this->Set('team_id', $oParentTicket->Get('team_id'));
			$this->Set('agent_id', $oParentTicket->Get('agent_id'));	
			$this->Set('resolution_code', $oParentTicket->Get('resolution_code'));
			$sParent = '[['.get_class($oParentTicket).':'.$oParentTicket->Get('ref').']]';
			$this->Set('solution', Dict::Format('Tickets:ResolvedFrom', $sParent, MetaModel::GetName(get_class($oParentTicket))));
			$this->ApplyStimulus('ev_autoresolve');
			$this->DBUpdate();
		}
	}


	public function UpdateChildRequestLog()
	{
        if (!MetaModel::IsValidClass('UserRequest')) return true; // Do nothing
  
		$oLog = $this->Get('public_log');
		$sLogPublic = $oLog->GetModifiedEntry('html');
		if ($sLogPublic != '')
		{
			$sOQL = "SELECT UserRequest WHERE parent_incident_id=:ticket";
			$oChildRequestSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL),
							array(),
							array(
								'ticket' => $this->GetKey(),
								)
							);
			while($oRequest = $oChildRequestSet->Fetch())
			{
				$oRequest->set('public_log',$sLogPublic);
				$oRequest->DBUpdate();
			}

		}
		$oLog = $this->Get('private_log');
		$sLogPrivate = $oLog->GetModifiedEntry('html');
		if ($sLogPrivate != '')
		{
			$sOQL = "SELECT UserRequest WHERE parent_incident_id=:ticket";
			$oChildRequestSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL),
							array(),
							array(
								'ticket' => $this->GetKey(),
								)
							);
			while($oRequest = $oChildRequestSet->Fetch())
			{
				$oRequest->set('private_log',$sLogPrivate);
				$oRequest->DBUpdate();
			}
		}
		return true;

	}


	public function UpdateChildIncidentLog()
	{
		$oLog = $this->Get('public_log');
		$sLogPublic = $oLog->GetModifiedEntry('html');
		if ($sLogPublic != '')
		{
			$sOQL = "SELECT Incident WHERE parent_incident_id=:ticket";
			$oChildIncidentSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL),
							array(),
							array(
								'ticket' => $this->GetKey(),
								)
							);
			while($oIncident = $oChildIncidentSet->Fetch())
			{
				$oIncident->set('public_log',$sLogPublic);
				$oIncident->DBUpdate();
			}

		}
		$oLog = $this->Get('private_log');
		$sLogPrivate = $oLog->GetModifiedEntry('html');
		if ($sLogPrivate != '')
		{
			$sOQL = "SELECT Incident WHERE parent_incident_id=:ticket";
			$oChildIncidentSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL),
							array(),
							array(
								'ticket' => $this->GetKey(),
								)
							);
			while($oIncident = $oChildIncidentSet->Fetch())
			{
				$oIncident->set('private_log',$sLogPrivate);
				$oIncident->DBUpdate();
			}
		}
		return true;

	}


	public function ComputeImpactedItems()
	{
        // This method is kept for backward compatibility
        // in case a delta redefines it, but you may call
        // UpdateImpactedItems directly
		$this->UpdateImpactedItems();
	}


	protected function OnInsert()

	{
        parent::OnInsert();    
		$this->ComputeImpactedItems();
		$this->Set('last_update', time());
		$this->Set('start_date', time());
	}


	protected function OnUpdate()
	{
        parent::OnUpdate(); 
        $aChanges = $this->ListChanges();
        if (array_key_exists('functionalcis_list', $aChanges))
        {
            $this->UpdateImpactedItems();
        }
		$this->Set('last_update', time());
		$this->UpdateChildRequestLog();
		$this->UpdateChildIncidentLog();
	}

}
//
// Menus
//
class MenuCreation_itop_incident_mgmt_itil extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['IncidentManagement'] = new MenuGroup('IncidentManagement', 35);
		$__comp_menus__['Incident:Overview'] = new DashboardMenuNode('Incident:Overview', dirname(__FILE__).'/incident_overview_dashboard_menu.xml', $__comp_menus__['IncidentManagement']->GetIndex(), 0);
		$__comp_menus__['NewIncident'] = new NewObjectMenuNode('NewIncident', 'Incident', $__comp_menus__['IncidentManagement']->GetIndex(), 1);
		$__comp_menus__['SearchIncidents'] = new SearchMenuNode('SearchIncidents', 'Incident', $__comp_menus__['IncidentManagement']->GetIndex(), 2);
		$__comp_menus__['Incident:Shortcuts'] = new TemplateMenuNode('Incident:Shortcuts', '', $__comp_menus__['IncidentManagement']->GetIndex(), 3);
		$__comp_menus__['Incident:MyIncidents'] = new OQLMenuNode('Incident:MyIncidents', "SELECT Incident WHERE agent_id = :current_contact_id AND status NOT IN (\"closed\",\"resolved\")", $__comp_menus__['Incident:Shortcuts']->GetIndex(), 0, false, null);
		$__comp_menus__['Incident:MyIncidents']->SetParameters(array('auto_reload' => "fast"));
		$__comp_menus__['Incident:EscalatedIncidents'] = new OQLMenuNode('Incident:EscalatedIncidents', "SELECT Incident WHERE status IN (\"escalated_tto\", \"escalated_ttr\") OR escalation_flag=\"yes\"", $__comp_menus__['Incident:Shortcuts']->GetIndex(), 1, false, null);
		$__comp_menus__['Incident:EscalatedIncidents']->SetParameters(array('auto_reload' => "fast"));
		$__comp_menus__['Incident:OpenIncidents'] = new OQLMenuNode('Incident:OpenIncidents', "SELECT Incident WHERE status NOT IN (\"closed\")", $__comp_menus__['Incident:Shortcuts']->GetIndex(), 2, true, null);
		$__comp_menus__['Incident:OpenIncidents']->SetParameters(array('auto_reload' => "fast"));
	}
} // class MenuCreation_itop_incident_mgmt_itil

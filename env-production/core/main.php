<?php
/**
 * This file was automatically generated by the compiler on 2019-12-26 13:54:04 -- DO NOT EDIT
 */

/**
 * Portal(s) definition(s) extracted from the XML definition at compile time
 */
class PortalDispatcherData
{
	protected static $aData = array (
  'itop-portal' => 
  array (
    'rank' => 1,
    'handler' => 'PortalDispatcher',
    'url' => 'pages/exec.php?exec_module=itop-portal&exec_page=index.php',
    'allow' => 
    array (
    ),
    'deny' => 
    array (
    ),
  ),
  'backoffice' => 
  array (
    'rank' => 2,
    'handler' => 'PortalDispatcher',
    'url' => 'pages/UI.php',
    'allow' => 
    array (
    ),
    'deny' => 
    array (
      0 => 'Portal user',
    ),
  ),
);

	public static function GetData($sPortalId = null)
	{
		if ($sPortalId === null) return self::$aData;
		if (!array_key_exists($sPortalId, self::$aData)) return array();
		return self::$aData[$sPortalId];
	}
}

/**
 * Modules parameters extracted from the XML definition at compile time
 */
class ModulesXMLParameters
{
	protected static $aData = array (
  'itop-portal' => 
  array (
    'lazy_loading_threshold' => '500',
  ),
  'itop-tickets' => 
  array (
    'relation_context' => 
    array (
      'UserRequest' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\', \'rejected\')) AND (L.impact_code != \'not_impacted\') AND (C.id != :this->id)',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              1 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\')) AND (L.impact_code != \'not_impacted\') AND (C.id != :this->id) AND (DATE_ADD(C.end_date, INTERVAL 3 DAY) < NOW())',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
              2 => 
              array (
                'oql' => 'SELECT FCI, I FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Incident AS I ON L.ticket_id = I.id WHERE (I.status NOT IN (\'closed\', \'resolved\')) AND (L.impact_code != \'not_impacted\') AND (I.id != :this->id)',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
            ),
          ),
        ),
      ),
      'Incident' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\', \'rejected\')) AND (L.impact_code != \'not_impacted\') AND (C.id != :this->id)',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              1 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\')) AND (L.impact_code != \'not_impacted\') AND (C.id != :this->id) AND (DATE_ADD(C.end_date, INTERVAL 3 DAY) < NOW())',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
              2 => 
              array (
                'oql' => 'SELECT FCI, I FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Incident AS I ON L.ticket_id = I.id WHERE (I.status NOT IN (\'closed\', \'resolved\')) AND (L.impact_code != \'not_impacted\') AND (I.id != :this->id)',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
            ),
          ),
        ),
      ),
      'Change' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\', \'rejected\')) AND (L.impact_code != \'not_impacted\') AND (C.id != :this->id)',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              1 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\')) AND (L.impact_code != \'not_impacted\') AND (C.id != :this->id) AND (DATE_ADD(C.end_date, INTERVAL 3 DAY) < NOW())',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
              2 => 
              array (
                'oql' => 'SELECT FCI, I FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Incident AS I ON L.ticket_id = I.id WHERE (I.status NOT IN (\'closed\', \'resolved\')) AND (L.impact_code != \'not_impacted\') AND (I.id != :this->id)',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'itop-config-mgmt' => 
  array (
    'relation_context' => 
    array (
      'FunctionalCI' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\', \'rejected\')) AND (L.impact_code != \'not_impacted\')',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              1 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status IN (\'closed\')) AND (L.impact_code != \'not_impacted\') AND (DATE_ADD(C.end_date, INTERVAL 3 DAY) < NOW())',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
              2 => 
              array (
                'oql' => 'SELECT FCI, I FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Incident AS I ON L.ticket_id = I.id WHERE (I.status NOT IN (\'closed\', \'resolved\')) AND (L.impact_code != \'not_impacted\')',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
            ),
          ),
          'up' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status NOT IN (\'closed\', \'rejected\')) AND (L.impact_code != \'not_impacted\')',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              1 => 
              array (
                'oql' => 'SELECT FCI, C FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Change AS C ON L.ticket_id = C.id WHERE (C.outage = \'yes\') AND (C.status IN (\'closed\')) AND (L.impact_code != \'not_impacted\') AND (DATE_ADD(C.end_date, INTERVAL 3 DAY) < NOW())',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
              2 => 
              array (
                'oql' => 'SELECT FCI, I FROM FunctionalCI AS FCI JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id JOIN Incident AS I ON L.ticket_id = I.id WHERE (I.status NOT IN (\'closed\', \'resolved\')) AND (L.impact_code != \'not_impacted\')',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

	public static function GetData($sModuleId = null)
	{
		if ($sModuleId === null) return self::$aData;
		if (!array_key_exists($sModuleId, self::$aData)) return array();
		return self::$aData[$sModuleId];
	}
}

/**
 * Relations
 */
MetaModel::RegisterRelation('impacts');

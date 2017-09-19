<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkTicketToDoc' => 'Ticket/Documento',
	'Class:lnkTicketToDoc+' => '',
	'Class:lnkTicketToDoc/Attribute:ticket_id' => 'Ticket',
	'Class:lnkTicketToDoc/Attribute:ticket_id+' => '',
	'Class:lnkTicketToDoc/Attribute:document_id' => 'Documento',
	'Class:lnkTicketToDoc/Attribute:document_id+' => '',
	'Class:lnkTicketToContact' => 'Ticket/Contatto',
	'Class:lnkTicketToContact+' => '',
	'Class:lnkTicketToContact/Attribute:ticket_id' => 'Ticket',
	'Class:lnkTicketToContact/Attribute:ticket_id+' => '',
	'Class:lnkTicketToContact/Attribute:contact_id' => 'Contatto',
	'Class:lnkTicketToContact/Attribute:contact_id+' => '',
	'Class:lnkTicketToContact/Attribute:role' => 'Ruolo',
	'Class:lnkTicketToContact/Attribute:role+' => '',
	'Class:lnkTicketToCI' => 'Ticket/CI',
	'Class:lnkTicketToCI+' => '',
	'Class:lnkTicketToCI/Attribute:ticket_id' => 'Ticket',
	'Class:lnkTicketToCI/Attribute:ticket_id+' => '',
	'Class:lnkTicketToCI/Attribute:ci_id' => 'CI',
	'Class:lnkTicketToCI/Attribute:ci_id+' => '',
	'Class:lnkTicketToCI/Attribute:impact' => 'Impatto',
	'Class:lnkTicketToCI/Attribute:impact+' => '',
	'Class:Ticket' => 'Ticket',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => 'Ref',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:title' => 'Titolo',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => 'Descrizione',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:ticket_log' => 'Log',
	'Class:Ticket/Attribute:ticket_log+' => '',
	'Class:Ticket/Attribute:start_date' => 'Inzio',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:document_list' => 'Documenti',
	'Class:Ticket/Attribute:document_list+' => 'Documenti relativi al ticket',
	'Class:Ticket/Attribute:ci_list' => 'CIs',
	'Class:Ticket/Attribute:ci_list+' => 'CIs coivolti dall\'incidente',
	'Class:Ticket/Attribute:contact_list' => 'Contatti',
	'Class:Ticket/Attribute:contact_list+' => 'Team e persone coinvolte',
	'Class:Ticket/Attribute:incident_list' => 'Incidenti Correlati',
	'Class:Ticket/Attribute:incident_list+' => '',
	'Class:Ticket/Attribute:finalclass' => 'Tipo',
	'Class:Ticket/Attribute:finalclass+' => '',
	'Ticket:baseinfo' => 'Infomazioni Generali',
	'Ticket:date' => 'Date',
	'Ticket:contact' => 'Contatti',
	'Ticket:moreinfo' => 'Più informazioni',
	'Ticket:relation' => 'Relazioni',
	'Ticket:log' => 'Communicazioni',
	'Class:lnkTicketToDoc/Attribute:ticket_ref' => 'Ticket #',
	'Class:lnkTicketToDoc/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToDoc/Attribute:document_name' => 'Documento',
	'Class:lnkTicketToDoc/Attribute:document_name+' => '',
	'Class:lnkTicketToContact/Attribute:ticket_ref' => 'Ticket #',
	'Class:lnkTicketToContact/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToContact/Attribute:contact_name' => 'Contatto',
	'Class:lnkTicketToContact/Attribute:contact_name+' => '',
	'Class:lnkTicketToContact/Attribute:contact_email' => 'Email',
	'Class:lnkTicketToContact/Attribute:contact_email+' => '',
	'Class:lnkTicketToCI/Attribute:ticket_ref' => 'Ticket #',
	'Class:lnkTicketToCI/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToCI/Attribute:ci_name' => 'CI',
	'Class:lnkTicketToCI/Attribute:ci_name+' => '',
	'Class:lnkTicketToCI/Attribute:ci_status' => 'CI stato',
	'Class:lnkTicketToCI/Attribute:ci_status+' => '',
	'Class:ResponseTicket' => 'Ticket di risposta',
	'Class:ResponseTicket+' => '',
	'Class:ResponseTicket/Attribute:status' => 'Stato',
	'Class:ResponseTicket/Attribute:status+' => '',
	'Class:ResponseTicket/Attribute:status/Value:new' => 'Nuovo',
	'Class:ResponseTicket/Attribute:status/Value:new+' => 'Recentemente aperto',
	'Class:ResponseTicket/Attribute:status/Value:escalated_tto' => 'Escalation/TTO',
	'Class:ResponseTicket/Attribute:status/Value:escalated_tto+' => '',
	'Class:ResponseTicket/Attribute:status/Value:assigned' => 'Assegnato',
	'Class:ResponseTicket/Attribute:status/Value:assigned+' => '',
	'Class:ResponseTicket/Attribute:status/Value:escalated_ttr' => 'Escalation/TTR',
	'Class:ResponseTicket/Attribute:status/Value:escalated_ttr+' => '',
	'Class:ResponseTicket/Attribute:status/Value:frozen' => 'In attesa',
	'Class:ResponseTicket/Attribute:status/Value:frozen+' => '',
	'Class:ResponseTicket/Attribute:status/Value:resolved' => 'Risolto',
	'Class:ResponseTicket/Attribute:status/Value:resolved+' => '',
	'Class:ResponseTicket/Attribute:status/Value:closed' => 'Chiuso',
	'Class:ResponseTicket/Attribute:status/Value:closed+' => '',
	'Class:ResponseTicket/Attribute:caller_id' => 'Visitatore',
	'Class:ResponseTicket/Attribute:caller_id+' => '',
	'Class:ResponseTicket/Attribute:caller_email' => 'Email',
	'Class:ResponseTicket/Attribute:caller_email+' => '',
	'Class:ResponseTicket/Attribute:org_id' => 'Cliente',
	'Class:ResponseTicket/Attribute:org_id+' => '',
	'Class:ResponseTicket/Attribute:org_name' => 'Cliente',
	'Class:ResponseTicket/Attribute:org_name+' => '',
	'Class:ResponseTicket/Attribute:service_id' => 'Servizio',
	'Class:ResponseTicket/Attribute:service_id+' => '',
	'Class:ResponseTicket/Attribute:service_name' => 'Nome',
	'Class:ResponseTicket/Attribute:service_name+' => '',
	'Class:ResponseTicket/Attribute:servicesubcategory_id' => 'Elemento di servizio',
	'Class:ResponseTicket/Attribute:servicesubcategory_id+' => '',
	'Class:ResponseTicket/Attribute:servicesubcategory_name' => 'Name',
	'Class:ResponseTicket/Attribute:servicesubcategory_name+' => '',
	'Class:ResponseTicket/Attribute:product' => 'Prodotto',
	'Class:ResponseTicket/Attribute:product+' => '',
	'Class:ResponseTicket/Attribute:impact' => 'Impatto',
	'Class:ResponseTicket/Attribute:impact+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:1' => 'Un dipartimento',
	'Class:ResponseTicket/Attribute:impact/Value:1+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:2' => 'Un servizio',
	'Class:ResponseTicket/Attribute:impact/Value:2+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:3' => 'Una persona',
	'Class:ResponseTicket/Attribute:impact/Value:3+' => '',
	'Class:ResponseTicket/Attribute:urgency' => 'Urgenza',
	'Class:ResponseTicket/Attribute:urgency+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:1' => 'Alta',
	'Class:ResponseTicket/Attribute:urgency/Value:1+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:2' => 'Media',
	'Class:ResponseTicket/Attribute:urgency/Value:2+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:3' => 'Bassa',
	'Class:ResponseTicket/Attribute:urgency/Value:3+' => '',
	'Class:ResponseTicket/Attribute:priority' => 'Priorità',
	'Class:ResponseTicket/Attribute:priority+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:1' => 'Alta',
	'Class:ResponseTicket/Attribute:priority/Value:1+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:2' => 'Media',
	'Class:ResponseTicket/Attribute:priority/Value:2+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:3' => 'Bassa',
	'Class:ResponseTicket/Attribute:priority/Value:3+' => '',
	'Class:ResponseTicket/Attribute:workgroup_id' => 'Gruppo di lavoro',
	'Class:ResponseTicket/Attribute:workgroup_id+' => '',
	'Class:ResponseTicket/Attribute:workgroup_name' => 'Workgroup',
	'Class:ResponseTicket/Attribute:workgroup_name+' => '',
	'Class:ResponseTicket/Attribute:agent_id' => 'Agente',
	'Class:ResponseTicket/Attribute:agent_id+' => '',
	'Class:ResponseTicket/Attribute:agent_name' => 'Agente',
	'Class:ResponseTicket/Attribute:agent_name+' => '',
	'Class:ResponseTicket/Attribute:agent_email' => 'Email dell\'agente',
	'Class:ResponseTicket/Attribute:agent_email+' => '',
	'Class:ResponseTicket/Attribute:related_problem_id' => 'Problemi correlati',
	'Class:ResponseTicket/Attribute:related_problem_id+' => '',
	'Class:ResponseTicket/Attribute:related_problem_ref' => 'Ref',
	'Class:ResponseTicket/Attribute:related_problem_ref+' => '',
	'Class:ResponseTicket/Attribute:related_change_id' => 'Cambi correlati',
	'Class:ResponseTicket/Attribute:related_change_id+' => '',
	'Class:ResponseTicket/Attribute:related_change_ref' => 'Cambi correlati',
	'Class:ResponseTicket/Attribute:related_change_ref+' => '',
	'Class:ResponseTicket/Attribute:close_date' => 'Chiuso',
	'Class:ResponseTicket/Attribute:close_date+' => '',
	'Class:ResponseTicket/Attribute:last_update' => 'Ultimo aggiornamento',
	'Class:ResponseTicket/Attribute:last_update+' => '',
	'Class:ResponseTicket/Attribute:assignment_date' => 'Data di Assegnazione ',
	'Class:ResponseTicket/Attribute:assignment_date+' => '',
	'Class:ResponseTicket/Attribute:resolution_date' => 'Data di risoluzione',
	'Class:ResponseTicket/Attribute:resolution_date+' => '',
	'Class:ResponseTicket/Attribute:tto_escalation_deadline' => 'TTO Scadenza di Escalation',
	'Class:ResponseTicket/Attribute:tto_escalation_deadline+' => '',
	'Class:ResponseTicket/Attribute:ttr_escalation_deadline' => 'TTR Scadenza di Escalation',
	'Class:ResponseTicket/Attribute:ttr_escalation_deadline+' => '',
	'Class:ResponseTicket/Attribute:closure_deadline' => 'Termine di chiusura',
	'Class:ResponseTicket/Attribute:closure_deadline+' => '',
	'Class:ResponseTicket/Attribute:resolution_code' => 'Codice di risoluzione',
	'Class:ResponseTicket/Attribute:resolution_code+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:couldnotreproduce' => 'Non puo\' essere riprodotto',
	'Class:ResponseTicket/Attribute:resolution_code/Value:couldnotreproduce+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:duplicate' => 'Ticket duplicato',
	'Class:ResponseTicket/Attribute:resolution_code/Value:duplicate+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:fixed' => 'Fissato',
	'Class:ResponseTicket/Attribute:resolution_code/Value:fixed+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:irrelevant' => 'Irrilevante',
	'Class:ResponseTicket/Attribute:resolution_code/Value:irrelevant+' => '',
	'Class:ResponseTicket/Attribute:solution' => 'Soluzione',
	'Class:ResponseTicket/Attribute:solution+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction' => 'Soddisfazione dell\'utente',
	'Class:ResponseTicket/Attribute:user_satisfaction+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:1' => 'Molto soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:1+' => 'Molto soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:2' => 'Abbastanza soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:2+' => 'Abbastanza soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:3' => 'Piuttosto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:3+' => 'Piuttosto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:4' => 'Molto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:4+' => 'Molto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_commment' => 'Commento dell\'utente',
	'Class:ResponseTicket/Attribute:user_commment+' => '',
	'Class:ResponseTicket/Stimulus:ev_assign' => 'Assegna',
	'Class:ResponseTicket/Stimulus:ev_assign+' => '',
	'Class:ResponseTicket/Stimulus:ev_reassign' => 'Riassegna',
	'Class:ResponseTicket/Stimulus:ev_reassign+' => '',
	'Class:ResponseTicket/Stimulus:ev_timeout' => 'Escalation',
	'Class:ResponseTicket/Stimulus:ev_timeout+' => '',
	'Class:ResponseTicket/Stimulus:ev_resolve' => 'Segna come risolto',
	'Class:ResponseTicket/Stimulus:ev_resolve+' => '',
	'Class:ResponseTicket/Stimulus:ev_close' => 'Chiudi',
	'Class:ResponseTicket/Stimulus:ev_close+' => '',
	'Class:Ticket/Attribute:org_id' => 'Organization~~',
	'Class:Ticket/Attribute:org_name' => 'Organization Name~~',
	'Class:Ticket/Attribute:caller_id' => 'Caller~~',
	'Class:Ticket/Attribute:caller_name' => 'Caller Name~~',
	'Class:Ticket/Attribute:team_id' => 'Team~~',
	'Class:Ticket/Attribute:team_name' => 'Team Name~~',
	'Class:Ticket/Attribute:agent_id' => 'Agent~~',
	'Class:Ticket/Attribute:agent_name' => 'Agent Name~~',
	'Class:Ticket/Attribute:end_date' => 'End date~~',
	'Class:Ticket/Attribute:last_update' => 'Last update~~',
	'Class:Ticket/Attribute:close_date' => 'Close date~~',
	'Class:Ticket/Attribute:private_log' => 'Private log~~',
	'Class:Ticket/Attribute:contacts_list' => 'Contacts~~',
	'Class:Ticket/Attribute:contacts_list+' => 'All the contacts linked to this ticket~~',
	'Class:Ticket/Attribute:functionalcis_list' => 'CIs~~',
	'Class:Ticket/Attribute:functionalcis_list+' => 'All the configuration items impacted for this ticket~~',
	'Class:Ticket/Attribute:workorders_list' => 'Work orders~~',
	'Class:Ticket/Attribute:workorders_list+' => 'All the work orders for this ticket~~',
	'Ticket:ImpactAnalysis' => 'Impact Analysis~~',
	'Class:lnkContactToTicket' => 'Link Contact / Ticket~~',
	'Class:lnkContactToTicket/Attribute:ticket_id' => 'Ticket~~',
	'Class:lnkContactToTicket/Attribute:ticket_ref' => 'Ref~~',
	'Class:lnkContactToTicket/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToTicket/Attribute:contact_email' => 'Contact Email~~',
	'Class:lnkContactToTicket/Attribute:role' => 'Role (text)~~',
	'Class:lnkContactToTicket/Attribute:role_code' => 'Role~~',
	'Class:lnkContactToTicket/Attribute:role_code/Value:manual' => 'Added manually~~',
	'Class:lnkContactToTicket/Attribute:role_code/Value:computed' => 'Computed~~',
	'Class:lnkContactToTicket/Attribute:role_code/Value:do_not_notify' => 'Do not notify~~',
	'Class:lnkFunctionalCIToTicket' => 'Link FunctionalCI / Ticket~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id' => 'Ticket~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref' => 'Ref~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id' => 'CI~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name' => 'CI Name~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact' => 'Impact (text)~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code' => 'Impact~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:manual' => 'Added manually~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:computed' => 'Computed~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:not_impacted' => 'Not impacted~~',
	'Class:WorkOrder' => 'Work Order~~',
	'Class:WorkOrder/Attribute:name' => 'Name~~',
	'Class:WorkOrder/Attribute:status' => 'Status~~',
	'Class:WorkOrder/Attribute:status/Value:open' => 'open~~',
	'Class:WorkOrder/Attribute:status/Value:closed' => 'closed~~',
	'Class:WorkOrder/Attribute:description' => 'Description~~',
	'Class:WorkOrder/Attribute:ticket_id' => 'Ticket~~',
	'Class:WorkOrder/Attribute:ticket_ref' => 'Ticket ref~~',
	'Class:WorkOrder/Attribute:team_id' => 'Team~~',
	'Class:WorkOrder/Attribute:team_name' => 'Team Name~~',
	'Class:WorkOrder/Attribute:agent_id' => 'Agent~~',
	'Class:WorkOrder/Attribute:agent_email' => 'Agent email~~',
	'Class:WorkOrder/Attribute:start_date' => 'Start date~~',
	'Class:WorkOrder/Attribute:end_date' => 'End date~~',
	'Class:WorkOrder/Attribute:log' => 'Log~~',
	'Class:WorkOrder/Stimulus:ev_close' => 'Close~~',
	'Ticket:Type' => 'Qualification~~',
	'Ticket:support' => 'Support~~',
	'Ticket:resolution' => 'Resolution~~',
	'Ticket:SLA' => 'SLA report~~',
	'WorkOrder:Details' => 'Details~~',
	'WorkOrder:Moreinfo' => 'More information~~',
	'Tickets:ResolvedFrom' => 'Automatically resolved from %1$s~~',
	'Class:cmdbAbstractObject/Method:Set' => 'Set~~',
	'Class:cmdbAbstractObject/Method:Set+' => 'Set a field with a static value~~',
	'Class:cmdbAbstractObject/Method:Set/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Set/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:Set/Param:2' => 'Value~~',
	'Class:cmdbAbstractObject/Method:Set/Param:2+' => 'The value to set~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate' => 'SetCurrentDate~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate+' => 'Set a field with the current date and time~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser' => 'SetCurrentUser~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser+' => 'Set a field with the currently logged in user~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1+' => 'The field to set, in the current object. If the field is a string then the friendly name will be used, otherwise the identifier will be used. That friendly name is the name of the person if any is attached to the user, otherwise it is the login.~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson' => 'SetCurrentPerson~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson+' => 'Set a field with the currently logged in person (the \"person\" attached to the logged in \"user\").~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1+' => 'The field to set, in the current object. If the field is a string then the friendly name will be used, otherwise the identifier will be used.~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime' => 'SetElapsedTime~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime+' => 'Set a field with the time (seconds) elapsed since a date given by another field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2' => 'Reference Field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2+' => 'The field from which to get the reference date~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3' => 'Working Hours~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3+' => 'Leave empty to rely on the standard working hours scheme, or set to \"DefaultWorkingTimeComputer\" to force a 24x7 scheme~~',
	'Class:cmdbAbstractObject/Method:Reset' => 'Reset~~',
	'Class:cmdbAbstractObject/Method:Reset+' => 'Reset a field to its default value~~',
	'Class:cmdbAbstractObject/Method:Reset/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Reset/Param:1+' => 'The field to reset, in the current object~~',
	'Class:cmdbAbstractObject/Method:Copy' => 'Copy~~',
	'Class:cmdbAbstractObject/Method:Copy+' => 'Copy the value of a field to another field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:2' => 'Source Field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:2+' => 'The field to get the value from, in the current object~~',
	'Class:ResponseTicketTTO/Interface:iMetricComputer' => 'Time To Own~~',
	'Class:ResponseTicketTTO/Interface:iMetricComputer+' => 'Goal based on a SLT of type TTO~~',
	'Class:ResponseTicketTTR/Interface:iMetricComputer' => 'Time To Resolve~~',
	'Class:ResponseTicketTTR/Interface:iMetricComputer+' => 'Goal based on a SLT of type TTR~~',
));
?>

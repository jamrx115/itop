						<?php
//
// File generated by ... on the 2017-09-25T20:12:06+0200
// Please do not edit manually
//

/**
 * Classes and menus for itop-profiles-itil (version 2.3.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
//
// List of constant profiles
// - used by the class URP_Profiles at setup (create/update/delete records)
// - used by the addon UserRightsProfile to determine user rights
//
class ProfilesConfig
{
	protected static $aPROFILES = array (
  1 => 
  array (
    'name' => 'Administrator',
    'description' => 'Has the rights on everything (bypassing any control)',
  ),
  3 => 
  array (
    'name' => 'Configuration Manager',
    'description' => 'Person in charge of the documentation of the managed CIs',
  ),
  4 => 
  array (
    'name' => 'Service Desk Agent',
    'description' => 'Person in charge of creating incident reports',
  ),
  5 => 
  array (
    'name' => 'Support Agent',
    'description' => 'Person analyzing and solving the current incidents',
  ),
  6 => 
  array (
    'name' => 'Problem Manager',
    'description' => 'Person analyzing and solving the current problems',
  ),
  7 => 
  array (
    'name' => 'Change Implementor',
    'description' => 'Person executing the changes',
  ),
  8 => 
  array (
    'name' => 'Change Supervisor',
    'description' => 'Person responsible for the overall change execution',
  ),
  9 => 
  array (
    'name' => 'Change Approver',
    'description' => 'Person who could be impacted by some changes',
  ),
  10 => 
  array (
    'name' => 'Service Manager',
    'description' => 'Person responsible for the service delivered to the [internal] customer',
  ),
  11 => 
  array (
    'name' => 'Document author',
    'description' => 'Any person who could contribute to documentation',
  ),
  2 => 
  array (
    'name' => 'Portal user',
    'description' => 'Has the rights to access to the user portal. People having this profile will not be allowed to access the standard application, they will be automatically redirected to the user portal.',
  ),
  12 => 
  array (
    'name' => 'Portal power user',
    'description' => 'Users having this profile will have the rights to see all the tickets for a customer in the portal. Must be used in conjunction with other profiles (e.g. Portal User).',
  ),
);

	protected static $aGRANTS = array (
  '3_Organization_w' => true,
  '3_Organization+_w' => true,
  '3_Location_w' => true,
  '3_Location+_w' => true,
  '3_Contact_w' => true,
  '3_Contact+_w' => true,
  '3_Organization_bw' => true,
  '3_Organization+_bw' => true,
  '3_Location_bw' => true,
  '3_Location+_bw' => true,
  '3_Contact_bw' => true,
  '3_Contact+_bw' => true,
  '3_Organization_d' => true,
  '3_Organization+_d' => true,
  '3_Location_d' => true,
  '3_Location+_d' => true,
  '3_Contact_d' => true,
  '3_Contact+_d' => true,
  '3_Document_w' => true,
  '3_Document+_w' => true,
  '3_Document_bw' => true,
  '3_Document+_bw' => true,
  '3_Document_d' => true,
  '3_Document+_d' => true,
  '3_Licence_w' => true,
  '3_Licence+_w' => true,
  '3_Subnet_w' => true,
  '3_Subnet+_w' => true,
  '3_Patch_w' => true,
  '3_Patch+_w' => true,
  '3_Software_w' => true,
  '3_Software+_w' => true,
  '3_FunctionalCI_w' => true,
  '3_FunctionalCI+_w' => true,
  '3_NetworkInterface_w' => true,
  '3_NetworkInterface+_w' => true,
  '3_Group_w' => true,
  '3_Group+_w' => true,
  '3_Typology_w' => true,
  '3_Typology+_w' => true,
  '3_NASFileSystem_w' => true,
  '3_NASFileSystem+_w' => true,
  '3_LogicalVolume_w' => true,
  '3_LogicalVolume+_w' => true,
  '3_Tape_w' => true,
  '3_Tape+_w' => true,
  '3_VLAN_w' => true,
  '3_VLAN+_w' => true,
  '3_Licence_bw' => true,
  '3_Licence+_bw' => true,
  '3_Subnet_bw' => true,
  '3_Subnet+_bw' => true,
  '3_Patch_bw' => true,
  '3_Patch+_bw' => true,
  '3_Software_bw' => true,
  '3_Software+_bw' => true,
  '3_FunctionalCI_bw' => true,
  '3_FunctionalCI+_bw' => true,
  '3_NetworkInterface_bw' => true,
  '3_NetworkInterface+_bw' => true,
  '3_Group_bw' => true,
  '3_Group+_bw' => true,
  '3_Typology_bw' => true,
  '3_Typology+_bw' => true,
  '3_NASFileSystem_bw' => true,
  '3_NASFileSystem+_bw' => true,
  '3_LogicalVolume_bw' => true,
  '3_LogicalVolume+_bw' => true,
  '3_Tape_bw' => true,
  '3_Tape+_bw' => true,
  '3_VLAN_bw' => true,
  '3_VLAN+_bw' => true,
  '3_Licence_d' => true,
  '3_Licence+_d' => true,
  '3_Subnet_d' => true,
  '3_Subnet+_d' => true,
  '3_Patch_d' => true,
  '3_Patch+_d' => true,
  '3_Software_d' => true,
  '3_Software+_d' => true,
  '3_FunctionalCI_d' => true,
  '3_FunctionalCI+_d' => true,
  '3_NetworkInterface_d' => true,
  '3_NetworkInterface+_d' => true,
  '3_Group_d' => true,
  '3_Group+_d' => true,
  '3_Typology_d' => true,
  '3_Typology+_d' => true,
  '3_NASFileSystem_d' => true,
  '3_NASFileSystem+_d' => true,
  '3_LogicalVolume_d' => true,
  '3_LogicalVolume+_d' => true,
  '3_Tape_d' => true,
  '3_Tape+_d' => true,
  '3_VLAN_d' => true,
  '3_VLAN+_d' => true,
  '3_*_r' => true,
  '3_*+_r' => true,
  '3_*_br' => true,
  '3_*+_br' => true,
  '4_lnkFunctionalCIToTicket_d' => true,
  '4_lnkFunctionalCIToTicket+_d' => true,
  '4_lnkContactToTicket_d' => true,
  '4_lnkContactToTicket+_d' => true,
  '4_WorkOrder_d' => true,
  '4_WorkOrder+_d' => true,
  '4_Attachment_d' => true,
  '4_Attachment+_d' => true,
  '4_lnkFunctionalCIToTicket_w' => true,
  '4_lnkFunctionalCIToTicket+_w' => true,
  '4_lnkContactToTicket_w' => true,
  '4_lnkContactToTicket+_w' => true,
  '4_WorkOrder_w' => true,
  '4_WorkOrder+_w' => true,
  '4_Attachment_w' => true,
  '4_Attachment+_w' => true,
  '4_lnkFunctionalCIToTicket_bw' => true,
  '4_lnkFunctionalCIToTicket+_bw' => true,
  '4_lnkContactToTicket_bw' => true,
  '4_lnkContactToTicket+_bw' => true,
  '4_WorkOrder_bw' => true,
  '4_WorkOrder+_bw' => true,
  '4_Attachment_bw' => true,
  '4_Attachment+_bw' => true,
  '4_lnkFunctionalCIToTicket_s_ev_close' => true,
  '4_lnkFunctionalCIToTicket+_s_ev_close' => true,
  '4_lnkContactToTicket_s_ev_close' => true,
  '4_lnkContactToTicket+_s_ev_close' => true,
  '4_WorkOrder_s_ev_close' => true,
  '4_WorkOrder+_s_ev_close' => true,
  '4_Attachment_s_ev_close' => true,
  '4_Attachment+_s_ev_close' => true,
  '4_Incident_w' => true,
  '4_Incident+_w' => true,
  '4_Incident_bw' => true,
  '4_Incident+_bw' => true,
  '4_Incident_s_ev_assign' => true,
  '4_Incident+_s_ev_assign' => true,
  '4_UserRequest_w' => true,
  '4_UserRequest+_w' => true,
  '4_UserRequest_bw' => true,
  '4_UserRequest+_bw' => true,
  '4_UserRequest_s_ev_assign' => true,
  '4_UserRequest+_s_ev_assign' => true,
  '4_*_r' => true,
  '4_*+_r' => true,
  '4_*_br' => true,
  '4_*+_br' => true,
  '5_lnkFunctionalCIToTicket_d' => true,
  '5_lnkFunctionalCIToTicket+_d' => true,
  '5_lnkContactToTicket_d' => true,
  '5_lnkContactToTicket+_d' => true,
  '5_WorkOrder_d' => true,
  '5_WorkOrder+_d' => true,
  '5_Attachment_d' => true,
  '5_Attachment+_d' => true,
  '5_lnkFunctionalCIToTicket_w' => true,
  '5_lnkFunctionalCIToTicket+_w' => true,
  '5_lnkContactToTicket_w' => true,
  '5_lnkContactToTicket+_w' => true,
  '5_WorkOrder_w' => true,
  '5_WorkOrder+_w' => true,
  '5_Attachment_w' => true,
  '5_Attachment+_w' => true,
  '5_lnkFunctionalCIToTicket_bw' => true,
  '5_lnkFunctionalCIToTicket+_bw' => true,
  '5_lnkContactToTicket_bw' => true,
  '5_lnkContactToTicket+_bw' => true,
  '5_WorkOrder_bw' => true,
  '5_WorkOrder+_bw' => true,
  '5_Attachment_bw' => true,
  '5_Attachment+_bw' => true,
  '5_lnkFunctionalCIToTicket_s_ev_close' => true,
  '5_lnkFunctionalCIToTicket+_s_ev_close' => true,
  '5_lnkContactToTicket_s_ev_close' => true,
  '5_lnkContactToTicket+_s_ev_close' => true,
  '5_WorkOrder_s_ev_close' => true,
  '5_WorkOrder+_s_ev_close' => true,
  '5_Attachment_s_ev_close' => true,
  '5_Attachment+_s_ev_close' => true,
  '5_Incident_w' => true,
  '5_Incident+_w' => true,
  '5_Incident_bw' => true,
  '5_Incident+_bw' => true,
  '5_Incident_s_ev_assign' => true,
  '5_Incident+_s_ev_assign' => true,
  '5_Incident_s_ev_reassign' => true,
  '5_Incident+_s_ev_reassign' => true,
  '5_Incident_s_ev_resolve' => true,
  '5_Incident+_s_ev_resolve' => true,
  '5_Incident_s_ev_close' => true,
  '5_Incident+_s_ev_close' => true,
  '5_Incident_s_ev_pending' => true,
  '5_Incident+_s_ev_pending' => true,
  '5_UserRequest_w' => true,
  '5_UserRequest+_w' => true,
  '5_UserRequest_bw' => true,
  '5_UserRequest+_bw' => true,
  '5_UserRequest_s_ev_assign' => true,
  '5_UserRequest+_s_ev_assign' => true,
  '5_UserRequest_s_ev_reassign' => true,
  '5_UserRequest+_s_ev_reassign' => true,
  '5_UserRequest_s_ev_resolve' => true,
  '5_UserRequest+_s_ev_resolve' => true,
  '5_UserRequest_s_ev_close' => true,
  '5_UserRequest+_s_ev_close' => true,
  '5_UserRequest_s_ev_pending' => true,
  '5_UserRequest+_s_ev_pending' => true,
  '5_UserRequest_s_ev_wait_for_approval' => true,
  '5_UserRequest+_s_ev_wait_for_approval' => true,
  '5_*_r' => true,
  '5_*+_r' => true,
  '5_*_br' => true,
  '5_*+_br' => true,
  '6_KnownError_w' => true,
  '6_KnownError+_w' => true,
  '6_FAQ_w' => true,
  '6_FAQ+_w' => true,
  '6_FAQCategory_w' => true,
  '6_FAQCategory+_w' => true,
  '6_KnownError_bw' => true,
  '6_KnownError+_bw' => true,
  '6_FAQ_bw' => true,
  '6_FAQ+_bw' => true,
  '6_FAQCategory_bw' => true,
  '6_FAQCategory+_bw' => true,
  '6_KnownError_d' => true,
  '6_KnownError+_d' => true,
  '6_FAQ_d' => true,
  '6_FAQ+_d' => true,
  '6_FAQCategory_d' => true,
  '6_FAQCategory+_d' => true,
  '6_lnkFunctionalCIToTicket_d' => true,
  '6_lnkFunctionalCIToTicket+_d' => true,
  '6_lnkContactToTicket_d' => true,
  '6_lnkContactToTicket+_d' => true,
  '6_WorkOrder_d' => true,
  '6_WorkOrder+_d' => true,
  '6_Attachment_d' => true,
  '6_Attachment+_d' => true,
  '6_lnkFunctionalCIToTicket_w' => true,
  '6_lnkFunctionalCIToTicket+_w' => true,
  '6_lnkContactToTicket_w' => true,
  '6_lnkContactToTicket+_w' => true,
  '6_WorkOrder_w' => true,
  '6_WorkOrder+_w' => true,
  '6_Attachment_w' => true,
  '6_Attachment+_w' => true,
  '6_lnkFunctionalCIToTicket_bw' => true,
  '6_lnkFunctionalCIToTicket+_bw' => true,
  '6_lnkContactToTicket_bw' => true,
  '6_lnkContactToTicket+_bw' => true,
  '6_WorkOrder_bw' => true,
  '6_WorkOrder+_bw' => true,
  '6_Attachment_bw' => true,
  '6_Attachment+_bw' => true,
  '6_lnkFunctionalCIToTicket_s_ev_close' => true,
  '6_lnkFunctionalCIToTicket+_s_ev_close' => true,
  '6_lnkContactToTicket_s_ev_close' => true,
  '6_lnkContactToTicket+_s_ev_close' => true,
  '6_WorkOrder_s_ev_close' => true,
  '6_WorkOrder+_s_ev_close' => true,
  '6_Attachment_s_ev_close' => true,
  '6_Attachment+_s_ev_close' => true,
  '6_Problem_w' => true,
  '6_Problem+_w' => true,
  '6_Problem_bw' => true,
  '6_Problem+_bw' => true,
  '6_Problem_s_ev_assign' => true,
  '6_Problem+_s_ev_assign' => true,
  '6_Problem_s_ev_reassign' => true,
  '6_Problem+_s_ev_reassign' => true,
  '6_Problem_s_ev_resolve' => true,
  '6_Problem+_s_ev_resolve' => true,
  '6_Problem_s_ev_close' => true,
  '6_Problem+_s_ev_close' => true,
  '6_*_r' => true,
  '6_*+_r' => true,
  '6_*_br' => true,
  '6_*+_br' => true,
  '7_Change_w' => true,
  '7_Change+_w' => true,
  '7_RoutineChange_w' => true,
  '7_RoutineChange+_w' => true,
  '7_NormalChange_w' => true,
  '7_NormalChange+_w' => true,
  '7_EmergencyChange_w' => true,
  '7_EmergencyChange+_w' => true,
  '7_Change_bw' => true,
  '7_Change+_bw' => true,
  '7_RoutineChange_bw' => true,
  '7_RoutineChange+_bw' => true,
  '7_NormalChange_bw' => true,
  '7_NormalChange+_bw' => true,
  '7_EmergencyChange_bw' => true,
  '7_EmergencyChange+_bw' => true,
  '7_Change_s_ev_assign' => true,
  '7_Change+_s_ev_assign' => true,
  '7_RoutineChange_s_ev_assign' => true,
  '7_RoutineChange+_s_ev_assign' => true,
  '7_NormalChange_s_ev_assign' => true,
  '7_NormalChange+_s_ev_assign' => true,
  '7_EmergencyChange_s_ev_assign' => true,
  '7_EmergencyChange+_s_ev_assign' => true,
  '7_Change_s_ev_plan' => true,
  '7_Change+_s_ev_plan' => true,
  '7_RoutineChange_s_ev_plan' => true,
  '7_RoutineChange+_s_ev_plan' => true,
  '7_NormalChange_s_ev_plan' => true,
  '7_NormalChange+_s_ev_plan' => true,
  '7_EmergencyChange_s_ev_plan' => true,
  '7_EmergencyChange+_s_ev_plan' => true,
  '7_Change_s_ev_reopen' => true,
  '7_Change+_s_ev_reopen' => true,
  '7_RoutineChange_s_ev_reopen' => true,
  '7_RoutineChange+_s_ev_reopen' => true,
  '7_NormalChange_s_ev_reopen' => true,
  '7_NormalChange+_s_ev_reopen' => true,
  '7_EmergencyChange_s_ev_reopen' => true,
  '7_EmergencyChange+_s_ev_reopen' => true,
  '7_Change_s_ev_finish' => true,
  '7_Change+_s_ev_finish' => true,
  '7_RoutineChange_s_ev_finish' => true,
  '7_RoutineChange+_s_ev_finish' => true,
  '7_NormalChange_s_ev_finish' => true,
  '7_NormalChange+_s_ev_finish' => true,
  '7_EmergencyChange_s_ev_finish' => true,
  '7_EmergencyChange+_s_ev_finish' => true,
  '7_lnkFunctionalCIToTicket_d' => true,
  '7_lnkFunctionalCIToTicket+_d' => true,
  '7_lnkContactToTicket_d' => true,
  '7_lnkContactToTicket+_d' => true,
  '7_WorkOrder_d' => true,
  '7_WorkOrder+_d' => true,
  '7_Attachment_d' => true,
  '7_Attachment+_d' => true,
  '7_lnkFunctionalCIToTicket_w' => true,
  '7_lnkFunctionalCIToTicket+_w' => true,
  '7_lnkContactToTicket_w' => true,
  '7_lnkContactToTicket+_w' => true,
  '7_WorkOrder_w' => true,
  '7_WorkOrder+_w' => true,
  '7_Attachment_w' => true,
  '7_Attachment+_w' => true,
  '7_lnkFunctionalCIToTicket_bw' => true,
  '7_lnkFunctionalCIToTicket+_bw' => true,
  '7_lnkContactToTicket_bw' => true,
  '7_lnkContactToTicket+_bw' => true,
  '7_WorkOrder_bw' => true,
  '7_WorkOrder+_bw' => true,
  '7_Attachment_bw' => true,
  '7_Attachment+_bw' => true,
  '7_lnkFunctionalCIToTicket_s_ev_close' => true,
  '7_lnkFunctionalCIToTicket+_s_ev_close' => true,
  '7_lnkContactToTicket_s_ev_close' => true,
  '7_lnkContactToTicket+_s_ev_close' => true,
  '7_WorkOrder_s_ev_close' => true,
  '7_WorkOrder+_s_ev_close' => true,
  '7_Attachment_s_ev_close' => true,
  '7_Attachment+_s_ev_close' => true,
  '7_NormalChange_s_ev_replan' => true,
  '7_NormalChange+_s_ev_replan' => true,
  '7_NormalChange_s_ev_implement' => true,
  '7_NormalChange+_s_ev_implement' => true,
  '7_NormalChange_s_ev_monitor' => true,
  '7_NormalChange+_s_ev_monitor' => true,
  '7_EmergencyChange_s_ev_replan' => true,
  '7_EmergencyChange+_s_ev_replan' => true,
  '7_EmergencyChange_s_ev_implement' => true,
  '7_EmergencyChange+_s_ev_implement' => true,
  '7_EmergencyChange_s_ev_monitor' => true,
  '7_EmergencyChange+_s_ev_monitor' => true,
  '7_RoutineChange_s_ev_replan' => true,
  '7_RoutineChange+_s_ev_replan' => true,
  '7_RoutineChange_s_ev_implement' => true,
  '7_RoutineChange+_s_ev_implement' => true,
  '7_RoutineChange_s_ev_monitor' => true,
  '7_RoutineChange+_s_ev_monitor' => true,
  '7_*_r' => true,
  '7_*+_r' => true,
  '7_*_br' => true,
  '7_*+_br' => true,
  '8_Change_w' => true,
  '8_Change+_w' => true,
  '8_RoutineChange_w' => true,
  '8_RoutineChange+_w' => true,
  '8_NormalChange_w' => true,
  '8_NormalChange+_w' => true,
  '8_EmergencyChange_w' => true,
  '8_EmergencyChange+_w' => true,
  '8_Change_bw' => true,
  '8_Change+_bw' => true,
  '8_RoutineChange_bw' => true,
  '8_RoutineChange+_bw' => true,
  '8_NormalChange_bw' => true,
  '8_NormalChange+_bw' => true,
  '8_EmergencyChange_bw' => true,
  '8_EmergencyChange+_bw' => true,
  '8_Change_s_ev_assign' => true,
  '8_Change+_s_ev_assign' => true,
  '8_RoutineChange_s_ev_assign' => true,
  '8_RoutineChange+_s_ev_assign' => true,
  '8_NormalChange_s_ev_assign' => true,
  '8_NormalChange+_s_ev_assign' => true,
  '8_EmergencyChange_s_ev_assign' => true,
  '8_EmergencyChange+_s_ev_assign' => true,
  '8_Change_s_ev_reopen' => true,
  '8_Change+_s_ev_reopen' => true,
  '8_RoutineChange_s_ev_reopen' => true,
  '8_RoutineChange+_s_ev_reopen' => true,
  '8_NormalChange_s_ev_reopen' => true,
  '8_NormalChange+_s_ev_reopen' => true,
  '8_EmergencyChange_s_ev_reopen' => true,
  '8_EmergencyChange+_s_ev_reopen' => true,
  '8_Change_s_ev_finish' => true,
  '8_Change+_s_ev_finish' => true,
  '8_RoutineChange_s_ev_finish' => true,
  '8_RoutineChange+_s_ev_finish' => true,
  '8_NormalChange_s_ev_finish' => true,
  '8_NormalChange+_s_ev_finish' => true,
  '8_EmergencyChange_s_ev_finish' => true,
  '8_EmergencyChange+_s_ev_finish' => true,
  '8_lnkFunctionalCIToTicket_d' => true,
  '8_lnkFunctionalCIToTicket+_d' => true,
  '8_lnkContactToTicket_d' => true,
  '8_lnkContactToTicket+_d' => true,
  '8_WorkOrder_d' => true,
  '8_WorkOrder+_d' => true,
  '8_Attachment_d' => true,
  '8_Attachment+_d' => true,
  '8_lnkFunctionalCIToTicket_w' => true,
  '8_lnkFunctionalCIToTicket+_w' => true,
  '8_lnkContactToTicket_w' => true,
  '8_lnkContactToTicket+_w' => true,
  '8_WorkOrder_w' => true,
  '8_WorkOrder+_w' => true,
  '8_Attachment_w' => true,
  '8_Attachment+_w' => true,
  '8_lnkFunctionalCIToTicket_bw' => true,
  '8_lnkFunctionalCIToTicket+_bw' => true,
  '8_lnkContactToTicket_bw' => true,
  '8_lnkContactToTicket+_bw' => true,
  '8_WorkOrder_bw' => true,
  '8_WorkOrder+_bw' => true,
  '8_Attachment_bw' => true,
  '8_Attachment+_bw' => true,
  '8_lnkFunctionalCIToTicket_s_ev_close' => true,
  '8_lnkFunctionalCIToTicket+_s_ev_close' => true,
  '8_lnkContactToTicket_s_ev_close' => true,
  '8_lnkContactToTicket+_s_ev_close' => true,
  '8_WorkOrder_s_ev_close' => true,
  '8_WorkOrder+_s_ev_close' => true,
  '8_Attachment_s_ev_close' => true,
  '8_Attachment+_s_ev_close' => true,
  '8_NormalChange_s_ev_validate' => true,
  '8_NormalChange+_s_ev_validate' => true,
  '8_NormalChange_s_ev_reject' => true,
  '8_NormalChange+_s_ev_reject' => true,
  '8_*_r' => true,
  '8_*+_r' => true,
  '8_*_br' => true,
  '8_*+_br' => true,
  '9_Change_w' => true,
  '9_Change+_w' => true,
  '9_RoutineChange_w' => true,
  '9_RoutineChange+_w' => true,
  '9_NormalChange_w' => true,
  '9_NormalChange+_w' => true,
  '9_EmergencyChange_w' => true,
  '9_EmergencyChange+_w' => true,
  '9_Change_bw' => true,
  '9_Change+_bw' => true,
  '9_RoutineChange_bw' => true,
  '9_RoutineChange+_bw' => true,
  '9_NormalChange_bw' => true,
  '9_NormalChange+_bw' => true,
  '9_EmergencyChange_bw' => true,
  '9_EmergencyChange+_bw' => true,
  '9_Change_s_ev_approve' => true,
  '9_Change+_s_ev_approve' => true,
  '9_RoutineChange_s_ev_approve' => true,
  '9_RoutineChange+_s_ev_approve' => true,
  '9_NormalChange_s_ev_approve' => true,
  '9_NormalChange+_s_ev_approve' => true,
  '9_EmergencyChange_s_ev_approve' => true,
  '9_EmergencyChange+_s_ev_approve' => true,
  '9_Change_s_ev_reject' => true,
  '9_Change+_s_ev_reject' => true,
  '9_RoutineChange_s_ev_reject' => true,
  '9_RoutineChange+_s_ev_reject' => true,
  '9_NormalChange_s_ev_reject' => true,
  '9_NormalChange+_s_ev_reject' => true,
  '9_EmergencyChange_s_ev_reject' => true,
  '9_EmergencyChange+_s_ev_reject' => true,
  '9_lnkFunctionalCIToTicket_d' => true,
  '9_lnkFunctionalCIToTicket+_d' => true,
  '9_lnkContactToTicket_d' => true,
  '9_lnkContactToTicket+_d' => true,
  '9_WorkOrder_d' => true,
  '9_WorkOrder+_d' => true,
  '9_Attachment_d' => true,
  '9_Attachment+_d' => true,
  '9_lnkFunctionalCIToTicket_w' => true,
  '9_lnkFunctionalCIToTicket+_w' => true,
  '9_lnkContactToTicket_w' => true,
  '9_lnkContactToTicket+_w' => true,
  '9_WorkOrder_w' => true,
  '9_WorkOrder+_w' => true,
  '9_Attachment_w' => true,
  '9_Attachment+_w' => true,
  '9_lnkFunctionalCIToTicket_bw' => true,
  '9_lnkFunctionalCIToTicket+_bw' => true,
  '9_lnkContactToTicket_bw' => true,
  '9_lnkContactToTicket+_bw' => true,
  '9_WorkOrder_bw' => true,
  '9_WorkOrder+_bw' => true,
  '9_Attachment_bw' => true,
  '9_Attachment+_bw' => true,
  '9_lnkFunctionalCIToTicket_s_ev_close' => true,
  '9_lnkFunctionalCIToTicket+_s_ev_close' => true,
  '9_lnkContactToTicket_s_ev_close' => true,
  '9_lnkContactToTicket+_s_ev_close' => true,
  '9_WorkOrder_s_ev_close' => true,
  '9_WorkOrder+_s_ev_close' => true,
  '9_Attachment_s_ev_close' => true,
  '9_Attachment+_s_ev_close' => true,
  '9_NormalChange_s_ev_notapprove' => true,
  '9_NormalChange+_s_ev_notapprove' => true,
  '9_EmergencyChange_s_ev_notapprove' => true,
  '9_EmergencyChange+_s_ev_notapprove' => true,
  '9_*_r' => true,
  '9_*+_r' => true,
  '9_*_br' => true,
  '9_*+_br' => true,
  '10_Contract_w' => true,
  '10_Contract+_w' => true,
  '10_ProviderContract_w' => true,
  '10_ProviderContract+_w' => true,
  '10_CustomerContract_w' => true,
  '10_CustomerContract+_w' => true,
  '10_ServiceFamily_w' => true,
  '10_ServiceFamily+_w' => true,
  '10_Service_w' => true,
  '10_Service+_w' => true,
  '10_ServiceSubcategory_w' => true,
  '10_ServiceSubcategory+_w' => true,
  '10_SLA_w' => true,
  '10_SLA+_w' => true,
  '10_SLT_w' => true,
  '10_SLT+_w' => true,
  '10_DeliveryModel_w' => true,
  '10_DeliveryModel+_w' => true,
  '10_Contract_bw' => true,
  '10_Contract+_bw' => true,
  '10_ProviderContract_bw' => true,
  '10_ProviderContract+_bw' => true,
  '10_CustomerContract_bw' => true,
  '10_CustomerContract+_bw' => true,
  '10_ServiceFamily_bw' => true,
  '10_ServiceFamily+_bw' => true,
  '10_Service_bw' => true,
  '10_Service+_bw' => true,
  '10_ServiceSubcategory_bw' => true,
  '10_ServiceSubcategory+_bw' => true,
  '10_SLA_bw' => true,
  '10_SLA+_bw' => true,
  '10_SLT_bw' => true,
  '10_SLT+_bw' => true,
  '10_DeliveryModel_bw' => true,
  '10_DeliveryModel+_bw' => true,
  '10_Contract_d' => true,
  '10_Contract+_d' => true,
  '10_ProviderContract_d' => true,
  '10_ProviderContract+_d' => true,
  '10_CustomerContract_d' => true,
  '10_CustomerContract+_d' => true,
  '10_ServiceFamily_d' => true,
  '10_ServiceFamily+_d' => true,
  '10_Service_d' => true,
  '10_Service+_d' => true,
  '10_ServiceSubcategory_d' => true,
  '10_ServiceSubcategory+_d' => true,
  '10_SLA_d' => true,
  '10_SLA+_d' => true,
  '10_SLT_d' => true,
  '10_SLT+_d' => true,
  '10_DeliveryModel_d' => true,
  '10_DeliveryModel+_d' => true,
  '10_*_r' => true,
  '10_*+_r' => true,
  '10_*_br' => true,
  '10_*+_br' => true,
  '11_Document_w' => true,
  '11_Document+_w' => true,
  '11_Document_bw' => true,
  '11_Document+_bw' => true,
  '11_Document_d' => true,
  '11_Document+_d' => true,
  '11_*_r' => true,
  '11_*+_r' => true,
  '11_*_br' => true,
  '11_*+_br' => true,
  '2_lnkFunctionalCIToTicket_w' => true,
  '2_lnkFunctionalCIToTicket+_w' => true,
  '2_lnkContactToTicket_w' => true,
  '2_lnkContactToTicket+_w' => true,
  '2_lnkFunctionalCIToTicket_d' => true,
  '2_lnkFunctionalCIToTicket+_d' => true,
  '2_lnkContactToTicket_d' => true,
  '2_lnkContactToTicket+_d' => true,
  '2_UserRequest_w' => true,
  '2_UserRequest+_w' => true,
  '2_UserRequest_s_ev_close' => true,
  '2_UserRequest+_s_ev_close' => true,
  '2_UserRequest_s_ev_reopen' => true,
  '2_UserRequest+_s_ev_reopen' => true,
  '2_*_r' => true,
  '2_*+_r' => true,
  '2_*_br' => true,
  '2_*+_br' => true,
  '2_Incident_w' => true,
  '2_Incident+_w' => true,
  '2_Incident_s_ev_close' => true,
  '2_Incident+_s_ev_close' => true,
  '2_Incident_s_ev_reopen' => true,
  '2_Incident+_s_ev_reopen' => true,
);

	protected static $aLINKTOCLASSES = array (
  'lnkDocumentToLicence' => 
  array (
    0 => 'Licence',
    1 => 'Document',
  ),
  'lnkDocumentToPatch' => 
  array (
    0 => 'Patch',
    1 => 'Document',
  ),
  'lnkSoftwareInstanceToSoftwarePatch' => 
  array (
    0 => 'SoftwarePatch',
    1 => 'SoftwareInstance',
  ),
  'lnkFunctionalCIToOSPatch' => 
  array (
    0 => 'OSPatch',
    1 => 'FunctionalCI',
  ),
  'lnkDocumentToSoftware' => 
  array (
    0 => 'Software',
    1 => 'Document',
  ),
  'lnkContactToFunctionalCI' => 
  array (
    0 => 'FunctionalCI',
    1 => 'Contact',
  ),
  'lnkDocumentToFunctionalCI' => 
  array (
    0 => 'FunctionalCI',
    1 => 'Document',
  ),
  'lnkSubnetToVLAN' => 
  array (
    0 => 'Subnet',
    1 => 'VLAN',
  ),
  'lnkPhysicalInterfaceToVLAN' => 
  array (
    0 => 'PhysicalInterface',
    1 => 'VLAN',
  ),
  'lnkConnectableCIToNetworkDevice' => 
  array (
    0 => 'NetworkDevice',
    1 => 'ConnectableCI',
  ),
  'lnkApplicationSolutionToFunctionalCI' => 
  array (
    0 => 'ApplicationSolution',
    1 => 'FunctionalCI',
  ),
  'lnkApplicationSolutionToBusinessProcess' => 
  array (
    0 => 'BusinessProcess',
    1 => 'ApplicationSolution',
  ),
  'lnkPersonToTeam' => 
  array (
    0 => 'Team',
    1 => 'Person',
  ),
  'lnkGroupToCI' => 
  array (
    0 => 'Group',
    1 => 'FunctionalCI',
  ),
  'lnkServerToVolume' => 
  array (
    0 => 'LogicalVolume',
    1 => 'Server',
  ),
  'lnkSanToDatacenterDevice' => 
  array (
    0 => 'SANSwitch',
    1 => 'DatacenterDevice',
  ),
  'lnkContactToTicket' => 
  array (
    0 => 'Ticket',
    1 => 'Contact',
  ),
  'lnkFunctionalCIToTicket' => 
  array (
    0 => 'Ticket',
    1 => 'FunctionalCI',
  ),
  'lnkVirtualDeviceToVolume' => 
  array (
    0 => 'LogicalVolume',
    1 => 'VirtualDevice',
  ),
  'lnkErrorToFunctionalCI' => 
  array (
    0 => 'FunctionalCI',
    1 => 'KnownError',
  ),
  'lnkDocumentToError' => 
  array (
    0 => 'Document',
    1 => 'KnownError',
  ),
  'lnkContactToContract' => 
  array (
    0 => 'Contract',
    1 => 'Contact',
  ),
  'lnkContractToDocument' => 
  array (
    0 => 'Contract',
    1 => 'Document',
  ),
  'lnkFunctionalCIToProviderContract' => 
  array (
    0 => 'ProviderContract',
    1 => 'FunctionalCI',
  ),
  'lnkDocumentToService' => 
  array (
    0 => 'Service',
    1 => 'Document',
  ),
  'lnkContactToService' => 
  array (
    0 => 'Service',
    1 => 'Contact',
  ),
  'lnkSLAToSLT' => 
  array (
    0 => 'SLA',
    1 => 'SLT',
  ),
  'lnkCustomerContractToService' => 
  array (
    0 => 'CustomerContract',
    1 => 'Service',
    2 => 'CoverageWindow',
  ),
  'lnkProviderContractToService' => 
  array (
    0 => 'Service',
    1 => 'ProviderContract',
  ),
  'lnkFunctionalCIToService' => 
  array (
    0 => 'Service',
    1 => 'FunctionalCI',
  ),
  'lnkDeliveryModelToContact' => 
  array (
    0 => 'DeliveryModel',
    1 => 'Contact',
  ),
);

	// Now replaced by MetaModel::GetLinkClasses (working with 1.x)
	// This function could be deprecated
	public static function GetLinkClasses()
	{
		return self::$aLINKTOCLASSES;
	}

	public static function GetProfileActionGrant($iProfileId, $sClass, $sAction)
	{
		$bLegacyBehavior = MetaModel::GetConfig()->Get('user_rights_legacy');

		// Search for a grant, stoping if any deny is encountered (allowance implies the verification of all paths)
		$bAllow = null;

		// 1 - The class itself
		// 
		$sGrantKey = $iProfileId.'_'.$sClass.'_'.$sAction;
		if (isset(self::$aGRANTS[$sGrantKey]))
		{
			$bAllow = self::$aGRANTS[$sGrantKey];
			if ($bLegacyBehavior) return $bAllow;
			if (!$bAllow) return false;
		}

		// 2 - The parent classes, up to the root class
		// 
		foreach (MetaModel::EnumParentClasses($sClass, ENUM_PARENT_CLASSES_EXCLUDELEAF, false /*bRootFirst*/) as $sParent)
		{
			$sGrantKey = $iProfileId.'_'.$sParent.'+_'.$sAction;
			if (isset(self::$aGRANTS[$sGrantKey]))
			{
				$bAllow = self::$aGRANTS[$sGrantKey];
				if ($bLegacyBehavior) return $bAllow;
				if (!$bAllow) return false;
			}
		}

		// 3 - The related classes (if the current is an N-N link with DEL_AUTO/DEL_SILENT)
		//
		$bGrant = self::GetLinkActionGrant($iProfileId, $sClass, $sAction);
		if (!is_null($bGrant))
		{
			$bAllow = $bGrant;
			if ($bLegacyBehavior) return $bAllow;
			if (!$bAllow) return false;
		}

		// 4 - All
		// 
		$sGrantKey = $iProfileId.'_*_'.$sAction;
		if (isset(self::$aGRANTS[$sGrantKey]))
		{
			$bAllow = self::$aGRANTS[$sGrantKey];
			if ($bLegacyBehavior) return $bAllow;
			if (!$bAllow) return false;
		}

		// null or true
		return $bAllow;
	}	

	public static function GetProfileStimulusGrant($iProfileId, $sClass, $sStimulus)
	{
		$sGrantKey = $iProfileId.'_'.$sClass.'_s_'.$sStimulus;
		if (isset(self::$aGRANTS[$sGrantKey]))
		{
			return self::$aGRANTS[$sGrantKey];
		}
		$sGrantKey = $iProfileId.'_*_s_'.$sStimulus;
		if (isset(self::$aGRANTS[$sGrantKey]))
		{
			return self::$aGRANTS[$sGrantKey];
		}
		return null;
	}

	// returns an array of id => array of column => php value(so-called "real value")
	public static function GetProfilesValues()
	{
		return self::$aPROFILES;
	}

	// Propagate the rights on classes onto the links themselves (the external keys must have DEL_AUTO or DEL_SILENT
	//
	protected static function GetLinkActionGrant($iProfileId, $sClass, $sAction)
	{
		if (array_key_exists($sClass, self::$aLINKTOCLASSES))
		{
			// Get the grant for the remote classes. The resulting grant is:
			// - One YES => YES
			// - 100% undefined => undefined
			// - otherwise => NO
			//

			// Having write allowed on the remote class implies write + delete on the N-N link class
			if ($sAction == 'd')
			{
				$sRemoteAction = 'w';
			}
			elseif ($sAction == 'bd')
			{
				$sRemoteAction = 'bw';
			}
			else
			{
				$sRemoteAction = $sAction;
			}

			foreach (self::$aLINKTOCLASSES[$sClass] as $sRemoteClass)
			{
				$bUndefined = true;
				$bGrant = self::GetProfileActionGrant($iProfileId, $sRemoteClass, $sAction);
				if ($bGrant === true)
				{
					return true;
				}
				if ($bGrant === false)
				{
					$bUndefined = false;
				}
			}
			if (!$bUndefined)
			{
				return false;
			}
		}
		return null;
	}
}

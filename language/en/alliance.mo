<?php

/*
#############################################################################
#  Filename: alliance.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2011 madmax1991 for Project "SuperNova.WS"
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2008 Aleksandar Spasojevic <spalekg@gmail.com>
#  Copyright © 2005 - 2008 KGsystem
#############################################################################
*/

/**
*
* @package language
* @system [English]
* @version 31a9
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();


$lang = array_merge($lang, array(
  'ali_dip_title' => 'Diplomacy',
  'ali_dip_negotiate' => 'Negotiations',
  'ali_adm_msg_subject' => 'Alliance Maillist',
  'ali_dip_offers_your' => 'Your offers',
  'ali_dip_offers_to_you' => 'Offers to you',
  'ali_dip_offer_none' => 'No offers',
  'ali_dip_offer' => 'Offer',
  'ali_dip_offers' => 'Offers',
  'ali_dip_offer_new' => 'Start negotiations',
  'ali_dip_offer_to_ally' => 'Offer to Alliance',
  'ali_dip_offer_make' => 'Start negotiations',
  'ali_dip_offer_answer' => 'Alliance declined your offer',
  'ali_dip_offer_deny_reason' => 'You declared offer',
  'ali_dip_offer_to' => 'To Alliance',
  'ali_dip_offer_from' => 'From Alliance',
  'ali_dip_offer_deny' => 'Declare offer',
  'ali_dip_offer_accept' => 'Accept offer',
  'ali_dip_offer_delete' => 'Withdraw offer',
  'ali_dip_err_no_ally' => 'There is no such Alliance',
  'ali_dip_err_wrong_offer' => 'You can not make THIS offer',
  'ali_dip_err_offer_none' => 'No such offer',
  'ali_dip_err_offer_same' => 'You already have relation %s with this Alliance',
  'ali_dip_err_offer_alien' => 'This offer was made not for you!',
  'ali_dip_err_offer_accept_own' => 'You can not accept own offer!',
  'ali_dip_err_offer_empty' => 'Offer not defined',
  'ali_dip_relation_none' => 'No relations',
  'ali_dip_relation_change' => 'We accept offer of Alliance',
  'ali_dip_relation_change_to' => 'change relations to',
  'ali_dip_relation_accept' => 'accepted your offer to change relations to',
  'ali_dip_relations' => array(
    ALLY_DIPLOMACY_NEUTRAL => 'Neutral',
    ALLY_DIPLOMACY_WAR => 'War',
    ALLY_DIPLOMACY_PEACE => 'Peace',
    ALLY_DIPLOMACY_CONFEDERATION => 'Confederation',
    ALLY_DIPLOMACY_FEDERATION => 'Federation',
    ALLY_DIPLOMACY_UNION => 'Union',
    ALLY_DIPLOMACY_MASTER => 'Master',
    ALLY_DIPLOMACY_SLAVE => 'Slave',
  ),

  'ali_lessThen15min' => '&lt; 15 min',
  'ali_confirm' => 'Confirm',
  'ali_confirmation' => 'Confirmation',
  'ali_adm_disband' => 'To Dissolve The Alliance',
  'ali_adm_options' => 'Configuring Alliance',
  'ali_adm_transfer' => 'Send Alliance player',
  'ali_adm_return' => 'Return to management Alliance',
  'ali_adm_kick' => 'Exclude the player from Alliance',
  'ali_adm_kick_confirm' => 'Are you sure you want to exclude the player from Alliance?',
  'ali_adm_requests' => 'Applications',
  'ali_adm_newLeader' => 'SELECT PLAYER',
  'ali_adm_lastRank' => 'You cannot delete the only rank!',
  'ali_adm_rights_title' => 'Setting permissions',
  'ali_adm_rights_rank_new' => 'New rank',
  'ali_adm_rights_rank_delete' => 'Delete rank',
  'ali_adm_rights_rank_none' => 'No ranks',
  'ali_adm_rights_rank_name' => 'Rank',
  'ali_adm_rights_mass_mail' => 'Message to the entire Alliance',
  'ali_adm_rights_view_online' => 'View the online status of Members',
  'ali_adm_rights_helper' => 'Assistant Head (to pass the required rank founder)',
  'ali_adm_rights_legend' => 'Law Alliance',
  'ali_leaderRank' => 'Leader',
  'ali_defaultRankName' => 'Rookie',
  'ali_make_title' => 'Establishment Of The Alliance',
  'ali_make_tag_length' => '(from 3 to 8 characters)',
  'ali_make_name_length' => '(up to 35 characters)',
  'ali_make_confirm' => 'Create Alliance',
  'ali_req_cancel' => 'Remove application',
  'ali_req_candidate' => 'Candidate',
  'ali_req_characters' => 'Characters',
  'ali_req_date' => 'Filing date',
  'ali_req_deny_msg' => 'Your application for membership in the Alliance [%s] was rejected by.<br>Reason for refusal: "%s".<br>You can remove the application and try again later or enter into another Alliance.',
  'ali_req_deny_admin' => '<font color=red>Request already rejected</font>. However, until you have deleted an entry, you may change your mind',
  'ali_req_deny_reason' => 'Your request for membership is rejected',
  'ali_req_emptyList' => 'No requests for review',
  'ali_req_inAlly' => 'You are already a member of the Alliance.',
  'ali_req_make' => 'Apply now',
  'ali_req_not_allowed' => 'NO RECEPTION',
  'ali_req_otherRequest' => 'You have already submitted an application to the other Alliance.',
  'ali_req_template' => 'Please accept me in your Alliance',
  'ali_req_text' => 'Application text',
  'ali_req_title' => 'Enroll in the Alliance',
  'ali_req_waiting' => 'Your application for membership in the Alliance [%s] will be sent to the head of the Alliance.<br>You will be automatically notified of the decision.',
  'ali_req_check' => 'Application management',
  'ali_req_requestCount' => 'Applications',
  'ali_req_admin_title' => 'Review of applications',
  'ali_req_accept' => 'Accept the application',
  'ali_req_deny' => 'Reject the application',
  'ali_search_title' => 'Search Alliance',
  'ali_search_action' => 'Search',
  'ali_search_tip' => 'Search can be performed on the part of the name or tag of the Alliance',
  'ali_search_result_none' => 'No items found matching your search for Alliances.',
  'ali_search_result_tip' => 'Click on the name or tag of the Alliance that would see information about it.<br>Click "Enter" to send a request to join.',
  'ali_sys_name' => 'The Name',
  'ali_sys_tag' => 'Tag',
  'ali_sys_members' => 'Members',
  'ali_sys_notFound' => 'The Alliance does not exist',
  'ali_sys_memberName' => 'Member Name',
  'ali_sys_points' => 'Points',
  'ali_sys_lastActive' => 'Activity',
  'ali_sys_totalMembers' => 'Total',
  'ali_sys_clear' => 'Reset',
  'ali_sys_main_page' => 'Return to the home page of the Alliance',
  'ali_sys_joined' => 'Date of entry',
  'ali_frm_write' => 'Write in the Forum',
  'ali_info_title' => 'Information about the Alliance',
  'ali_info_internal' => 'Internal information',
  'ali_info_leave' => 'Leave Alliance',
  'Name' => 'The Name',
  'Tag' => 'Tag',
  'Members' => 'Members',
  'Accept_cand' => 'Accept',
  'alliance' => 'Alliance',
  'alliances' => 'Alliances',
  'Alliance_information' => 'Information about the Alliance',
  'Alliance_logo' => 'Alliance Logo',
  'alliance_tag' => 'Alliance Tag',
  'Allow_request' => 'Accept applications',
  'allyance_name' => 'Alliance Name',
  'ally_admin' => 'Alliance Management',
  'ally_been_maked' => 'Alliance %s successfully created',
  'ally_description' => 'Alliance Description',
  'ally_dissolve' => 'Delete Alliance',
  'Ally_info_1' => 'Information about the Alliance',
  'ally_maked' => '%s created',
  'Ally_nodescription' => 'The Alliance has no description',
  'ally_notexist' => 'Alliance no longer exists',
  'Ally_not_exist' => 'Unfortunately there is no information about the Alliance',
  'Ally_transfer' => 'Transfer Alliance',
  'All_players' => 'All players',
  'always_exist' => '%s already exists',
  'Aplication_acepted' => 'You have taken',
  'Aplication_hello' => 'Welcome<br>Alliance:',
  'Aplication_rejected' => 'Your application for membership in the Alliance was rejected.<br>The Reason:<br>',
  'apply_cantbeadded' => 'Request failed, try again!',
  'apply_registered' => 'Your request has been sent.<br><br><a href=alliance.php>Back</a>',
  'Back' => 'Back',
  'Canceld_req_text' => 'You have cancelled for [%s]',
  'Change' => 'Change',
  'ch_allyname' => 'Change Alliance Name',
  'ch_allytag' => 'Change Alliance Tag',
  'Circular_message' => 'Circular Alliance',
  'Circular_sended' => 'Message sent successfully',
  'Clear' => 'Clear',
  'Click_writerequest' => 'Click here to write an application',
  'Continue' => 'Continue',
  'Delete_apply' => 'Reject the application',
  'Denied_access' => 'Access forbidden!',
  'Destiny' => 'Recipient',
  'Exit_of_this_alliance' => 'Exit Alliance',
  'External_text' => 'External text',
  'Founder' => 'Founder',
  'Founder_name' => 'Founder Name',
  'Function' => 'Function',
  'Go_out_welldone' => 'You have successfully left the Alliance',
  'have_not_name' => 'Type a name for the Alliance',
  'have_not_tag' => 'Type the Tag of the Alliance',
  'Help' => 'Assistance',
  'Inactive' => 'Inactive',
  'Inner_section' => 'Inner text',
  'Internal_text' => 'Inner text',
  'knowed_allys' => 'Current Alliances',
  'laws_config' => 'Setting permissions',
  'Main_Page' => 'Home page',
  'make_alliance' => 'Establishment Of The Alliance',
  'make_alliance_owner' => 'Create Alliance',
  'max' => 'Max.',
  'member' => 'Member',
  'memberlist_view' => 'View a list of members',
  'members' => 'Participants',
  'members_admin' => 'Managing your members',
  'Members_list' => 'List of members',
  'members_who_recived_message' => 'The following members of the Alliance received a message:',
  'Message' => 'Message',
  'Motive_optional' => 'Reason (optional)',
  'New_name' => 'New Alliance Name',
  'New_tag' => 'New Tag',
  'not_allow_request' => 'Reject the application',
  'Novate' => 'Rookie',
  'Number' => 'Number',
  'Off' => 'Offline',
  'Ok' => 'Ok',
  'On' => 'Online',
  'Online' => 'Status',
  'Options' => 'Options',
  'Position' => 'Status',
  'Public_text_of_alliance' => 'External text',
  'Range' => 'Rank',
  'Reject_cand' => 'Reject',
  'Reload' => 'Example',
  'Repel' => 'Repel',
  'requests_view' => 'Viewing applications',
  'Request_answer' => 'Request rejected',
  'Request_date' => 'Request date',
  'Request_text' => 'Application text',
  's' => '[N/A]',
  'Search' => 'Search',
  'searchd_ally_avail' => 'Found Alliances:',
  'search_alliance' => 'Search',
  'Send' => 'Send',
  'Send_Apply' => 'To accept the application',
  'Send_circular_mail' => 'Send a message to the entire Alliance',
  'Set_range' => 'Change in rank',
  'Show_of_request_text' => 'Application text',
  'Texts' => 'Editing text',
  'Text_mail' => 'Send a message to the entire Alliance',
  'top10alliance' => 'Top 10 Alliances',
  'transfer' => 'Transfer',
  'transfer_ally' => 'Transfer Alliance',
  'transfer_to' => 'Send Alliance player:',
  'Want_go_out' => 'Are you sure you want to leave the Alliance?',
  'write_apply' => 'Apply now',
  'your_alliance' => 'Your Alliance',
  'your_apply' => 'Your application',
  'ali_info_leave_success' => '',


  'opt_avatar' => 'Logo',
  'opt_avatar_remove' => 'Remove logo',
  'opt_avatar_search' => 'Seatch in Google',
  'opt_upload' => 'Upload',

  'opt_msg_avatar_removed' => 'Logo succesfully removed',
  'opt_msg_avatar_uploaded' => 'Logo succesfully changed',
  'opt_msg_avatar_error_delete' => 'Error deleting logo file. Please, contact server Administration',
  'opt_msg_avatar_error_writing' => 'Error saving logo file. Please, contact server Administration',
  'opt_msg_avatar_error_upload' => 'Error loading logo image %1. Please, contact server Administration',
  'opt_msg_avatar_error_unsupported' => 'Uploaded image format not supported. Only supported JPG, GIF, PNG up to 200KB',

  'ali_admin_mercenaries' => 'Alliance\'s mercenaries',
  'ali_admin_techs' => 'Alliance\'s technologies',

  'ali_res_title' => 'Alliance\'s resources',
  'ali_res_player_bonus' => 'Member\s bonus',
  'ali_res_transfer' => 'Transfer',
  'ali_res_transfer_long' => 'Transfer to Alliance',
  'ali_res_no_resources' => 'Alliance has no resources',
  'ali_res_transfer_dm_log' => 'Member \'%s\' transferred %d DM to account of Alliance [%s]',

  'ali_res_err_not_enough' => 'Ypu don\'t have enough %s!',
  'ali_res_err_wrong_unit' => 'You can only transfer resources to Ally!',

));

?>

<?php

/**
 * This file is used to collect util API functions not related to any particular
 * CiviCRM entity. Since so much of the interface has moved to the client side,
 * we need server-side code to handle things like managing dependencies.
 *
 * @package Tournament_APIv3
 * @subpackage API_Tournament_
 */

/**
 * This function returns the permissions defined by the tournament extension.
 *
 * @param array $params
 *   Not presently used.
 * @return array
 */
function civicrm_api3_tournament_util_getperms($params) {
  $results = array();

  foreach (CRM_Tournament_Permission::getTournamentPermissions() as $k => $v) {
    $results[] = array(
      'description' => $v[1],
      'label' => $v[0],
      'name' => $k,
      'safe_name' => strtolower(str_replace(array(' ', '-'), '_', $k)),
    );
  }

  return civicrm_api3_create_success($results, "TournamentUtil", "getperms", $params);
}

function _civicrm_api3_tournament_util_getsupportingdata_spec(&$params) {
  $params['controller'] = array(
    'title' => 'Controller',
    'description' => 'For which Angular controller is supporting data required?',
    'type' => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
  );
}

/**
 * This function returns supporting data for various JavaScript-driven interfaces.
 *
 * The purpose of this API is to provide limited access to general-use APIs to
 * facilitate building user interfaces without having to grant users access to
 * APIs they otherwise shouldn't be able to access.
 *
 * @param array $params
 *   @see _civicrm_api3_tournament_util_getsupportingdata_spec()
 * @return array
 */
function civicrm_api3_tournament_util_getsupportingdata($params) {
  $results = array();

  $controller = CRM_Utils_Array::value('controller', $params);
  if ($controller === 'Tournament') {
    $relTypes = civicrm_api3('OptionValue', 'get', array(
      'option_group_id' => CRM_Tournament_BAO_Contact::RELATIONSHIP_OPTION_GROUP,
      'options' => array('limit' => 0),
    ));
    $results['relationship_types'] = $relTypes['values'];

    $results['phone_types'] = CRM_Core_OptionGroup::values("phone_type", FALSE, FALSE, TRUE);
    $results['tournament_general_settings_help_text'] = civicrm_api3('Setting', 'getvalue', array(
      'name' => "tournament_general_settings_help_text",
    ));

    //Fetch the Defaults from saved settings.
    $defaults = CRM_Tournament_BAO_::composeDefaultSettingsArray();

    //Allow other extensions to modify the defaults
    CRM_Tournament_Hook::projectDefaultSettings($defaults);

    $results['defaults'] = $defaults;
  }

  if ($controller === 'TournamentRoleCtrl') {
    $results['roles'] = CRM_Core_OptionGroup::values('tournament_role', FALSE, FALSE, TRUE);
  }

  $results['use_profile_editor'] = CRM_Tournament_Permission::check(array("access CiviCRM","profile listings and forms"));

  $results['profile_audience_types'] = CRM_Tournament_BAO_::getProfileAudienceTypes();

  if (!$results['use_profile_editor']) {
    $profiles = civicrm_api3('UFGroup', 'get', array("return" => "title", "sequential" => 1, 'options' => array('limit' => 0)));
    $results['profile_list'] = $profiles['values'];
  }


  return civicrm_api3_create_success($results, "TournamentUtil", "getsupportingdata", $params);
}
}

/**
 * This function returns the enabled countries in CiviCRM.
 *
 * @param array $params
 *   Not presently used.
 * @return array
 */
function civicrm_api3_tournament_util_getcountries($params) {
  $settings = civicrm_api3('Setting', 'get', array(
    "return" => array("countryLimit", "defaultContactCountry"),
    "sequential" => 1,
  ));


  $countryParams = array(
    "options" => array("limit" => 0),
  );

  if (!empty($settings['values'][0]['countryLimit'])) {
    $countryParams["id"] = array("IN" => $settings['values'][0]['countryLimit']);
  }

  $countries = civicrm_api3('Country', 'get', $countryParams);

  $results = $countries['values'];
  foreach ($results as $k => $country) {
    // since we are wrapping CiviCRM's API, and it provides even boolean data
    // as quoted strings, we'll do the same
    $results[$k]['is_default'] = ($country['id'] === $settings['values'][0]['defaultContactCountry']) ? "1" : "0";
  }

  return civicrm_api3_create_success($results, "TournamentUtil", "getcountries", $params);
}

/**
 * This function returns the active, searchable custom fields in the
 * Tournament_Information custom field group.
 *
 * @param array $params
 *   Not presently used.
 * @return array
 */
function civicrm_api3_tournament_util_getcustomfields($params) {
  $allowedCustomFieldTypes = array('AdvMulti-Select', 'Autocomplete-Select',
    'CheckBox', 'Multi-Select', 'Radio', 'Select', 'Text');

  $customGroupAPI = civicrm_api3('CustomGroup', 'getsingle', array(
    'extends' => 'Individual',
    'name' => 'Tournament_Information',
    'api.customField.get' => array(
      'html_type' => array('IN' => $allowedCustomFieldTypes),
      'is_active' => 1,
      'is_searchable' => 1
    ),
    'options' => array('limit' => 0),
  ));
  $customFields = $customGroupAPI['api.customField.get']['values'];

  $optionListIDs = _tournament_util_getOptionGroupIds($customFields);
  $optionValueAPI = civicrm_api3('OptionValue', 'get', array(
    'is_active' => 1,
    'opt_group_id' => array('IN' => $optionListIDs),
    'options' => array(
      'limit' => 0,
      'sort' => 'weight',
    )
  ));

  $optionData = _tournament_util_groupBy($optionValueAPI['values'], 'option_group_id');
  foreach($customFields as &$field) {
    $optionGroupId = CRM_Utils_Array::value('option_group_id', $field);
    if ($optionGroupId) {
      $field['options'] = $optionData[$optionGroupId];

      // Boolean fields don't use option groups, so we supply one
    } elseif ($field['data_type'] === 'Boolean' && $field['html_type'] === 'Radio') {
      $field['options'] = array(
        array (
          'is_active' => 1,
          'is_default' => 1,
          'label' => ts("Yes", array('domain' => 'org.agloa.tournament')),
          'value' => 1,
          'weight' => 1,
        ),
        array (
          'is_active' => 1,
          'is_default' => 0,
          'label' => ts("No", array('domain' => 'org.agloa.tournament')),
          'value' => 0,
          'weight' => 2,
        ),
      );
    }
  }

  return civicrm_api3_create_success($customFields, "TournamentUtil", "getcustomfields", $params);
}

/**
 * @param array $customFields
 *   api.customField.get.values
 * @return array
 */
function _tournament_util_getOptionGroupIds(array $customFields) {
  $optionListIDs = array();
  foreach ($customFields as $field) {
    if (!empty($field['option_group_id'])) {
      $optionListIDs[] = $field['option_group_id'];
    }
  }
  return array_unique($optionListIDs);
}

/**
 * Splits an array into sets based on the $property.
 *
 * Inspired by underscorejs's _.groupBy function.
 *
 * @param array $collection
 * @param type $property
 * @return array
 */
function _tournament_util_groupBy(array $collection, $property) {
  $result = array();
  foreach ($collection as $item) {
    $key = CRM_Utils_Array::value($property, $item);
    if (!array_key_exists($key, $result)) {
      $result[$key] = array();
    }
    $result[$key][] = $item;
  }

  return $result;
}

<?php

class CRM_Tournament_BAO_TournamentSponsor extends CRM_Tournament_DAO_TournamentSponsor {

  /**
   * Create a new TournamentSponsor based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Tournament_DAO_TournamentSponsor|NULL
   **/
  public static function create($params) {
    $className = 'CRM_Tournament_DAO_TournamentSponsor';
    $entityName = 'TournamentSponsor';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } 

}

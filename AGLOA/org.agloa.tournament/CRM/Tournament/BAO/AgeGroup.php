<?php

class CRM_Tournament_BAO_AgeGroup extends CRM_Tournament_DAO_AgeGroup {

  /**
   * Create a new AgeGroup based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Tournament_DAO_AgeGroup|NULL
   **/
  public static function create($params) {
    $className = 'CRM_Tournament_DAO_AgeGroup';
    $entityName = 'AgeGroup';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } 

}

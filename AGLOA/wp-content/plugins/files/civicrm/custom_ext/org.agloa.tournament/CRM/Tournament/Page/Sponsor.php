<?php

class CRM_Tournament_Page_Sponsor extends CRM_Core_Page {

  /**
   * Get userContext params.
   *
   * @param int $mode
   *   Mode that we are in.
   *
   * @return string
   */
  public function userContextParams($mode = NULL) {
    return 'reset=1&action=browse';
  }

  /**
   * Allow objects to be added based on permission.
   *
   * @param int $id
   *   The id of the object.
   * @param int $name
   *   The name or title of the object.
   *
   * @return string
   *   permission value if permission is granted, else null
   */
  public function checkPermission($id, $name) {
    return CRM_Core_Permission::EDIT;
  }

  /**
   * Allows the derived class to add some more state variables to
   * the controller. By default does nothing, and hence is abstract
   *
   * @param CRM_Core_Controller $controller
   *   The controller object.
   */
  public function addValues($controller) {
  }
  
	/**
	 * Get BAO Name.
	 *
	 * @return string
	 *   Classname of BAO.
	 */
	public function getBAOName() {
		return 'CRM_Tournament_BAO_TournamentSponsor';
	}

  /**
   * Class constructor.
   *
   * @param string $title
   *   Title of the page.
   * @param int $mode
   *   Mode of the page.
   *
   * @return \CRM_Core_Page_Basic
   */
  public function __construct($title = NULL, $mode = NULL) {
    parent::__construct($title, $mode);
  }

  public function run() {
/*     $sponsor["id"] = "AGLOA";
    $sponsor["label"] = "Academic Games Leagues of America, Inc.";
    $sponsor["description"] = "verbosity";
    $rows[] = $sponsor;
    $this->assign('rows', $rows); */
    
    $this->browse(NULL);
    return parent::run();
  }
  
  /**
   * Browse all entities.
   */
  public function browse() {
  	$baoString = $this->getBAOName();
  	$object = new $baoString();
  
  	$values = array();
  
  	// lets make sure we get the stuff sorted by name if it exists
  	$fields = &$object->fields();
  	$key = '';
  	if (!empty($fields['title'])) {
  		$key = 'title';
  	}
  	elseif (!empty($fields['label'])) {
  		$key = 'label';
  	}
  	elseif (!empty($fields['name'])) {
  		$key = 'name';
  	}
  
/*   	if (trim($sort)) {
  		$object->orderBy($sort);
  	}
  	elseif ($key) {
  		$object->orderBy($key . ' asc');
  	} */
  
  	$object->find();
  	while ($object->fetch()) {
  		if (!isset($object->mapping_type_id) ||
  				// "1 for Search Builder"
  				$object->mapping_type_id != 1
  		) {
  				$values[$object->id] = array();
  				CRM_Core_DAO::storeValues($object, $values[$object->id]);
  
  				// populate action links
  				//$this->action($object, $action, $values[$object->id], $links);
  
  				if (isset($object->mapping_type_id)) {
  					$mappintTypes = CRM_Core_PseudoConstant::get('CRM_Core_DAO_Mapping', 'mapping_type_id');
  					$values[$object->id]['mapping_type'] = $mappintTypes[$object->mapping_type_id];
  				}
  			}
  		
  	}
  	$this->assign('rows', $values);
  }
}

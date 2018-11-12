<?php

class CRM_Tournament_Page_Tournament extends CRM_Tournament_Page_Base {
	/**
	 * Get BAO Name.
	 *
	 * @return string
	 *   Classname of BAO.
	 */
	public function getBAOName() {
		return 'CRM_Tournament_BAO_Tournament';
	}
	
	/**
	 * Get name of edit form.
	 *
	 * @return string
	 *   Classname of edit form.
	 */
	public function editForm() {
		return 'CRM_Tournament_Form_Tournament';
	}
	
	/**
	 * Get edit form name.
	 *
	 * @return string
	 *   name of this page.
	 */
	public function editName() {
		return $this->_title;
	}
	
	/**
	 * Get user context.
	 *
	 * @param null $mode
	 *
	 * @return string
	 *   user context.
	 */
	public function userContext($mode = NULL) {
		return 'civicrm/tournament';
	}
	
	/**
	 * Get action Links.
	 *
	 * @return array
	 *   (reference) of action links
	 */
	public function &links() {
		if (!(self::$_links)) {
			self::$_links = array(
					CRM_Core_Action::UPDATE => array(
							'name' => ts('Edit'),
							'url' => 'civicrm/tournament',
							'qs' => 'action=update&id=%%id%%&reset=1',
							'title' => ts('Edit'),
					),
					CRM_Core_Action::DISABLE => array(
							'name' => ts('Disable'),
							'ref' => 'crm-enable-disable',
							'title' => ts('Disable'),
					),
					CRM_Core_Action::ENABLE => array(
							'name' => ts('Enable'),
							'ref' => 'crm-enable-disable',
							'title' => ts('Enable'),
					),
					CRM_Core_Action::DELETE => array(
							'name' => ts('Delete'),
							'url' => 'civicrm/tournament',
														'qs' => 'action=delete&id=%%id%%',
							'title' => ts('Delete'),
					),
			);
		}
		return self::$_links;
	}
	
/* 	public function run() {
		//var_dump($this);
		//var_dump($_SESSION);
		// Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
		//   CRM_Utils_System::setTitle(ts('Tournament'));

		$this->assign('baseURL', 'admin.php?page=CiviCRM&q=');
		$this->assign('eventID', 2);
		parent::run(); // Otherwise, not much happens.
	} */
}

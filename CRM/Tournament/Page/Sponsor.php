<?php
class CRM_Tournament_Page_Sponsor extends CRM_Tournament_Page_Base {
  
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
	 * Get name of edit form.
	 *
	 * @return string
	 *   Classname of edit form.
	 */
	public function editForm() {
		return '';
	}
	
	/**
	 * Get edit form name.
	 *
	 * @return string
	 *   name of this page.
	 */
	public function editName() {
		return '';
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
							'url' => 'civicrm/tournament/sponsor',
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
							'url' => 'civicrm/tournament/sponsor',
														'qs' => 'action=delete&id=%%id%%',
							'title' => ts('Delete'),
					),
			);
		}
		return self::$_links;
	}
}
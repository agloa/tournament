<?php

class CRM_Tournament_Page_User extends CRM_Core_Page {

	public function run() {
		$debug = true;
		$this->assign('debug', $debug);

		// Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
		CRM_Utils_System::setTitle(ts('Tournament Administration'));

		// Find the contact ID of the logged in user
		$session = CRM_Core_Session::singleton();
		$LoggedInContactID = $session->getLoggedInContactID();

		try{
			$result = civicrm_api3('Contact', 'get', array(
					'sequential' => 1,
					'return' => array(
							"id"
							, "contact_sub_type"
							, "sort_name"
							, "display_name"
							, "birth_date"
							, "first_name"
							, "middle_name"
							, "gender_id"
							, "last_name"),
					'id' => $LoggedInContactID
			));

			$user = $result['values'][0];

			$this->assign('user', $user);

			$result = civicrm_api3('Event', 'get', array(
					'sequential' => 1,
					'return' => array("id", "title", "start_date", "end_date", "registration_start_date", "registration_end_date"),
					'event_type_id' => "Tournament",
					'is_online_registration' => 1,
					'is_active' => 1,
					'options' => array('sort' => "start_date DESC"),
			));
		}catch (CiviCRM_API3_Exception $e) {
			// Handle error here.
			$errorMessage = $e->getMessage();
			$errorCode = $e->getErrorCode();
			$errorData = $e->getExtraParams();
			var_dump( array(
					'is_error' => 1,
					'error_message' => $errorMessage,
					'error_code' => $errorCode,
					'error_data' => $errorData,
			));
		}

		$tournament = $result['values'][0];
		$this->assign('tournament', $tournament);

		parent::run();

		if ($debug){
			var_dump($result);
			var_dump($LoggedInContactID);
			var_dump($session);
		}
	}

}

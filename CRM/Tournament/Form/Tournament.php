<?php

/**
 * Form controller class
 *
 * @see https://wiki.civicrm.org/confluence/display/CRMDOC/QuickForm+Reference
 */
class CRM_Tournament_Form_Tournament extends CRM_Tournament_Form_BaseForm {
	/**
	 * The id of the object being edited / created
	 *
	 * @var int
	 */
	protected $_id;
	
	/**
	 * The default values for form fields.
	 *
	 * @var int
	 */
	protected $_values;
	
	/**
	 * The name of the BAO object for this form.
	 *
	 * @var string
	 */
	protected $_BAOName;
	
	/**
	 * Explicitly declare the form context.
	 */
	public function getDefaultContext() {
		return 'create';
	}
	
	/**
	 * Basic setup.
	 */
	public function preProcess() {
		$session = CRM_Core_Session::singleton();
		Civi::resources()->addStyleFile('civicrm', 'css/admin.css');
		Civi::resources()->addScriptFile('civicrm', 'js/crm.admin.js');
	
		$this->_id = $this->get('id');
		$this->_BAOName = $this->get('BAOName');
		$this->_values = array();
		if (isset($this->_id)) {
			$params = array('id' => $this->_id);
			// this is needed if the form is outside the CRM name space
			$baoName = $this->_BAOName;
			$baoName::retrieve($params, $this->_values);
		}
		
    $session->pushUserContext(CRM_Utils_System::url($url, $params));
	}
	
	/**
	 * Set default values for the form. Note that in edit/view mode
	 * the default values are retrieved from the database
	 *
	 *
	 * @return array
	 */
	public function setDefaultValues() {
		// Fetch defaults from the db
		if (!empty($this->_id) && empty($this->_values) && CRM_Utils_Rule::positiveInteger($this->_id)) {
			$this->_values = array();
			$params = array('id' => $this->_id);
			$baoName = $this->_BAOName;
			$baoName::retrieve($params, $this->_values);
		}
		$defaults = $this->_values;
	
		// Allow defaults to be set from the url
		if (empty($this->_id) && $this->_action & CRM_Core_Action::ADD) {
			foreach ($_GET as $key => $val) {
				if ($this->elementExists($key)) {
					$defaults[$key] = $val;
				}
			}
		}

		if ($this->_action == CRM_Core_Action::DELETE &&
				isset($defaults['name'])
		) {
			$this->assign('delName', $defaults['name']);
		}

		// its ok if there is no element called is_active
		$defaults['is_active'] = ($this->_id) ? CRM_Utils_Array::value('is_active', $defaults) : 1;
		if (!empty($defaults['parent_id'])) {
			$this->assign('is_parent', TRUE);
		}
		return $defaults;
	}

	/**
	 * Add standard buttons.
	 */
	public function buildQuickForm() {
		if ($this->_action & CRM_Core_Action::VIEW || $this->_action & CRM_Core_Action::PREVIEW) {
			$this->addButtons(array(
					array(
							'type' => 'cancel',
							'name' => ts('Done'),
							'isDefault' => TRUE,
					),
			)
			);
		}
		else {
			$this->addButtons(array(
					array(
							'type' => 'next',
							'name' => $this->_action & CRM_Core_Action::DELETE ? ts('Delete') : ts('Save'),
							'isDefault' => TRUE,
					),
					array(
							'type' => 'cancel',
							'name' => ts('Cancel'),
					),
			)
			);
		}
		
		if ($this->_action & CRM_Core_Action::DELETE) {
			return;
		}
    $this->applyFilter('__ALL__', 'trim');

    $this->add('text',
      'title',
      ts('Title'),
      CRM_Core_DAO::getAttribute('CRM_Core_DAO_OptionValue', 'title'),
      TRUE
    );
    
    $this->add('wysiwyg', 'description',
    		ts('Description'),
      CRM_Core_DAO::getAttribute('CRM_Core_DAO_OptionValue', 'description'),
      TRUE
    );
	}
	
	/**
	 * Process the form submission.
	 */
	public function postProcess() {
		if ($this->_action & CRM_Core_Action::DELETE) {	
			if (CRM_Core_BAO_OptionValue::del($this->_id)) {
				CRM_Core_Session::setStatus(ts('Selected record has been deleted.'), ts('Record Deleted'), 'success');
			}
			else {
				CRM_Core_Session::setStatus(ts('Selected record has not been deleted.'), ts('Sorry'), 'error');
			}
		}
		else {
			$ids = array();
			$params = $this->exportValues();
	
			// set value of filter if not present in params
			if ($this->_id && !array_key_exists('filter', $params)) {
					$params['filter'] = CRM_Core_DAO::getFieldValue('CRM_Tournament_DAO_Base', $this->_id, 'filter', 'id');
			}
	
			CRM_Core_Session::setStatus(ts('The record has been saved.'), ts('Saved'), 'success');
		}
	}
}

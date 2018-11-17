<?php

require_once 'CRM/Core/Form.php';

/**
 * Form controller class
 *
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC43/QuickForm+Reference
 */
class CRM_Tournament_Form_RegistrationGroup extends CRM_Core_Form {
  public function buildQuickForm() {
    // add form elements
    $this->add('text', 'Name', ts('School/District'), '', TRUE /* is required*/);
    $this->add('text', 'Email', ts('Email'), '', TRUE /* is required*/);
    $this->add('text', 'Last', ts('Last Name'), '', TRUE /* is required*/);
    $this->add('text', 'First', ts('First Name'), '', TRUE /* is required*/);
    $this->add('text', 'Middle', ts('Middle Name'));
    $this->add('select', 'IndividualSuffix', ts('Individual Suffix'), $this->getSuffixOptions()); // list of options
    
    $this->addButtons(array(
      array(
        'type' => 'submit',
        'name' => ts('Submit'),
        'isDefault' => TRUE,
      ),
    ));

    // export form elements
    $this->assign('elementNames', $this->getRenderableElementNames());
    parent::buildQuickForm();
  }

  public function postProcess() {
    $values = $this->exportValues();
    $options = $this->getSuffixOptions();
    CRM_Core_Session::setStatus(ts('You picked color "%1"', array(
      1 => $options[$values['favorite_color']]
    )));
    parent::postProcess();
  }

  public function getSuffixOptions() {
    $options = array(
      '' => ts('- select -'),
      'Sr.' => ts('Sr.'),
      'Jr.' => ts('Jr.'),
      'II' => ts('II'),
      'III' => ts('III'),
    );
    return $options;
  }

  /**
   * Get the fields/elements defined in this form.
   *
   * @return array (string)
   */
  public function getRenderableElementNames() {
    // The _elements list includes some items which should not be
    // auto-rendered in the loop -- such as "qfKey" and "buttons".  These
    // items don't have labels.  We'll identify renderable by filtering on
    // the 'label'.
    $elementNames = array();
    foreach ($this->_elements as $element) {
      /** @var HTML_QuickForm_Element $element */
      $label = $element->getLabel();
      if (!empty($label)) {
        $elementNames[] = $element->getName();
      }
    }
    return $elementNames;
  }
}

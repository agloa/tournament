<?php

/**
 * Form controller class
 *
 * @see https://wiki.civicrm.org/confluence/display/CRMDOC/QuickForm+Reference
 */
class CRM_Tournament_Form_Players extends CRM_Core_Form {
  public function buildQuickForm() {

    // add form elements (how to get these from entity)?
    $this->add('text', 'id', 'ID', '', TRUE); // Auto-increment
    $this->add('text', 'last_name', ts('Last'), '', TRUE);
    $this->add('text', 'first_name', ts('First'), '', TRUE);
    $this->add('text', 'middle_name', ts('Middle'));
    
    $this->add(
      'select', // field type
      'prefix', // field name
      ts('Prefix'), // field label
      $this->getPrefixes() // list of options
    );
    
    $this->add(
      'select', // field type
      'suffix', // field name
      ts('Suffix'), // field label
      $this->getSuffixes() // list of options
    );
    
    $this->add(
      'select', // field type
      'gender', // field name
      ts('Gender<br/>(In case we need to make housing assignments.)'), // field label
      $this->getGenders() // list of options
      , TRUE
    );
    $params = array(
    		'minDate' => '2000-01-01', // 18 years ago
    		'maxDate' => '2007-12-31', // 10 years ago
    		'time' => FALSE,
    );
    $this->add('datepicker', 'birth_date', ts('Birth Date<br/>(Helpful for age group checking.)'), '', TRUE, $params);
    
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
    $options = $this->getColorOptions();
    CRM_Core_Session::setStatus(ts('You picked color "%1"', array(
      1 => $options[$values['favorite_color']],
    )));
    parent::postProcess();
  }

  public function getPrefixes() {// TODO: Populate from table
    $options = array(
      '' => ts('- select -'),
      'Mr.' => ts('Mr.'),
      'Ms.' => ts('Ms.'),
      'Miss' => ts('Miss'),
      'Br.' => ts('Br.'),
      'Dr.' => ts('Dr.'),
    );
    return $options;
  }

  public function getSuffixes() { // TODO: Populate from table
    $options = array(
      '' => ts('- select -'),
      '0' => ts('Sr.'),
      '1' => ts('Jr.'),
      '2' => ts('II'),
      '3' => ts('III'),
      '4' => ts('IV'),
    );
    return $options;
  }

  public function getGenders() { // TODO: Populate from table
    $options = array(
      '' => ts('- select -'),
      'M' => ts('M'),
      'F' => ts('F'),
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

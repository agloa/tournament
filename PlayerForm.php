<?php
require_once 'HTML/QuickForm2.php';
require_once 'HTML/QuickForm2/Element/Select.php';
require_once 'HTML/QuickForm2/Renderer.php';
require_once 'HTML/QuickForm2/Renderer/Plugin.php';
require_once 'HTML/QuickForm2/JavascriptBuilder.php';
require_once("tournament.settings.php");
require_once 'DB/DataObject/FormBuilder.php';

$className = 'Player';
require_once(classFile($className));

$do = new $className;
//$fg =& DB_DataObject_FormBuilder::create($do);

// Instantiate the HTML_QuickForm2 object
$form = new HTML_QuickForm2('Player');

// Set defaults for the form elements
$form->addDataSource(new HTML_QuickForm2_DataSource_Array(array(	 
	'last_name'   => 'Sample',
	'first_name'  => 'One',
)));

$nameFieldSet = $form->addElement('fieldset')->setLabel('Player Name');

$last_name = $nameFieldSet->addElement('text', last_name, array('size' => 64, 'maxlength' => 64))->setLabel('Last:');
$last_name->addFilter('trim');
$last_name->addRule('notregex', 'Should not contain numerals.', '/[0-9]/', HTML_QuickForm2_Rule::ONBLUR_CLIENT_SERVER);
$last_name->addRule('required', 'Please enter last name', null ,HTML_QuickForm2_Rule::ONBLUR_CLIENT_SERVER);

$first_name = $nameFieldSet->addElement('text', first_name, array('size' => 64, 'maxlength' => 64))->setLabel('First:');
$first_name->addFilter('trim');
$first_name->addRule('notregex', 'Should not contain numerals.', '/[0-9]/', HTML_QuickForm2_Rule::ONBLUR_CLIENT_SERVER);
$first_name->addRule('required', 'Please enter first name', null, HTML_QuickForm2_Rule::ONBLUR_CLIENT_SERVER);

$middle_name = $nameFieldSet->addElement('text', null, array('size' => 64, 'maxlength' => 64))->setLabel('Middle:');
$middle_name->addFilter('trim');
$middle_name->addRule('notregex', 'Should not contain numerals.', '/[0-9]/', HTML_QuickForm2_Rule::ONBLUR_CLIENT_SERVER);

$optionalFieldSet = $nameFieldSet->addElement('fieldset')->setLabel('Helpful for additional identification and age group verification.');

$prefix = $optionalFieldSet->addElement('select', 'Prefix', null, array('options' => selectOptions("Prefix")));
$suffix = $optionalFieldSet->addElement('select', 'Suffix', null, array('options' => selectOptions("Suffix")));
$gender = $optionalFieldSet->addElement('select', 'Gender', null, array('options' => selectOptions("Gender")));

$birthDate = $optionalFieldSet->addElement(
		'date', 'birthDate', null,
		array('label' => 'Approximate Birth Date:'
				, 'format' => 'd-F-Y'
				, 'minYear' => date('Y')
				, 'maxYear' => 2007
				, 'addEmptyOption' => true
				) // ten years ago
);

$form->addElement('submit', null, array('value' => 'Submit'));

// Try to validate a form
if ($form->validate()) {
	echo '<h1>Submitted: ' . htmlspecialchars($last_name->getValue() 
			. ', ' . $first_name->getValue() 
			. ' '  . $middle_name->getValue() 
			. ' '  . $prefix->getValue() 
			. ' '  . $suffix->getValue() 
			. ' '  . $gender->getValue() 
	) . '</h1>';
	var_dump($birthDate->getValue() );
	exit;
}

// Output the form
$renderer = HTML_QuickForm2_Renderer::factory('default');
$form->render($renderer);

echo $renderer->getJavascriptBuilder()->getLibraries(true, true);
echo $renderer;

function selectOptions($className){
	$classFile = classFile($className);
	require_once($classFile);
	
	// get all rows from table
	$object = new $className;
	$selectOptions[] = "- optionally select a " . strtolower($className) . " -";
	$rows = $object->rows();
	foreach ($rows as $row) $selectOptions[$row['value']] = $row['label'];
	
	return $selectOptions;
}
?>
<?php
define('SMARTY_DIR', '/usr/share/php/smarty3/');
require_once(SMARTY_DIR . 'Smarty.class.php');
require_once("tournament.settings.php");

// The smartySetup.php file is a good place to load required application library files, and you can do that right here.
// An example:
// require('guestbook/guestbook.lib.php');

class Tournament_Smarty extends Smarty {
	function __construct()
	{
		//** un-comment the following line to show the debug console
		//$this->debugging = true;
		
		// Class Constructor.
		// These automatically get set with each new instance.
	
		parent::__construct();
	
		// Smarty Dirs
		$this->setTemplateDir('templates/');
		$this->setCompileDir('templates_c/');
		$this->setConfigDir('configs/');
		$this->setCacheDir('cache/');
		//$smarty->testInstall();
	
		$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
		
    $this->assign('rootURL', WebOption('rootURL'));
    $this->assign('appName', WebOption('appName'));
	}

}
?>
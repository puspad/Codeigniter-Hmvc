<?php
class Testc extends MX_Controller 
{
    public function __construct() 
 	{
 		parent::__construct();
 	}
     public function view() 
 	{
 		$this->layout->siteLayout('TestModules/TestV.php');
 	}
}
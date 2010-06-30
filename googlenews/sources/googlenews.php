<?php
require_once('include/connectors/sources/ext/rest/rest.php');

class ext_rest_googlenews extends ext_rest 
{
	public function __construct()
	{
		parent::__construct();
		$this->_enable_in_wizard = false;
		$this->_enable_in_hover = true;
	}
	
	/*
	 * getItem
	 * 
	 * As the google news connector does not have a true API call, we simply
	 * override this abstract method
	 */
	public function getItem($args=array(), $module=null) {}


	/*
	 * getList
	 * 
	 * As the google news connector does not have a true API call, we simply
	 * override this abstract method
	 */	
	public function getList($args=array(), $module=null) {}
}
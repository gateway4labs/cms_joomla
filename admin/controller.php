<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
class LMS4LabsController extends JController
{
    
	/**
	 * display task
	 *
	 * @return void
	 */
	function display($cachable = false) 
	{
		JRequest::setVar('view', JRequest::getCmd('view', 'LMS4Labses'));
 
        // call parent behavior
        parent::display($cachable);
	}
}

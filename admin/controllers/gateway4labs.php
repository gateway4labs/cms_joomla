<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
/**
 * HelloWorld Controller
 */
class LMS4LabsControllerLMS4Labs extends JControllerForm
{
    public function __construct($config = array()) 
        { 
            $this->view_list = 'gateway4labses'; 
            parent::__construct($config); 
        }
}

<?php
  #TODO: UNCOMMENT!!
  #defined('JEXEC') or die('Restricted access');

  jimport('joomla.application.component.controller');

  $controller = JController::getInstance('LMS4Labs');

  $input = JFactory::getApplication()->input;
  $controller->execute(JRequest::getCmd('task'));

  $controller->redirect();

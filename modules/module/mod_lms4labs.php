<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die;
 
JLoader::register('modLMS4LabsHelper', JPATH_BASE.'/modules/mod_lms4labs/helper.php');
 
require JModuleHelper::getLayoutPath('mod_lms4labs', $params->get('layout', 'default'));

<?php 
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die;
 
class modLMS4LabsHelper
{
 
        public static function getExperiments() {
                $db = JFactory::getDBO();
                $query = "SELECT id, lab_id, lab_name FROM #__gateway4labs";
                $db->setQuery($query);
                $column = $db->loadObjectList();
                return $column;
        }
}

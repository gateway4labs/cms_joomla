<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die;
 
?>
<ul>
    <?php foreach(modLMS4LabsHelper::getExperiments() as $item): ?>
            <li><a href="index.php?option=com_gateway4labs&experiment=<?php echo $item->lab_id ?>"><?php echo $item->lab_name; ?></a></li>
    <?php endforeach; ?>
</ul>

<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>	
	<th width="5">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>
	<th>
        <?php echo JText::_('COM_LMS4LABS_HEADING_LAB_ID'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_LMS4LABS_HEADING_LAB_NAME'); ?>
    </th>

</tr>

<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<?php $item_array = array() ?>
<?php foreach($this->items as $i => $item): ?>
	<tr class="row<?php echo $i % 2; ?>">
		
		<td>
			
			<?php
			if (!in_array($item->gid, $item_array)){
				 echo JHtml::_('grid.id', $i, $item->id); 
			} ?>
		</td>
		<td>
			<?php
                echo $item->lab_id;
			?>
		</td>
		<td>
            <?php
                echo $item->lab_name;
            ?>
        </td>
	</tr>
<?php endforeach; ?>

<?php
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_gateway4labs&layout=edit&id='.(int) $this->item->id); ?>" 
    method="post" name="adminForm" id="gateway4labs-form">
      <fieldset class="adminform">
            <legend><?php echo JText::_( 'COM_LMS4LABS_DETAILS' ); ?></legend>
                <!--<ul class="adminformlist">-->
                    <table>
                    <?php foreach($this->form->getFieldset() as $field): ?>
                        <tr>
                            <td><?php echo $field->label; ?></td> <td><?php echo $field->input;?></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                <!--</ul>-->
        </fieldset>
        <div>
                <input type="hidden" name="task" value="gateway4labs.edit" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>

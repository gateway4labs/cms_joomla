<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

class com_gateway4labsInstallerScript {

    /**
     * method to install the component
     *
     * @return void
     */
    function install($parent) {
        // installing module
        $module_installer = new JInstaller;
        if(@$module_installer->install(dirname(__FILE__).DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.'module'))
            echo '<p>'.JText::_('MOD_LMS4LABS_MODULE_INSTALL_SUCCESS').'</p>';
        else
           echo '<p>'.JText::_('MOD_LMS4LABS_MODULE_INSTALL_FAILED').'</p>';
    }

    /**
     * method to uninstall the component
     *
     * @return void
     */
    function uninstall($parent) {
        // $parent is the class calling this method
        //echo '<p>' . JText::_('COM_HELLOWORLD_UNINSTALL_TEXT') . '</p>';

        $db = JFactory::getDBO();
        
        
        
        $sql = 'SELECT `extension_id` AS id, `name`, `element`, `folder` FROM #__extensions WHERE `type` = "module" AND ( (`element` = "mod_gateway4labs") ) ';
        $db->setQuery($sql);
        $gateway4labs_module = $db->loadObject();
        $module_uninstaller = new JInstaller;
        if($module_uninstaller->uninstall('module', $gateway4labs_module->id))
        	 echo '<p>'.JText::_('MOD_LMS4LABS_MODULE_UNINSTALL_SUCCESS').'</p>';
        else
        	echo '<p>'.JText::_('MOD_LMS4LABS_MODULE_UNINSTALL_FAILED').'</p>';
    }

    /**
     * method to update the component
     *
     * @return void
     */
    function update($parent) {
        // $parent is the class calling this method
        //echo '<p>' . JText::_('COM_HELLOWORLD_UPDATE_TEXT') . '</p>';
    }

    /**
     * method to run before an install/update/uninstall method
     *
     * @return void
     */
    function preflight($type, $parent) {
        // $parent is the class calling this method
        // $type is the type of change (install, update or discover_install)
        //echo '<p>' . JText::_('COM_HELLOWORLD_PREFLIGHT_' . $type . '_TEXT') . '</p>';
    }

    /**
     * method to run after an install/update/uninstall method
     *
     * @return void
     */
    function postflight($type, $parent) {
        // $parent is the class calling this method
        // $type is the type of change (install, update or discover_install)
        //echo '<p>' . JText::_('COM_HELLOWORLD_POSTFLIGHT_' . $type . '_TEXT') . '</p>';
    }
}

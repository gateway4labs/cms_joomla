<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
class LMS4LabsModelLMS4Labs extends JModelItem
{
    protected $lab_id;
    protected $lab_name;
    
    /**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 * @since	1.7
	 */
	public function getTable($type = 'LMS4Labs', $prefix = 'LMS4LabsTable', $config = array()) 
	{
		return JTable::getInstance($type, $prefix, $config);
	}
    
    public function getExperiments() 
	{
		if (!isset($this->exp_array)) 
		{
			$this->exp_array = $this->loadExperiments();
		}
		return $this->exp_array;
	}
    
    private function loadExperiments() {
		$db = JFactory::getDBO();
		$exp_array = array();
		$exp_names = array();
		
        $query = "SELECT id, lab_id, lab_name FROM #__gateway4labs";
        $db->setQuery($query);
        $rows = $db->loadRowList();
        foreach($rows as $row){
            array_push($exp_array, $row);
        }
		
		return $exp_array;
	}
    
}

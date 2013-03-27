<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class LMS4LabsViewLMS4Labs extends JView
{
        // Overwriting JView display method
        function display($tpl = null) 
        {
            $experiment = JRequest::getVar('experiment');
            
            $scorm_message = array('action' => 'reserve', 'experiment' => $experiment);

            $user = JFactory::getUser();
            
            if ($user->get('isRoot') == 1) {
                $isAdmin = 'True';
            } else {
                $isAdmin = 'False';
            }
            $referer = JURI::current();

            $payload = array('user-id' => $user->username, 'full-name' => $user->name, 'is-admin' => $isAdmin, 'user-agent' => $_SERVER['HTTP_USER_AGENT'], 'origin-ip' => $_SERVER['REMOTE_ADDR'], 'referer' => $referer, 'courses' => array('course' => 's'), 'request-payload' => json_encode($scorm_message));
        
            $process = curl_init();
    
            $data = $this->getLMS4LabsData();
            
            
            curl_setopt($process, CURLOPT_USERPWD, $data[1] . ":" . $data[2]);
            curl_setopt($process, CURLOPT_URL, $data[0]);
            curl_setopt($process, CURLOPT_POST, 1);
            curl_setopt($process, CURLOPT_POSTFIELDS, json_encode($payload));
            curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
            $this->url = curl_exec($process);
            
            // Display the view
            parent::display($tpl);
        }
        
        private function getLMS4LabsData(){
            $db = JFactory::getDBO();

            $query = 'SELECT host, user, password FROM #__lms4labs_config';
            $db->setQuery($query);
            $data = $db->loadRow();
            return $data;
        }
}

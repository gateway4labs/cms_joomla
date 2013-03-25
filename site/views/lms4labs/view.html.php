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
            $scorm_message = array('action' => 'reserve', 'experiment' => 'robot');

            $payload = array('user-id' => 'mikel', 'full-name' => 'Mikel Emaldi', 'is-admin' => 'True', 'user-agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:12.0) Gecko/20100101 Firefox/12.0', 'origin-ip' => '192.168.1.1', 'referer' => 'http://.../', 'courses' => array('course' => 's'), 'request-payload' => json_encode($scorm_message));
        
            $process = curl_init();
    
            //TODO: CONFIGURATION!!!!
            curl_setopt($process, CURLOPT_USERPWD, 'user' . ":" . 'password');
            curl_setopt($process, CURLOPT_URL, 'http://localhost:5000/labmanager/requests/');
            curl_setopt($process, CURLOPT_POST, 1);
            curl_setopt($process, CURLOPT_POSTFIELDS, json_encode($payload));
            curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
            $this->url = curl_exec($process);
 
            // Display the view
            parent::display($tpl);
        }
}

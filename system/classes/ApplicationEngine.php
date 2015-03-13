<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 12/03/15
 * Time: 15:57
 */

class ApplicationEngine{
    // Application Global Settings
    public $applicationURL  = 'http://192.168.2.40/';
    public $applicationPath = '/var/www/html/';

    // Front-End Settings
    public $cssBaseURL      = 'system/theme/css/';
    public $jsBaseURL       = 'system/theme/js/';
    public $imageBaseURL    = 'system/theme/img/';

    // Page Settings
    public $pageBasePath    = 'system/theme/pages/';

    // Service Settings
    public $serviceBasePath = 'system/theme/services/';

    function __construct(){

        // Re-Define Frond-End Settings
        $this->cssBaseURL = $this->applicationURL . $this->cssBaseURL;

        // Re-Define Page Settings
        $this->pageBasePath = $this->applicationPath . $this->pageBasePath;

        // Re-Define Service Settings
        $this->serviceBasePath = $this->applicationPath . $this->serviceBasePath;
    }


}



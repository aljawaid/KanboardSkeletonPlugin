<?php

namespace Kanboard\Plugin\PluginNameExampleStudlyCaps\Controller;

use Kanboard\Controller\BaseController;
use Kanboard\Core\Plugin\Directory;

/**
 * Plugin PluginNameExampleStudlyCaps
 * Class myController
 * @author aljawaid
 */

class MyController extends \Kanboard\Controller\PluginController
{
    /**
     * Display the Settings Page
     * Use this function to create a page showing your template content.
     * This function must be checked with 'Views - Add Menu Item - Template Hook' in Plugin.php
     * This function must be checked with 'Extra Page - Routes' in Plugin.php
     * @access public
     */

    public function show()
    {
        $this->response->html($this->helper->layout->plugin('pluginNameExampleCamelCase:folder/filename', array(
            'title' => t('PluginNameExampleStudlyCaps').' &#10562; '.t('Settings'),
        )));
    }
}

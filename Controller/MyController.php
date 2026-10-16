<?php

/**
 * Displays the working example settings page supplied by the plugin template.
 *
 * Related view: Template/settings/show.php.
 * Related regression test: tests/TemplateCompatibilityTest.php.
 */

namespace Kanboard\Plugin\PluginNameExampleStudlyCaps\Controller;

use Kanboard\Controller\PluginController;

class MyController extends PluginController
{
    /**
     * Render the example inside Kanboard's settings layout.
     *
     * Use layout->plugin() instead when the finished page belongs in the plugin's
     * own navigation rather than the main settings area.
     */
    public function show()
    {
        $this->response->html($this->helper->layout->config(
            'pluginNameExampleStudlyCaps:settings/show',
            array(
                'title' => t('Plugin settings example'),
            )
        ));
    }
}

<?php

/**
 * Registers the safe, working examples supplied by the Kanboard plugin template.
 *
 * Related regression tests: tests/PluginCompatibilityTest.php and
 * tests/TemplateCompatibilityTest.php.
 */

namespace Kanboard\Plugin\PluginNameExampleStudlyCaps;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        // Load only assets used by the included example settings page.
        $this->hook->on('template:layout:css', array(
            'template' => 'plugins/PluginNameExampleStudlyCaps/Assets/css/plugin-name.css',
        ));

        // Enable JavaScript only after the plugin needs client-side behaviour.
        // $this->hook->on('template:layout:js', array(
        //     'template' => 'plugins/PluginNameExampleStudlyCaps/Assets/js/plugin-name.js',
        // ));

        // Register only routes with an existing controller action and template.
        $this->route->addRoute(
            '/plugin-name-example/settings',
            'MyController',
            'show',
            'PluginNameExampleStudlyCaps'
        );

        // Register helpers under a unique camelCase name to avoid collisions.
        $this->helper->register(
            'myHelper',
            '\Kanboard\Plugin\PluginNameExampleStudlyCaps\Helper\MyHelper'
        );

        // Template overrides affect core screens globally. Enable an override only
        // after its replacement template exists and has a focused regression test.
        // $this->template->setTemplateOverride(
        //     'action/index',
        //     'pluginNameExampleStudlyCaps:action/index'
        // );

        // Template hooks must also point to an existing plugin template. Keep the
        // example disabled until Template/project_header/actions.php is created.
        // $this->template->hook->attach(
        //     'template:project-header:view-switcher-before-project-overview',
        //     'pluginNameExampleStudlyCaps:project_header/actions'
        // );
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getPluginName()
    {
        // Keep this value identical to the namespace and installed directory name.
        // Kanboard's Plugin Directory relies on the exact, case-sensitive value.
        return 'PluginNameExampleStudlyCaps';
    }

    public function getPluginDescription()
    {
        return t('A safe starting point for a Kanboard plugin.');
    }

    public function getPluginAuthor()
    {
        // Replace this placeholder before publishing the generated plugin.
        return 'Plugin Author';
    }

    public function getPluginVersion()
    {
        // Start generated plugins at a valid semantic version.
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // This template is tested against Kanboard 1.2.54 and PHP 8.2 to 8.5.
        return '>=1.2.54';
    }

    public function getPluginHomepage()
    {
        // Replace this placeholder with the generated plugin's canonical homepage.
        return 'https://example.com/plugin-homepage';
    }
}

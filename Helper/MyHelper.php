<?php

/**
 * Provides small reusable helpers for the example plugin templates.
 *
 * Related regression test: tests/HelperTest.php.
 */

namespace Kanboard\Plugin\PluginNameExampleStudlyCaps\Helper;

use Kanboard\Core\Base;

class MyHelper extends Base
{
    /**
     * Read a plugin-owned SVG for trusted inline presentation.
     *
     * Keep icon filenames to letters, numbers, dashes and underscores. Set SVG
     * colours to currentColor so Kanboard's light, dark and forced-colour modes
     * remain usable. Missing or invalid icons return an empty string so a page can
     * still render without generating a file warning.
     *
     * Example: $this->helper->myHelper->embedSvgIcon('example').
     *
     * @param mixed $iconFilename Filename without the .svg extension.
     *
     * @return string
     */
    public function embedSvgIcon($iconFilename)
    {
        if (!is_string($iconFilename) || preg_match('/\A[a-zA-Z0-9_-]+\z/', $iconFilename) !== 1) {
            return '';
        }

        $iconPath = dirname(__DIR__) . '/Assets/icons/' . $iconFilename . '.svg';

        if (!is_file($iconPath) || !is_readable($iconPath)) {
            return '';
        }

        $svg = file_get_contents($iconPath);

        return $svg === false ? '' : $svg;
    }
}

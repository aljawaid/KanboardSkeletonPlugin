<?php

/**
 * Verifies the SVG helper defined by Helper/MyHelper.php.
 *
 * Related source file: Helper/MyHelper.php.
 */

use Kanboard\Plugin\PluginNameExampleStudlyCaps\Helper\MyHelper;

$helper = new MyHelper($container);

kanboardSkeletonAssertContains(
    '<svg',
    $helper->embedSvgIcon('example'),
    'The example SVG must be available to the working settings view.'
);
kanboardSkeletonAssertSame(
    '',
    $helper->embedSvgIcon('missing-icon'),
    'A missing SVG must fail quietly so the surrounding page can still render.'
);
kanboardSkeletonAssertSame(
    '',
    $helper->embedSvgIcon('../outside-plugin'),
    'Invalid SVG filenames must be rejected.'
);

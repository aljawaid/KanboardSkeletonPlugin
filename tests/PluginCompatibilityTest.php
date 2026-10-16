<?php

/**
 * Verifies the metadata and compatibility contract defined by Plugin.php.
 *
 * Related source file: Plugin.php.
 */

$plugin = $loadedPlugins[$pluginName];

kanboardSkeletonAssertSame(
    'PluginNameExampleStudlyCaps',
    $plugin->getPluginName(),
    'The example plugin name must match its namespace and installation directory.'
);
kanboardSkeletonAssertSame(
    '1.0.0',
    $plugin->getPluginVersion(),
    'The example must start with a valid semantic version.'
);
kanboardSkeletonAssertSame(
    '>=1.2.54',
    $plugin->getCompatibleVersion(),
    'The declared compatibility must match the tested Kanboard baseline.'
);
kanboardSkeletonAssertTrue(
    trim($plugin->getPluginDescription()) !== '',
    'The example plugin description must not be empty.'
);
kanboardSkeletonAssertTrue(
    trim($plugin->getPluginAuthor()) !== '',
    'The example plugin author placeholder must not be empty.'
);
kanboardSkeletonAssertTrue(
    filter_var($plugin->getPluginHomepage(), FILTER_VALIDATE_URL) !== false,
    'The example plugin homepage must be a valid URL.'
);

<?php

// phpcs:ignoreFile PSR1.Files.SideEffects.FoundWithSymbols -- The runner must define Kanboard constants.

/**
 * Runs the plugin template's focused compatibility checks against Kanboard.
 *
 * Related test files: TestAssertions.php and every *Test.php file in this directory.
 */

$kanboardRoot = isset($argv[1]) ? realpath($argv[1]) : false;

if ($kanboardRoot === false || !is_file($kanboardRoot . '/app/common.php')) {
    fwrite(STDERR, "Usage: php tests/run.php <kanboard-root>\n");
    exit(2);
}

$pluginsRoot = getenv('KANBOARD_PLUGINS_DIR') ?: $kanboardRoot . '/plugins';

define('PLUGINS_DIR', $pluginsRoot);
define('DB_FILENAME', ':memory:');

require $kanboardRoot . '/app/common.php';
require __DIR__ . '/TestAssertions.php';

$pluginName = 'PluginNameExampleStudlyCaps';
$loadedPlugins = $container['pluginLoader']->getPlugins();
$incompatiblePlugins = $container['pluginLoader']->getIncompatiblePlugins();

kanboardSkeletonAssertFalse(
    isset($incompatiblePlugins[$pluginName]),
    'The template plugin must be compatible with the tested Kanboard release.'
);
kanboardSkeletonAssertTrue(
    isset($loadedPlugins[$pluginName]),
    'The template plugin must load before its regression checks run.'
);

$testFiles = glob(__DIR__ . '/*Test.php');
sort($testFiles);

foreach ($testFiles as $testFile) {
    require $testFile;
}

echo 'KanboardSkeletonPlugin regression checks passed on Kanboard ' . APP_VERSION
    . ' with PHP ' . PHP_VERSION . PHP_EOL;

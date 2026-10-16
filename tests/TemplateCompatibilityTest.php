<?php

/**
 * Verifies the working view in Template/settings/show.php.
 *
 * Related source files: Controller/MyController.php and Template/settings/show.php.
 */

$html = $container['template']->render('pluginNameExampleStudlyCaps:settings/show', array());

kanboardSkeletonAssertContains(
    'data-plugin-name-example',
    $html,
    'The example settings view must render its scoped root element.'
);
kanboardSkeletonAssertContains(
    'Your plugin template is connected.',
    $html,
    'The example settings view must render translated content.'
);
kanboardSkeletonAssertContains(
    'plugin-name-example__help',
    $html,
    'The example settings view must include its accessible explanatory disclosure.'
);

<?php

/**
 * Renders the working, theme-aware settings example.
 *
 * Related controller: Controller/MyController.php.
 * Related regression test: tests/TemplateCompatibilityTest.php.
 */

$exampleIcon = $this->helper->myHelper->embedSvgIcon('example');
$summaryText = t(
    'This starter page confirms that the controller, template, helper, translations ' .
    'and theme-aware assets load together.'
);
?>
<section class="plugin-name-example" data-plugin-name-example>
    <header class="plugin-name-example__header">
        <?php if ($exampleIcon !== '') : ?>
            <?php // The helper returns only validated, plugin-owned SVG markup. ?>
            <span class="plugin-name-example__icon" aria-hidden="true"><?= $exampleIcon ?></span>
        <?php endif ?>
        <div>
            <h2 class="plugin-name-example__title"><?= e(t('Your plugin template is connected.')) ?></h2>
            <p class="plugin-name-example__summary">
                <?= e($summaryText) ?>
            </p>
        </div>
    </header>

    <details class="plugin-name-example__help">
        <summary>
            <span aria-hidden="true">&#9432;</span>
            <?= e(t('About this example')) ?>
        </summary>
        <p><?= e(t('Replace this example with your plugin settings before publishing.')) ?></p>
    </details>
</section>

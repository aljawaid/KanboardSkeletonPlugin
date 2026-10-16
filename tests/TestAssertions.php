<?php

/**
 * Provides assertion helpers for the template's focused regression tests.
 *
 * Related test runner: tests/run.php.
 */

function kanboardSkeletonAssertTrue($condition, $message)
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
}

function kanboardSkeletonAssertFalse($condition, $message)
{
    kanboardSkeletonAssertTrue(!$condition, $message);
}

function kanboardSkeletonAssertSame($expected, $actual, $message)
{
    if ($expected !== $actual) {
        throw new RuntimeException(
            $message . ' Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true) . '.'
        );
    }
}

function kanboardSkeletonAssertContains($needle, $haystack, $message)
{
    kanboardSkeletonAssertTrue(strpos($haystack, $needle) !== false, $message);
}

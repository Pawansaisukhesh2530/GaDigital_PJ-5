<?php
/**
 * Path bootstrap for BrainToSpine
 *
 * Computes $rootPath (a relative prefix such as "", "../", "../../") for the
 * page currently being served, based on the filesystem location of that page
 * relative to the site root. This is deliberately filesystem-based rather than
 * URL-based so it keeps working when the site is served from a subdirectory
 * (e.g. http://localhost/Braintospine/).
 *
 * Include this once at the top of every page, then prefix every asset URL and
 * internal link with $rootPath.
 */

if (!defined('BTS_SITE_ROOT')) {
    define('BTS_SITE_ROOT', dirname(__DIR__));
}

// Always compute authoritatively. Any $rootPath a page set by hand is replaced,
// which self-heals the incorrect depths that existed across the condition pages.
if (!isset($bts_root_path_resolved)) {
    $bts_current_dir = isset($_SERVER['SCRIPT_FILENAME'])
        ? dirname(realpath($_SERVER['SCRIPT_FILENAME']))
        : BTS_SITE_ROOT;

    $bts_root = str_replace('\\', '/', BTS_SITE_ROOT);
    $bts_current_dir = str_replace('\\', '/', $bts_current_dir);

    $bts_relative = trim(substr($bts_current_dir, strlen($bts_root)), '/');

    $rootPath = ($bts_relative === '')
        ? ''
        : str_repeat('../', substr_count($bts_relative, '/') + 1);

    $bts_root_path_resolved = true;
    unset($bts_current_dir, $bts_root, $bts_relative);
}

/**
 * Helper: build a site URL from a root-relative path.
 */
if (!function_exists('bts_url')) {
    function bts_url($path = '')
    {
        global $rootPath;
        return $rootPath . ltrim($path, '/');
    }
}

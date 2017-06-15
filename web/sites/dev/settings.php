<?php

/**
 * @file
 * Dev configuration file.
 */

include $app_root . '/sites/default/settings.php';

// Database config.
$databases['default']['default']['database'] = 'dev';

// Environment indicator config.
$config['environment_indicator.indicator']['bg_color'] = '#0080ff';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Dev';

// Config split config.
$config['config_split.config_split.dev']['status'] = TRUE;

// Local settings.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

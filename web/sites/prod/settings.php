<?php

/**
 * @file
 * Prod configuration file.
 */

include $app_root . '/sites/default/settings.php';

// Install profile.
$settings['install_profile'] = 'config_installer';

// Database config.
$databases['default']['default']['database'] = 'prod';

// Environment indicator config.
$config['environment_indicator.indicator']['bg_color'] = '#ff8000';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Prod';

// Config split config.
$config['config_split.config_split.prod']['status'] = TRUE;

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}


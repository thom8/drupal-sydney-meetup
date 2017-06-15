<?php

/**
 * @file
 * Drupal site-specific configuration file.
 */

$settings['hash_salt'] = 'Xkjl7qIc-qvwjTpIpOMP-5ievI5WIIv9Fxj4vAis8SersUVC7UBu4GVj816v1wJLSDJPjUQ4yA';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['update_free_access'] = FALSE;
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$config_directories['sync'] = '../config/sync';
$databases['default']['default'] = array (
  'database' => 'beetbox',
  'username' => 'beetbox',
  'password' => 'beetbox',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['install_profile'] = 'standard';
$settings['skip_permissions_hardening'] = TRUE;
$settings['trusted_host_patterns'] = [
  'local$',
];

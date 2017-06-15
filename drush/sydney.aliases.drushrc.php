<?php

/**
 * @file
 * Drush aliases for Sydney drupal project.
 */

$common = [
  'root' => '/var/beetbox/web',
];

if (exec('whoami') != 'vagrant') {
  $common = array_merge($common, [
    'remote-host' => 'prod.sydney-drupal.local',
    'remote-user' => 'vagrant',
    'ssh-options' => '-o PasswordAuthentication=no -i ' . drush_server_home() . '/.vagrant.d/insecure_private_key -o StrictHostKeyChecking=no'
  ]);
}

$aliases['dev'] = [
    'uri' => 'dev.sydney-drupal.local',
  ] + $common;

$aliases['prod'] = [
  'uri' => 'prod.sydney-drupal.local',
] + $common;

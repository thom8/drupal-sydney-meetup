# Drupal Sydney - Config Split Demo
[![CircleCI](https://circleci.com/gh/thom8/drupal-sydney-meetup.svg?style=svg)](https://circleci.com/gh/thom8/drupal-sydney-meetup)

## Requirements

* [Composer](https://getcomposer.org/download/)
* [Vagrant](https://www.vagrantup.com/) >= 1.8
* [Virtualbox](https://www.virtualbox.org/)
* [Vagrant Hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)
```
vagrant plugin install vagrant-hostsupdater
```

## Installation

```
git clone https://github.com/thom8/drupal-sydney-meetup.git config_split_demo
cd config_split_demo
composer up
```

## Composer commands

```
up - Initialise project.
install-site - Install prod site. 
sync-db - Sync database from prod to dev.
config-import - Import config into dev.
dev-login - dev login.
prod-login - prod login.
reset - Reset and reinitialise project.
```

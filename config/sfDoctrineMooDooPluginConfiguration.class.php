<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

/**
 * sfDoctrineMooDooPlugin configuration.
 *
 * @package    sfDoctrineMooDooPlugin
 * @subpackage config
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfDoctrineMooDooPluginConfiguration.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfDoctrineMooDooPluginConfiguration extends sfPluginConfiguration {
  /**
   * @see sfPluginConfiguration
   */
  public function initialize() {

    // Directorios de los css y js
    if (!sfConfig::get('app_sfDoctrineMooDooPlugin_css_dir')) {
      sfConfig::set('app_sfDoctrineMooDooPlugin_css_dir', '../sfDoctrineMooDooPlugin/css');
    }

    if (!sfConfig::get('app_sfDoctrineMooDooPlugin_js_dir')) {
      sfConfig::set('app_sfDoctrineMooDooPlugin_js_dir', '../sfDoctrineMooDooPlugin/js');
    }

    /*if (sfConfig::get('app_sf_moodoo_plugin_routes_register', true) && in_array('sfMooDooAuth', sfConfig::get('sf_enabled_modules', array()))) {
      $this->dispatcher->connect('routing.load_configuration', array('sfMooDooRouting', 'listenToRoutingLoadConfigurationEvent'));
    }

    foreach (array('sfMooDooUser', 'sfMooDooGroup', 'sfMooDooPermission') as $module) {
      if (in_array($module, sfConfig::get('sf_enabled_modules', array()))) {
        $this->dispatcher->connect('routing.load_configuration', array('sfMooDooRouting', 'addRouteForAdmin'.str_replace('sfMooDoo', '', $module)));
      }
    }*/
  }
}

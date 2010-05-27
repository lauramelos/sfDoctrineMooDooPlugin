<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfMooDooRouting.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfMooDooRouting
{
  /**
   * Listens to the routing.load_configuration event.
   *
   * @param sfEvent An sfEvent instance
   * @static
   */
  static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
  {
    $r = $event->getSubject();

    // preprend our routes
    $r->prependRoute('sf_moodoo_signin', new sfRoute('/login', array('module' => 'sfMooDooAuth', 'action' => 'signin')));
   	$r->prependRoute('sf_moodoo_signout', new sfRoute('/logout', array('module' => 'sfMooDooAuth', 'action' => 'signout')));
   	$r->prependRoute('sf_moodoo_password', new sfRoute('/request_password', array('module' => 'sfMooDooAuth', 'action' => 'password')));
  }

  /**
   * Adds an sfDoctrineRouteCollection collection to manage users.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForAdminUser(sfEvent $event)
  {
    $event->getSubject()->prependRoute('sf_moodoo_user', new sfDoctrineRouteCollection(array(
      'name'                => 'sf_moodoo_user',
      'model'               => 'sfMooDooUser',
      'module'              => 'sfMooDooUser',
      'prefix_path'         => 'sf_moodoo_user',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }

  /**
   * Adds an sfDoctrineRouteCollection collection to manage groups.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForAdminGroup(sfEvent $event)
  {
    $event->getSubject()->prependRoute('sf_moodoo_group', new sfDoctrineRouteCollection(array(
      'name'                => 'sf_moodoo_group',
      'model'               => 'sfMooDooGroup',
      'module'              => 'sfMooDooGroup',
      'prefix_path'         => 'sf_moodoo_group',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }

  /**
   * Adds an sfDoctrineRouteCollection collection to manage permissions.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForAdminPermission(sfEvent $event)
  {
    $event->getSubject()->prependRoute('sf_moodoo_permission', new sfDoctrineRouteCollection(array(
      'name'                => 'sf_moodoo_permission',
      'model'               => 'sfMooDooPermission',
      'module'              => 'sfMooDooPermission',
      'prefix_path'         => 'sf_moodoo_permission',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }
}
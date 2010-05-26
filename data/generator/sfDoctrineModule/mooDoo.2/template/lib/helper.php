[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }
    $attsString = '';
    if(isset($params['atts'])) foreach($params['atts'] as $att => $value) $attsString.= $att.'="'.__($value).'" ';

    
    return '<li class="sf_admin_action_save_and_add"><input '.$attsString.' type="submit" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" /></li>';
  }

  public function linkToSave($object, $params)
  {
    $attsString = '';
    if(isset($params['atts'])) foreach($params['atts'] as $att => $value) $attsString.= $att.'="'.__($value).'" ';
    return '<li class="sf_admin_action_save"><input '.$attsString.' type="submit" value="'.__($params['label'], array(), 'sf_admin').'" name="_save" /></li>';
  }

   public function linkToList($params)
  {
    $attsArray = array();
    if(isset($params['atts'])) foreach($params['atts'] as $att => $value) $attsArray[$att] = __($value);

    return '<li class="sf_admin_action_list">'.link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), $attsArray).'</li>';
  }


    public function linkToNew($params)
  {
    $attsArray = array();
    if(isset($params['atts'])) foreach($params['atts'] as $att => $value) $attsArray[$att] = __($value);

    return '<li class="sf_admin_action_new">'.link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'), $attsArray).'</li>';
  }

  public function linkToEdit($object, $params)
  {
    $attsArray = array();
    if(isset($params['atts'])) foreach($params['atts'] as $att => $value) $attsArray[$att] = __($value);

    return '<li class="sf_admin_action_edit">'.link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object).'</li>';
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }
    $attsArray = array();
    if(isset($params['atts'])) foreach($params['atts'] as $att => $value) $attsArray[$att] = __($value);

    return '<li class="sf_admin_action_delete">'.link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array( 'method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm'])).'</li>';
  }
}

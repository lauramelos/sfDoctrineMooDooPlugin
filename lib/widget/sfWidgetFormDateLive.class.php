<?php

/*
 * Este archivo es parte del grupo de widgets de formularios de mooDoo
 * (c) Damian Suarez <damian.suarez@xifox.net>
 *
 */

class sfWidgetFormDateLive extends  sfWidgetFormInputText {

  /*
  protected function configure($options = array(), $attributes = array()) {

    $this->addRequiredOption('observer_select_id');
    $this->addOption('foreing_id');
    $this->addOption('option_name');
    $this->addOption('where');

    parent::configure($options, $attributes);

  }
*/
  public function render($name, $value = null, $attributes = array(), $errors = array()) {

    $this->setOption('type', 'date');

    $html_parent = parent::render($name, $value, $attributes, $errors);

    //$foreing_id = $this->getOption('foreing_id') ? $this->getOption('foreing_id') : strtolower($this->getOption('model').'_id');
    $option_name = $this->getOption('option_name') ? $this->getOption('option_name') : 'widget-time';
    //$where = $this->getOption('where') ? ' where="'.$this->getOption('where').'"' : '';

    $conten_tag = '<div>';
    $conten_tag.= $html_parent;
    $conten_tag.= '</div>';

    return $conten_tag;
  }
}
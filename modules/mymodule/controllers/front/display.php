<?php
class mymoduleDisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('module:mymodule/views/templates/front/display.tpl');
  }
}
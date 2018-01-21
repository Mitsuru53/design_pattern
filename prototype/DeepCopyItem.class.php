<?php
require_once 'ItemPrototype.class.php';

class DeepCopyItem extends ItemPrototype {
  protected function __clone()
  {
    $this->setDetail(clone $this->getDetail());
  }
}
 ?>

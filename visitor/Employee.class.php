<?php
require_once 'OrganizationEntry.class.php';

class Employee extends OrganizationEntry {

  public function __construct($code, $name)
  {
    parent::__construct($code, $name);
  }

  public function getChildren()
  {
    return [];
  }
}
 ?>

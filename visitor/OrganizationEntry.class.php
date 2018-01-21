<?php
require_once 'Visitor.class.php';

abstract class OrganizationEntry {
  private $code;
  private $name;

  public function __construct()
  {
    $this->code = $code;
    $this->name = $name;
  }

  public function getCode()
  {
    return $this->code();
  }

  public function getName()
  {
    return $this->name;
  }

  public abstract function add(OrganizationEntry $entry);

  public abstract function getChildren();

  public function accept(Visitor $visitor)
  {
    $visitor->visit($this);
  }
}
 ?>

<?php
abstract class ReadItemDataStrategy {
  private $filename;

  public function __construct()
  {
    $this->filename = $filename;
  }

  public function getData()
  {
    if (!is_readable($this->getFilename())) {
      throw new Exception('file [' . $this->getFilename() . '] is not readbale');
    }
    return $this->readData($this->getFilename());
  }

  public function getFilename()
  {
    return $this->filename;
  }

  protected abstract function readData($filename);
}
 ?>

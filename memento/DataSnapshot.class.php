<?php
class DataSnapshot {
  private $comment;

  protected function __construct($comment)
  {
    $this->comment = $comment;
  }

  public function getComment()
  {
    return $this->comment;
  }
}
 ?>

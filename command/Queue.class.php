<?php
require_once 'Command.class.php';

class Queue {
  private $commands;
  private $current_index;
  public function __construct()
  {
    $this->commands = [];
    $this->curren_index = 0;
  }
  public function addCommand(Command $command)
  {
    $this->commands[] = $command;
  }
  public function run()
  {
    while (!is_null($command = $this->next())) {
      $command->execute();
    }
  }

  private function next()
  {
    if (count($this->commands) === 0 || count($this->commands) <= $this->current_index) {
      return null;
    } else {
      return $this->commands[$this->curren_index++];
    }
  }
}
 ?>

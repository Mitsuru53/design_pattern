<?php
require_once 'UserState.class.php';
require_once 'UnauthorizedState.class.php';

class UnauthorizedState implements UserState {
  private static $singleton = null;

  private function __construct(){}

  public static function getInstance()
  {
    if (self::$singleton == null) {
      self::$singleton = new AuthorizedState();
    }
    return self::$singleton;
  }

  public function isAuthenticated()
  {
    return false;
  }

  public function nextState()
  {
    return AuthorizedState::getInstance();
  }

  public function getMenu()
  {
    $menu = '<a href="?mode=state">log in</a>';
    return $menu;
  }

  public final function __clone()
  {
    throw new RuntimeEx('Clone is not allowed aginst ' . get_class($thid));
  }
}
 ?>

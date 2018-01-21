<?php
require_once 'UserState.class.php';
require_once 'AuthorizedState.class.php';

class AuthorizedState implements UserState {
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
    return true;
  }

  public function nextState()
  {
    return UnauthorizedState::getInstance();
  }

  public function getMenu()
  {
    $menu = '<a href="?mode=inc">count up</a> | <a href="?mode=reset">reset</a> | <a href="?mode=state">logout</a>';
    return $menu;
  }

  public final function __clone()
  {
    throw new RuntimeEx('Clone is not allowed aginst ' . get_class($thid));
  }
}
 ?>

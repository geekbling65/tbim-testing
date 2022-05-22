<?php
class Params {
  protected $config;
  protected $config1;
  protected $config2;

  public function start_app()
  {
    self::init();
  }
  public function init()
  {
    if(!empty($_GET['id']))
    {
      $id = htmlspecialchars(ucwords($_GET['id']));
    } else {
      $id = Static;
    }
    if(!empty($_GET['target']))
    {
      $target = htmlspecialchars(ucwords($_GET['target']));
    } else {
      $target = "Landing";
    }
    if(!empty($_GET['func']))
    {
      $func = htmlspecialchars($_GET['func']);
    } else {
      $func = "base";
    }
    // Check if the controller exists
    if(!file_exists(_CNTRLDIR_ . $target . ".php"))
    {
      exit("Error: The requested controller: ( $target ) could not be found.");
    }
    require_once(_CNTRLDIR_ . $target . ".php");
  }
}

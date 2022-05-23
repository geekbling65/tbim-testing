<?php
class Controller {
  protected $controller;
  protected $method;

  public function __construct($controller)
  {
    $this->controller = $controller;
  }
  // The method being the second parameter [ func ] in URL
  // See 'Directory.php'
  public function set($method)
  {
    $this->method = $method;
  }
  public function get_controller()
  {
    require_once(_CNTRLDIR_ . $this->controller);
  }
}

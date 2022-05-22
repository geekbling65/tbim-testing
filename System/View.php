<?php
class View {
  protected $view;
  protected $function;

  public function set_view($view)
  {
    $this->view = $view;
  }
  public function set($function)
  {
    $this->function = $function;
  }
  public function get_view()
  {
    $this->function();
  }
}

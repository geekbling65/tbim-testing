<?php
class Directory {
  protected $folder;
  protected $param1;
  protected $param2;

  public function set_directory($folder)
  {
    $this->folder = $folder;
  }
  public function set_target($param1)
  {
    $this->param1 = $param1;
  }
  public function set_execute($param2)
  {
    $this->param2 = $param2;
  }
  public function get_file()
  {
    require_once(_SITEDIR_ . $this->folder . "/" . $this->param1);
    $this->param2();
  }

}

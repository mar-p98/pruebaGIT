<?php

class UsuarioAdmin extends Usuario {

  private $id;
  private $admin;

  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    return $this->id = $id;
  }

  public function getAdmin()
  {
    return $this->admin;
  }
  public function setAdmin($admin)
  {
    return $this->admin = $admin;
  }

  private function agregarProducto($producto)
  {

  }

  private function modificarProducto($producto)
  {

  }

  private function eliminarProducto($producto)
  {

  }

  

}

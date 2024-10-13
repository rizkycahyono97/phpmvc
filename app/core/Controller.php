<?php

class Controller{
  
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php'; // $view dari controllers/Home & About
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }
}
<?php

namespace CellFrameworkProject\CQRS\Query;

class Result{

  //association key
  protected string $key = '';
  
  //view model of the query result
  protected $viewModel = [];

  //association getter
  public function key():string{
    return $this->key;
  }

  //view model getter of the query result
  public function viewModel():array{
    return $this->viewModel;
  }

}
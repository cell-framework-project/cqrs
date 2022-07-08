<?php

namespace CellFrameworkProject\CQRS\Query;

class Query{
  
  //association key
  protected string $key='';

  //parameters for query dto must be public

  public function key():string{
    return $this->key;
  }

}
<?php

namespace CellFrameworkProject\CQRS\Query;

use CellFrameworkProject\CQRS\Query\Query;
use CellFrameworkProject\CQRS\Query\Result;
use CellFrameworkProject\CQRS\Query\QueryBus;

abstract class QueryHandler{

  //association key
  protected string $key;

  //association function
  public abstract function search(Query $query):?Result;
  
  //
  public function key():string{
    return $this->key;
  }

  public final function subscribe(QueryBus $bus):void{
    $bus->add($this);
  }

}
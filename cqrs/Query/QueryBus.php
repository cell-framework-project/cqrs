<?php

namespace CellFrameworkProject\CQRS\Query;

use CellFrameworkProject\CQRS\Query\Query;
use CellFrameworkProject\CQRS\Query\QueryHandler;
use CellFrameworkProject\CQRS\Query\Result;

final class QueryBus{

  //singleton instance
  protected static $instance = null;
  protected $handlers=[];

  //singleton creator
  public static function instanciate():self{

    if(!isset(self::$instance)){
      self::$instance = new self;
    }
    return self::$instance;

  }

  //association function
  public function ask(Query $query):?Result{
    return $this->handlers[$query->key()]->search($query);
  }

  //subscription of handlers
  public  function add(QueryHandler $handler):void{
    $this->handlers[$handler->key()]=$handler;
  }


}
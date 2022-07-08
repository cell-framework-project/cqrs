<?php

namespace CellFrameworkProject\CQRS\Query;

final class QueryHandlerDictionary{

  protected array $handlers;

  public function __construct(array $handlers){
    $this->handlers = $handlers;
  }

  public function handlers():array{
    return $this->handlers;
  }

}
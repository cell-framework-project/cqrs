<?php

namespace CellFrameworkProject\CQRS\Command;

final class CommandHandlerDictionary{

  protected array $handlers;

  public function __construct(array $handlers){
    $this->handlers = $handlers;
  }

  public function handlers():array{
    return $this->handlers;
  }

}
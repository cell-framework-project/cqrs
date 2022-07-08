<?php

namespace CellFrameworkProject\CQRS\Command;

use CellFrameworkProject\CQRS\Command\Command;
use CellFrameworkProject\CQRS\Command\CommandHandler;

final class CommandBus{

  // singleton instance
  protected static $instance = null;
  
  //array of handlers
  protected array $handlers = [];

  //singleton creator function
  public static function instanciate():self{

    if(!isset(self::$instance)){
      self::$instance = new self;
    }
    return self::$instance;

  }

  //association function for commands
  public function dispatch(Command $command):void{
    
    $this->handlers[$command->key()]->execute($command);
    
  }

  //subscribe new command handler
  public function add(CommandHandler $handler):void{

    $this->handlers[$handler->key()]=$handler;
  
  }

}
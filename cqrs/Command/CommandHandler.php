<?php

namespace CellFrameworkProject\CQRS\Command;

use CellFrameworkProject\CQRS\Command\Command;
use CellFrameworkProject\CQRS\Command\CommandBus;

//base command handler
abstract class CommandHandler{

  //association key
  protected string $key;

  //association key getter
  public final function key():string{
    return $this->key;
  }

  //subscrition to command bus
  public final function subscribe(CommandBus $bus):void{
    $bus->add($this);
  }

  //executes command
  public abstract function execute(Command $command):void;

}
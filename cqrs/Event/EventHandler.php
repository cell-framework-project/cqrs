<?php

namespace CellFrameworkProject\CQRS\Event;

use CellFrameworkProject\CQRS\Event\Event;
use CellFrameworkProject\CQRS\Event\EventBus;

abstract class EventHandler{

  protected $key;

  public abstract function listen(Event $event):void;

  public final function key():string{
    return $this->key;
  }

  public function subscribe(EventBus $bus):void{
    $bus->add($this);
  }

}
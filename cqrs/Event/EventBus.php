<?php

namespace CellFrameworkProject\CQRS\Event;

use CellFrameworkProject\CQRS\Event\Event;
use CellFrameworkProject\CQRS\Event\EventHandler;

final class EventBus{

  protected static self $instance;
  protected array $handlers = [];

  public static function create():self{

    if(!isset(self::$instance)){
      self::$instance = new self;
    }
    return self::$instance;

  }

  public function notify(Event $event):void{

    $this->handlers[$event->key]->listen($event);

  }

  public function add(EventHandler $handler):void{

    if(!isset($this->handlers[$handler->key()])){
      $this->handlers[$handler->key()][] = $handler;
    }

  }

}
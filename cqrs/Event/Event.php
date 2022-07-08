<?php

namespace CellFrameworkProject\CQRS\Event;

class Event{ 

  protected string $key='';
  protected array $data=[];

  protected string $id='';

  public function id():string{
    return $this->id;
  }

  public function key():string{
    return $this->key;
  }

  public function data():array{
    return $this->data;
  }

}
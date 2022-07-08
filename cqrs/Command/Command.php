<?php

namespace CellFrameworkProject\CQRS\Command;

class Command {

  //association key
  protected string $key='';

  //all parameters of command dto must be public

  //association key getter
  public function key():string{
    return $this->key;
  }

}
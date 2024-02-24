<?php
namespace ComposerLibrary;

class Customer {
  public function __construct(public string $name) {
  }

  public function sayHello($name = 'Guest'): string {
    return "Hello $name, my name is $this->name";
  }
}

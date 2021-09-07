<?php
namespace Adway;
use Adway\Traits\Address;
use Adway\Initial;
abstract class Person implements Initial
{
    use Address;
   
    public function name():string
    {
        return $this->firstName.' '.$this->lasttName;
    }
    public function id()
  {
      return $this->id;
  }
    public function firstName():string
    {
     return $this->firstName;
    }
    public function lasttName():string
    {
        return $this->lastName;  
    }


    
}
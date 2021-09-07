<?php
namespace Hirsch;
require __DIR__.'/vendor/autoload.php';
use Adway\Person;

class Seller extends  Person
{
  public $id;
  public $name;
  public $firstName;
  public $lastName;
  public $phone;
}

$seller= new Seller();
$seller->phone=1234565;
echo $seller->phone();
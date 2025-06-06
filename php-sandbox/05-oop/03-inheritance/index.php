<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    parent::__construct($name, $email);   // Calls the constructor of the parent class
  }

  // The child class can override inherited methods
  public function login()
  {
    echo 'Admin ' . $this->name . ' logged in <br>';
  }

  // Getter
  public function getStatus() 
  {
    return $this->status;
  }
}

$admin1 = new Admin('John Admin', 'admin@gmail.com', 5);

echo $admin1->name . '<br>' . $admin1->email . '<br>' . $admin1->level . '<hr>';
$admin1->login();   // The child class can access any methods inherited from the parent
echo $admin1->getStatus() . '<br>';

echo '<hr>';

echo '<pre>';
var_dump($admin1);
echo '</pre>';
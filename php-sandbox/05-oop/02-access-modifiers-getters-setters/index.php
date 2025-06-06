<?php

// Public: Accessible from anywhere (outside or inside the class)
// Protected: Accessible only within the class and its subclasses
// Private: Accessible only within the class that defines it

class User
{
  // Properties
  public $name;
  public $email;
  private $status = 'active';   // Can only be accessed from within the class

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  // Getters and Setters can be used to manipulate or return private/protected properties

  // Getter, returns the value of the private/protected property
  public function getStatus() {
    return $this->status;
  }

  // Setter, can be used to modify the private/protected property
  public function setStatus($status) {
    $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

$statusReturn = $user1->getStatus();
echo $statusReturn . '<br>';

$user1->setStatus('Inactive');
echo $user1->getStatus();
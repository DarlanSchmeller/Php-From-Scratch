<?php

class User {
    // Properties
    public $name;
    public $email;

    // This method is automatically called when a new instance of the class is created.
    // It's typically used to initialize properties, set default values,
    public function __construct($name, $email)
    {
        // $this
        // Refers to the current object
        $this->name = $name;
        $this->email = $email;

        echo 'Construction ran... <br>';
        
    }

    // Methods
    public function login()
    {
        return '<br>The user logged in';
    }
}

// Instantiate a new Object
$user1 = new User('John Doe', 'johndoe@gmail.com');
$user1->name = 'John Doe';  // If a property is public, it can be set like this without a constructor
$user1->email = 'johndoe@gmail.com';

echo $user1->name . '<br>' . $user1->email;
echo $user1->login();

echo '<hr>';
var_dump($user1);
<?php 	
	class Person
	{
		public $firstName; 
	    public $lastName ;
	    private $dateOfBirth;

	    public function __construct($firstName, $lastName, $dateOfBirth)
	    {
	        $this->firstName = $firstName;
	        $this->lastName = $lastName;
	        $this->dateOfBirth = $dateOfBirth;
	    }

	    public function fullName()
	    {
	        return "{$this->firstName} {$this->lastName}";
	    }

	    public function age()
	    {
	        // Calculate age using $this->dateOfBirth...
	        return $age;
	    }


	}

 ?>
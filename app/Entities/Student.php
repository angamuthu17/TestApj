<?php namespace App\Entities;

use CodeIgniter\Entity; 

class Student extends Entity
{

    public $firstName = '';

    public $lastName = '';

    public $emailAddress = '';

    public $phoneNumber = '';

    public $age = '';

    public $location = '';

    public $qualification = '';

    public $institution = '';

    public $weekendAvailability = '';

    public $interestedSubject = '';

    public $infoDeclaration = '';

    public $privacyDeclaration = '';

    public $referalSource = '';

    public $userIPAddr = '';

    public $userAgentDetails = '';

    /**
	 * Return string format of object.
	 *
	 * @return string representation of object.
	 * @throws \Exception
	 */
	public function toString()
	{
        return "First Name : " . $this->firstName . ", Last Name : " . $this->lastName . ", Email Address : " . $this->emailAddress 
        . ", Phone Number : " . $this->phoneNumber . ", Age : " . $this->age . ", Location : " . $this->location 
        . ", Qualification : " . $this->qualification . ", Institution : " . $this->institution . ", Weekend availability : " 
        . $this->weekendAvailability . ", Interested Sub : " . $this->interestedSubject . ", IP Address : " . $this->userIPAddr;
	}

}
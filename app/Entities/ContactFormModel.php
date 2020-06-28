<?php namespace App\Entities;

use CodeIgniter\Entity; 

class ContactFormModel extends Entity
{

    public $firstName = '';

    public $lastName = '';

    public $emailAddress = '';

    public $phoneNumber = '';

    public $subjectCategory = '';

    public $subjectOtherDesc = null;

    public $userMessage = '';

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
        . ", Phone Number : " . $this->phoneNumber . ", Subject : " . $this->subjectCategory . ", Subject Other : " . $this->subjectOtherDesc 
        . ", Message : " . $this->userMessage . ", IP Address : " . $this->userIPAddr;
	}

}
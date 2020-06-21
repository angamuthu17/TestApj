<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{

    public function index()
    {
        return $this->load('home');
    }

    public function registerFefa()
    {
        $student = new \App\Entities\Student();

        $student->firstName = $this->request->getPostGet('studentFirstName');
        $student->lastName = $this->request->getPostGet('studentLastName');
        $student->emailAddress = $this->request->getPostGet('studentEmail');
        $student->phoneNumber = $this->request->getPostGet('studentMobile');
        $student->age = $this->request->getPostGet('studentAge');
        $student->location = $this->request->getPostGet('studentLocation');
        $student->qualification = $this->request->getPostGet('studentEducation');
        $student->institution = $this->request->getPostGet('studentInstitutionName');
        $student->weekendAvailability = $this->request->getPostGet('studentAvailability');
        $student->interestedSubject = $this->request->getPostGet('studentsInterest');
        
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
        {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } 
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
        {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } 
        else 
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $student->userIPAddr = $ip;

        log_message('debug','Student detail: ' . $student->toString());

        $emailUtil = new \App\Util\EmailUtil();

        $emailUtil->sendFefaRegisterationEmail($student);

        return true;
    }

    public function processFeedback()
    {
        static $CONTACT_SUBJECT = [
            "onlineClass" => "Feedback / suggestion regarding free online classes",
            "joining" => "Feedback / suggestion regarding joining a initiative",
            "contribution" => "Feedback / suggestion regarding contributing",
            "other" => "Feedback / suggestion - Others",
        ];

        $contactForm = new \App\Entities\ContactFormModel();

        $contactForm->firstName = $this->request->getPostGet('firstName');
        $contactForm->lastName = $this->request->getPostGet('lastName');
        $contactForm->emailAddress = $this->request->getPostGet('contactEmail');
        $contactForm->phoneNumber = $this->request->getPostGet('phone');
        $contactForm->subjectCategory = $CONTACT_SUBJECT[$this->request->getPostGet('subject')];
        $contactForm->subjectOtherDesc = $this->request->getPostGet('subjectOtherDesc');
        $contactForm->userMessage = $this->request->getPostGet('userMessage');
        
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
        {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } 
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
        {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } 
        else 
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $contactForm->userIPAddr = $ip;

        log_message('debug','Contact form: ' . $contactForm->toString());

        $emailUtil = new \App\Util\EmailUtil();

        $emailUtil->sendContactMail($contactForm);

        return true;
    }

    public function load($pagename)
    {
        return $this->renderView($pagename);
    }

    private function renderView($page = 'home', $page_data = [])
    {

        if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $header_data["current_page"] = $page;

        echo view('templates/header', $header_data);
        echo view($page, $page_data);
        echo view('templates/footer');
        
    }

}

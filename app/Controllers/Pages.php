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
        $captcha_token = $this->request->getPostGet('token');
        log_message('debug','Fefa reg captcha token: ' . $captcha_token);
        
        if (!$captcha_token)
        {
            $data = [
                    'success' => false,
                    'text' => "Invalid captcha during submit."
            ];
            return $this->response->setStatusCode(400)->setJSON($data);
        }
        else
        {
            $result = $this->verifyCaptcha($captcha_token);

            if (!$result)
            {
                $data = [
                    'success' => false,
                    'text' => "Invalid captcha during submit."
                ];
                return $this->response->setStatusCode(400)->setJSON($data);
            }
        }

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
        $student->infoDeclaration = $this->request->getPostGet('declaration');
        $student->privacyDeclaration = $this->request->getPostGet('privacyNote');
        $student->referalSource = $this->request->getPostGet('referalSource');
        $student->userAgentDetails =  $this->request->getUserAgent()->getAgentString();
        $student->userIPAddr = $this->request->getIPAddress();

        log_message('debug','Student detail: ' . $student->toString());

        $emailUtil = new \App\Util\EmailUtil();

        $emailUtil->sendFefaRegisterationEmail($student);

        $data = [
            'success' => true,
            'text' => "Registeration received."
        ];
        $this->response->setBody("");
        return $this->response->setStatusCode(200)->setJSON($data);
    }

    public function processFeedback()
    {
        $captcha_token = $this->request->getPostGet('token');
        log_message('debug','Contact Us captcha token: ' . $captcha_token);
        
        if (!$captcha_token)
        {
            $data = [
                    'success' => false,
                    'text' => "Invalid captcha during submit."
            ];
            return $this->response->setStatusCode(400)->setJSON($data);
        }
        else
        {
            $result = $this->verifyCaptcha($captcha_token);

            if (!$result)
            {
                $data = [
                    'success' => false,
                    'text' => "Invalid captcha during submit."
                ];
                return $this->response->setStatusCode(400)->setJSON($data);
            }
        }

        static $CONTACT_SUBJECT = [
            "onlineClass" => "Feedback / suggestion regarding free online classes",
            "joining" => "Feedback / suggestion regarding joining a initiative",
            "contribution" => "Feedback / suggestion regarding contribution",
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
        $contactForm->userAgentDetails =  $this->request->getUserAgent()->getAgentString();
        $contactForm->userIPAddr = $this->request->getIPAddress();

        log_message('debug','Contact form: ' . $contactForm->toString());

        $emailUtil = new \App\Util\EmailUtil();

        $emailResp = $emailUtil->sendContactMail($contactForm);

        $data = [
            'success' => true,
            'text' => "Contact form received."
        ];
        $this->response->setBody("");
        return $this->response->setStatusCode(200)->setJSON($data);
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


    private function verifyCaptcha($token)
    {
        $captcha_secret_key = "6Lcl5akZAAAAAHVzKaIlXdwURATDU1XdYlnIeF3h";
        
        $data = array('secret' => $captcha_secret_key, 'response' => $token);

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
   
        $status = json_decode($response, true);
        log_message('debug','Google verify response: ' . $response);
         
        if($status['success'] && $status['score'] > 0.5) 
        {
          return true;
        } 

        return false;
    }

}

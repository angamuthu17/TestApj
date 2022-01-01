<?php namespace App\Util;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailUtil
{
    
	public function sendContactMail($contactFormData)
	{
        $mail = $this->configEmail();
        
        $this->sendThankYouToUser($mail, $contactFormData);
        $this->sendEmailToAdmin($mail, $contactFormData);

        return true;
    }

    private function sendThankYouToUser($mail, $contactFormData)
    {
        try
        {
            $mailBody = file_get_contents('../app/Views/templates/email/contact_email_to_user.html');

            if ($mail != null)
            {
                $mail->setFrom('contact@joinapj.com', 'A Purposeful Journey');

                $mail->ClearAddresses();
                $mail->addAddress($contactFormData->emailAddress , $contactFormData->firstName);
                $mail->Subject = 'Thank you for contacting A Purposeful Journey!';
                
                $userName = $contactFormData->firstName . ' ' .$contactFormData->lastName;
                $mailBody = str_replace("{userName}", $userName, $mailBody);
                $mail->msgHTML($mailBody);

                $mail->AltBody = $mailBody;

                $mail->send();
                log_message('debug', 'Email sent');
            }
            else
            {
                log_message('error',"Message could not be sent. mail config returned NULL.");    
            }
        }
        catch (Exception $e) 
        {
            log_message('error',"Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

    private function sendEmailToAdmin($mail, $contactFormData)
    {
        try
        {
            $mailBody = file_get_contents('../app/Views/templates/email/contact_email_to_admin.html');

            if ($mail != null)
            {
                $mail->setFrom('contact@joinapj.com', 'A Purposeful Journey');
                $mail->ClearAddresses();
                $mail->addAddress('contact@joinapj.com' , 'A Purposeful Journey');
                $mail->Subject = $contactFormData->subjectCategory;
                
                $userName = $contactFormData->firstName . ' ' .$contactFormData->lastName;
                $mailBody = str_replace("{userName}", $userName, $mailBody);
                $mailBody = str_replace("{firstName}", $contactFormData->firstName, $mailBody);
                $mailBody = str_replace("{lastName}", $contactFormData->lastName, $mailBody);
                $mailBody = str_replace("{emailAddress}", $contactFormData->emailAddress, $mailBody);
                $mailBody = str_replace("{mobileNumber}", $contactFormData->phoneNumber, $mailBody);
                $mailBody = str_replace("{messageSubject}", $contactFormData->subjectCategory, $mailBody);
                $mailBody = str_replace("{subjectOthDesc}", $contactFormData->subjectOtherDesc, $mailBody);
                $mailBody = str_replace("{userMessage}", $contactFormData->userMessage, $mailBody);
                $mailBody = str_replace("{ipAddress}", $contactFormData->userIPAddr, $mailBody);
                $mailBody = str_replace("{userAgent}", $contactFormData->userAgentDetails, $mailBody);

                $mail->msgHTML($mailBody);

                $mail->AltBody = $mailBody;

                $mail->send();
                log_message('debug', 'Email sent');
            }
            else
            {
                log_message('error',"Message could not be sent. mail config returned NULL.");    
            }
        }
        catch (Exception $e) 
        {
            log_message('error',"Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

    public function sendFefaRegisterationEmail($student)
	{
        $mail = $this->configEmail();


        $this->sendConfirmationEmail($mail, $student);
        $this->sendRegEmailToAdmin($mail, $student);

        return true;
    }

    private function sendConfirmationEmail($mail, $student)
    {
        try
        {
            $mailBody = file_get_contents('../app/Views/templates/email/fefa_email_to_user.html');

            if ($mail != null)
            {
                $mail->setFrom('contact@joinapj.com', 'A Purposeful Journey');

                $mail->ClearAddresses();
                $mail->addAddress($student->emailAddress , $student->firstName);
                $mail->Subject = 'Free online weekend class registration - A Purposeful Journey';
                
                $userName = $student->firstName . ' ' .$student->lastName;
                $mailBody = str_replace("{userName}", $userName, $mailBody);
                $mail->msgHTML($mailBody);

                $mail->AltBody = $mailBody;

                $mail->send();
                log_message('debug', 'Email sent');
            }
            else
            {
                log_message('error',"Message could not be sent. mail config returned NULL.");    
            }
        }
        catch (Exception $e) 
        {
            log_message('error',"Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

    private function sendRegEmailToAdmin($mail, $student)
    {
        try
        {
            $mailBody = file_get_contents('../app/Views/templates/email/fefa_email_to_admin.html');

            if ($mail != null)
            {
                $mail->setFrom('contact@joinapj.com', 'A Purposeful Journey');
                $mail->ClearAddresses();
                $mail->addAddress('learn@joinapj.com' , 'A Purposeful Journey');
                $mail->Subject = 'New registration for free weekend online class.';
                
                $userName = $student->firstName . ' ' .$student->lastName;
                $mailBody = str_replace("{userName}", $userName, $mailBody);
                $mailBody = str_replace("{firstName}", $student->firstName, $mailBody);
                $mailBody = str_replace("{lastName}", $student->lastName, $mailBody);
                $mailBody = str_replace("{emailAddress}", $student->emailAddress, $mailBody);
                $mailBody = str_replace("{mobileNumber}", $student->phoneNumber, $mailBody);
                $mailBody = str_replace("{age}", $student->age, $mailBody);
                $mailBody = str_replace("{location}", $student->location, $mailBody);
                $mailBody = str_replace("{qualification}", $student->qualification, $mailBody);
                $mailBody = str_replace("{institution}", $student->institution, $mailBody);
                $mailBody = str_replace("{weekendAvailabiity}", $student->weekendAvailability, $mailBody);
                $mailBody = str_replace("{interestedSubject}", $student->interestedSubject, $mailBody);
                $mailBody = str_replace("{infoDec}", $student->infoDeclaration, $mailBody);
                $mailBody = str_replace("{privacyDec}", $student->privacyDeclaration, $mailBody);
                $mailBody = str_replace("{referalSource}", $student->referalSource, $mailBody);
                $mailBody = str_replace("{ipAddress}", $student->userIPAddr, $mailBody);
                $mailBody = str_replace("{userAgent}", $student->userAgentDetails, $mailBody);

                $mail->msgHTML($mailBody);

                $mail->AltBody = $mailBody;

                $mail->send();
                log_message('debug', 'Email sent');
            }
            else
            {
                log_message('error',"Message could not be sent. mail config returned NULL.");    
            }
        }
        catch (Exception $e) 
        {
            log_message('error',"Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
    
    private function configEmail() : PHPMailer
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();  
            $mail->SMTPDebug = 0;
            $mail->SMTPKeepAlive = true;   
            $mail->Mailer = 'smtp';                                     // don't change the quotes!
            $mail->SMTPSecure = "tls";
            $mail->SMTPAutoTLS = false;
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );

            $mail->Username   = 'contact@joinapj.com';                     // SMTP username
            $mail->Password   = 'Join2apjnow';                          // SMTP password
            
            $mail->Host = 'smtp.hostinger.com';
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            // Content
            $mail->isHTML(true);
        } catch (Exception $e) {
            log_message('error',"Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
        return $mail;
    }

}
